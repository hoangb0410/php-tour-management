<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'adult_number',
        'children_number',
        'promo_code',
        'total_price',
        'first_name',
        'last_name',
        'email',
        'address',
        'city',
        'province',
        'postal_code',
        'country',
        'special_requirement',
        'payment_method',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tours(): BelongsToMany
    {
        return $this->belongsToMany(Tour::class, 'tours_bookings', 'booking_id', 'tour_id')->withPivot('quantity', 'price');
    }

    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'rooms_bookings', 'booking_id', 'room_id')->withPivot('quantity', 'price');
    }

    public function addons(): BelongsToMany
    {
        return $this->belongsToMany(AddOn::class, 'add_ons_bookings', 'booking_id', 'add_on_id')->withPivot('quantity', 'price');
    }
}
