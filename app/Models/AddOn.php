<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AddOn extends Model
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
        'price',
    ];

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(Booking::class, 'add_ons_bookings', 'add_on_id', 'booking_id')->withPivot('quantity', 'price');
    }
}
