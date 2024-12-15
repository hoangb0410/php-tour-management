<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tour_itineraries')->insert([
            [
                'tour_id' => 1,
                'day' => 1,
                'place' => 'Arrival and city tour',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_id' => 1,
                'day' => 2,
                'place' => 'Museum visit and local market',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_id' => 2,
                'day' => 1,
                'place' => 'Wildlife safari',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_id' => 2,
                'day' => 2,
                'place' => 'Nature hike and bird watching',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_id' => 3,
                'day' => 1,
                'place' => 'Cultural heritage site visit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_id' => 3,
                'day' => 2,
                'place' => 'Traditional dance performance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
