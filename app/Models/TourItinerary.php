<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TourItinerary extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id',
        'day',
        'place',
    ];

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }

    public function stops(): HasMany
    {
        return $this->hasMany(Stop::class, 'tour_itinerary_id');
    }
}
