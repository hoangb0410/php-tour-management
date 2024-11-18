<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tour_itinerary_id',
        'stop_name',
        'description',
        'duration',
        'admission_info',
    ];

    public function tourItineraries(): BelongsTo
    {
        return $this->belongsTo(TourItinerary::class, 'tour_itinerary_id');
    }
}
