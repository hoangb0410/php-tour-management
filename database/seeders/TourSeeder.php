<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tours')->insert([
            [
                'name' => 'Hanoi City Tour',
                'duration' => '2 days',
                'destination_id' => 1,
                'departure_time' => '08:00 AM',
                'type_id' => 1,
                'number_of_guest' => 20,
                'price' => 150.00,
                'rating' => 0,
                'overview' => 'Set sail for the idyllic Italian island of Capri on this full-day tour, including round-trip jetfoil transfers from Naples or Sorrento. Stop to browse the handicraft stores of Anacapri and soak up the atmosphere in buzzing La Piazzetta. Top it off with a visit to the Blue Grotto and a funicular ride to Marina Grande.',
                'inclusion' => json_encode([
                    'Port pickup and drop-off',
                    'Local guide',
                    'Round-trip shared transfer',
                    'Transport by minibus',
                    'Blue Grotto admission tickets',
                    'Shared boat ride tour around the island (if Blue Grotto is closed)'
                ]),
                'additional_info' => json_encode([
                    'Confirmation will be received at time of booking',
                    'Not recommended for travelers with back problems',
                    'Not recommended for pregnant travelers',
                    'Infant seats available',
                    'Not wheelchair accessible',
                    'Children must be accompanied by an adult',
                    'Vegetarian option is available, please advise at time of booking if required',
                    'Minimum numbers apply',
                    'There is a possibility of cancellation after confirmation if the meteorological conditions do not allow it',
                    'Stroller accessible',
                    'Service animals allowed',
                    'Near public transportation',
                    'Most travelers can participate',
                    'This tour/activity will have a maximum of 17 travelers'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
