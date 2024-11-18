<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tour_id',
        'hotel_id',
        'room_id',
        'destination_id',
        'url',
    ];

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function destination(): BelongsTo
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
}
