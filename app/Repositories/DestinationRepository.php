<?php

namespace App\Repositories;

use App\Models\Destination;

class DestinationRepository extends BaseRepository
{
    public function __construct(Destination $destination)
    {
        parent::__construct($destination);
    }
}
