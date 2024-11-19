<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            [
                'destination_id' => 1, // Assuming the ID for Vietnam, Hanoi is 1
                'url' => 'uploads/Hạ Long.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 2, // Assuming the ID for Japan, Tokyo is 2
                'url' => 'uploads/newyear.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 3, // Assuming the ID for France, Paris is 3
                'url' => 'uploads/Party.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'destination_id' => 4, // Assuming the ID for USA, San Francisco is 4
                'url' => 'uploads/UET.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
