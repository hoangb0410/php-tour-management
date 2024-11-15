<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(TourType::class, 'type_id');
    }

    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(Booking::class, 'tours_bookings', 'tour_id', 'booking_id')->withPivot('quantity', 'price');
    }

    public function departurePoints(): HasMany
    {
        return $this->hasMany(DeparturePoint::class, 'tour_id');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(Faq::class, 'tour_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'tour_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'tour_id');
    }

    public function tourItineraries(): HasMany
    {
        return $this->hasMany(TourItinerary::class, 'tour_id');
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'departure_time' => 'datetime:H:i A',
    ];
}
