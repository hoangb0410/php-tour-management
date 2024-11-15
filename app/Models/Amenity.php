<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Amenity extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class, 'hotels_amenities', 'amenity_id', 'hotel_id');
    }

    public function rooms(): BelongsToMany
    {
        return $this->belongsToMany(Room::class, 'rooms_facilities', 'amenity_id', 'room_id');
    }
}
