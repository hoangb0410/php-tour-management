<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stops')->insert([
            // Stops for tour_id 1
            [
                'tour_itinerary_id' => 1,
                'stop_name' => 'City Center',
                'description' => 'Explore the main attractions in the city center.',
                'duration' => '3 hours',
                'admission_info' => 'Free entry',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_itinerary_id' => 1,
                'stop_name' => 'Historic Museum',
                'description' => 'Visit the museum to learn about the city\'s history.',
                'duration' => '2 hours',
                'admission_info' => 'Entry fee: $10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_itinerary_id' => 2,
                'stop_name' => 'Local Market',
                'description' => 'Experience the local market and try some street food.',
                'duration' => '1.5 hours',
                'admission_info' => 'Free entry',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Stops for tour_id 2
            [
                'tour_itinerary_id' => 3,
                'stop_name' => 'Safari Park',
                'description' => 'Go on a safari to see wild animals in their natural habitat.',
                'duration' => '4 hours',
                'admission_info' => 'Entry fee: $20',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_itinerary_id' => 3,
                'stop_name' => 'Nature Trail',
                'description' => 'Hike through the nature trail and enjoy bird watching.',
                'duration' => '3 hours',
                'admission_info' => 'Free entry',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Stops for tour_id 3
            [
                'tour_itinerary_id' => 5,
                'stop_name' => 'Heritage Site',
                'description' => 'Visit the cultural heritage site and learn about its significance.',
                'duration' => '2 hours',
                'admission_info' => 'Entry fee: $15',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_itinerary_id' => 6,
                'stop_name' => 'Dance Performance',
                'description' => 'Enjoy a traditional dance performance.',
                'duration' => '1.5 hours',
                'admission_info' => 'Entry fee: $10',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
