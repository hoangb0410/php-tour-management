<?php

namespace App\Services;

use App\Repositories\StopRepository;

class StopService {
    protected $stopRepository;

    public function __construct(StopRepository $stopRepository)
    {
        $this->stopRepository = $stopRepository;
    }

    
}