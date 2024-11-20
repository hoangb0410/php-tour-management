<?php

namespace App\Services;

use App\Repositories\TourItineraryRepository;

class TourItineraryService
{
    protected $tourItineraryRepository;

    public function __construct(TourItineraryRepository $tourItineraryRepository)
    {
        $this->tourItineraryRepository = $tourItineraryRepository;
    }
}
