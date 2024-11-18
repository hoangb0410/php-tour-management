<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'hotel_id',
        'name',
        'area',
        'bed_number',
        'price',
        'guest_number',
        'description',
    ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function facilities(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'rooms_facilities', 'room_id', 'amenity_id');
    }

    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(Booking::class, 'rooms_bookings', 'room_id', 'booking_id')->withPivot('quantity', 'price');;
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'room_id');
    }
}
