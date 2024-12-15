<?php

namespace App\Repositories;

use App\Models\TourType;

class TourTypeRepository extends BaseRepository
{
    public function __construct(TourType $tourType)
    {
        parent::__construct($tourType);
    }
}
