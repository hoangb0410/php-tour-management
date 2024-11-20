<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTourRequest;
use App\Services\DestinationService;
use App\Services\TourService;
use App\Services\TourTypeService;
use Illuminate\Support\Facades\DB;

class TourController extends Controller
{
    protected $tourService;
    protected $tourTypeService;
    protected $destinationService;

    public function __construct(TourService $tourService, TourTypeService $tourTypeService, DestinationService $destinationService)
    {
        $this->tourService = $tourService;
        $this->tourTypeService = $tourTypeService;
        $this->destinationService = $destinationService;
    }

    public function index()
    {
        return view('tour.index');
    }

    public function listTours()
    {
        return $this->tourService->getAjaxTour();
    }

    public function viewCreateTour()
    {
        $tourTypes = $this->tourTypeService->getAllTourTypes();
        $destinations = $this->destinationService->getAllDestinations();
        return view('admin.tour.add-tour', compact('tourTypes', 'destinations'));
    }

    public function viewEditTour($id)
    {
        $tour = $this->tourService->viewEditTour($id);
        return response()->json([
            'tour' => $tour
        ]);
    }

    public function createTour(CreateTourRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->tourService->createTour($request);
            DB::commit();
            return response()->json([
                'alert' => 'success',
                'message' => __('admin.create_success', ['model' => 'tour'])
            ], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'alert' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function deleteTour($id)
    {
        try {
            $this->tourService->deleteTour($id);

            return response()->json([
                'alert' => 'success',
                'message' => 'Delete successfully!'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'alert' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
