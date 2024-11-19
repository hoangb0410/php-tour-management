<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            [
                'country' => 'Vietnam',
                'province' => 'Hanoi',
                'district' => 'Ba Dinh',
                'street' => 'Dien Bien Phu',
                'description' => 'Historical area with many landmarks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country' => 'Japan',
                'province' => 'Tokyo',
                'district' => 'Shibuya',
                'street' => 'Shibuya Crossing',
                'description' => 'Famous for its busy pedestrian crossing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country' => 'France',
                'province' => 'Île-de-France',
                'district' => 'Paris',
                'street' => 'Champs-Élysées',
                'description' => 'Renowned avenue with shops and cafes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'country' => 'USA',
                'province' => 'California',
                'district' => 'San Francisco',
                'street' => 'Lombard Street',
                'description' => 'Known for its steep, crooked street.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
