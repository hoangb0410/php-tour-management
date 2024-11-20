<?php

namespace App\Services;

use App\Repositories\TourTypeRepository;

class TourTypeService
{
    protected $tourTypeRepository;

    public function __construct(TourTypeRepository $tourTypeRepository)
    {
        $this->tourTypeRepository = $tourTypeRepository;
    }

    public function getAllTourTypes()
    {
        return $this->tourTypeRepository->get();
    }
}
