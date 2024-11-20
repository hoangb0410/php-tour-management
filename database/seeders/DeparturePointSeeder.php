<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeparturePointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departure_points')->insert([
            [
                'tour_id' => 1,
                'address' => '123 Main St, Hanoi, Vietnam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_id' => 2,
                'address' => '456 Shibuya Crossing, Tokyo, Japan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_id' => 3,
                'address' => '789 Champs-Élysées, Paris, France',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
