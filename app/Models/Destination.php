<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'country',
        'province',
        'district',
        'street',
        'description',
    ];

    public function hotels(): HasMany
    {
        return $this->hasMany(Hotel::class, 'destination_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'destination_id');
    }

    public function tours(): HasMany
    {
        return $this->hasMany(Tour::class, 'destination_id');
    }
}
