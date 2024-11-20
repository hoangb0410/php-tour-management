<?php

namespace App\Repositories;

use App\Models\TourItinerary;

class TourItineraryRepository extends BaseRepository
{
    public function __construct(TourItinerary $tourItinerary)
    {
        parent::__construct($tourItinerary);
    }
}
