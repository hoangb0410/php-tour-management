<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hotel extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'destination_id',
        'star',
        'review_score',
        'overview',
        'checkin_rule',
        'checkout_rule',
        'rules',
    ];

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

    public function amenities(): BelongsToMany
    {
        return $this->belongsToMany(Destination::class, 'hotels_amenities', 'hotel_id', 'amenity_id');
    }

    public function addons(): HasMany
    {
        return $this->hasMany(AddOn::class, 'hotel_id');
    }

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class, 'hotel_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'hotel_id');
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'hotel_id');
    }
}
