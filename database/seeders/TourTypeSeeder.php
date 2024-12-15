<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tour_types')->insert([
            [
                'name' => 'City-Break',
                'description' => 'Short trips to urban destinations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wildlife',
                'description' => 'Tours focused on observing wildlife in their natural habitats.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cultural',
                'description' => 'Experiences that immerse you in the local culture and traditions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ecotourism',
                'description' => 'Sustainable travel to natural areas that conserves the environment.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sun and Beaches',
                'description' => 'Relaxing vacations at sunny beach destinations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
