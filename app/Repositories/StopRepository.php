<?php

namespace App\Repositories;

use App\Models\Stop;

class StopRepository extends BaseRepository
{
    public function __construct(Stop $stop)
    {
        parent::__construct($stop);
    }
}
