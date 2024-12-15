<?php

namespace App\Services;

use App\Repositories\DestinationRepository;

class DestinationService
{
    protected $destinationRepository;

    public function __construct(DestinationRepository $destinationRepository)
    {
        $this->destinationRepository = $destinationRepository;
    }

    public function getAllDestinations()
    {
        return $this->destinationRepository->get();
    }
}
