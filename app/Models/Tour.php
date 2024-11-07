<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'destination_id',
        'departure_time',
        'type_id',
        'number_of_guest',
        'price',
        'rating',
        'overview',
        'inclusion',
        'additional_info',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'departure_time' => 'datetime:H:i A',
    ];
}
