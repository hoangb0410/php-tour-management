<?php

namespace App\Services;

use App\Helpers\Common;
use App\Repositories\TourRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

use function App\Helpers\uploadImages;

class TourService
{
    protected $tourRepository;

    public function __construct(TourRepository $tourRepository)
    {
        $this->tourRepository = $tourRepository;
    }

    public function getAjaxTour()
    {
        $tourData = $this->tourRepository->get();
        return DataTables::of($tourData)
            ->addIndexColumn()
            ->addColumn('name', function ($tourData) {
                return $tourData->name;
            })
            ->addColumn('duration', function ($tourData) {
                return $tourData->duration;
            })
            ->addColumn('destination', function ($tourData) {
                return $tourData->destination->district . ', ' . $tourData->destination->province;
            })
            ->addColumn('departure_time', function ($tourData) {
                return Carbon::parse($tourData->departure_time)->format('g:i A');
            })
            ->addColumn('type', function ($tourData) {
                return $tourData->type->name;
            })
            ->addColumn('number_of_guest', function ($tourData) {
                return $tourData->number_of_guest;
            })
            ->addColumn('price', function ($tourData) {
                return $tourData->price;
            })
            ->addColumn('rating', function ($tourData) {
                return $tourData->rating;
            })
            ->addColumn('action', function ($tourData) {
                return view('admin.elements.action-buttons')->with([
                    'url_edit' => route('tour.view-edit', ['id' => $tourData->id]),
                    'url_destroy' => route('tour.delete', ['id' => $tourData->id])
                ]);
            })->make(true);
    }

    public function viewEditTour($id)
    {
        return $this->tourRepository->getById($id);
    }

    public function createTour($request)
    {
        $data = [
            'name' => Common::clearXss($request->name),
            'duration' => Common::clearXss($request->duration),
            'destination_id' => $request->destination_id,
            'departure_time' => $request->departure_time,
            'type_id' => $request->type_id,
            'number_of_guest' => $request->number_of_guest,
            'price' => $request->price,
            'rating' => 0,
            'overview' => $request->overview,
            'inclusion' => $request->inclusion,
            'additional_info' => $request->additional_info,
        ];

        $inclusion = $request->inclusion;
        $additionalInfo = $request->additional_info;

        // split by ";"
        $inclusionArray = array_map('trim', explode(';', $inclusion));
        $additionalInfoArray = $additionalInfo ? array_map('trim', explode(';', $additionalInfo)) : [];

        // Convert the arrays to JSON format
        $data['inclusion'] = json_encode($inclusionArray);
        $data['additional_info'] = json_encode($additionalInfoArray);

        $tour = $this->tourRepository->create($data);

        if ($request->hasFile('images')) {
            $uploadedFilePaths = uploadImages($request->file('images'));
            foreach ($uploadedFilePaths as $filePath) {
                $tour->images()->create(['url' => $filePath]);
            }
        }

        // Create multiple Departure Points
        if ($request->departure_points) {
            foreach ($request->departure_points as $departurePoint) {
                $tour->departurePoints()->create([
                    'address' => $departurePoint
                ]);
            }
        }

        // Create multiple Itineraries and Stops
        if ($request->itineraries) {
            foreach ($request->itineraries as $itineraryData) {
                $itinerary = $tour->tourItineraries()->create([
                    'day' => $itineraryData['day'],
                    'place' => $itineraryData['place']
                ]);

                if (isset($itineraryData['stops'])) {
                    foreach ($itineraryData['stops'] as $stopData) {
                        $itinerary->stops()->create([
                            'stop_name' => $stopData['stop_name'],
                            'description' => $stopData['description'],
                            'duration' => $stopData['duration'],
                            'admission_info' => $stopData['admission_info']
                        ]);
                    }
                }
            }
        }
    }

    public function deleteTour($id)
    {
        $tour = $this->tourRepository->getById($id);

        if ($tour) {
            // Delete related images
            foreach ($tour->images as $image) {
                $image->delete();
            }

            // Delete related departure points
            foreach ($tour->departurePoints as $departurePoint) {
                $departurePoint->delete();
            }

            // Delete related itineraries and their stops
            foreach ($tour->tourItineraries as $itinerary) {
                // Delete related stops for this itinerary
                foreach ($itinerary->stops as $stop) {
                    $stop->delete();
                }
                $itinerary->delete();
            }

            // Delete the tour
            $this->tourRepository->delete($id);
        }
    }
}
