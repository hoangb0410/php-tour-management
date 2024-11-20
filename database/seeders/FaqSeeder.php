<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            [
                'tour_id' => 1,
                'question' => 'What is included in the tour?',
                'answer' => 'The tour includes transportation, guide, and meals.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_id' => 1,
                'question' => 'What should I bring?',
                'answer' => 'Bring comfortable shoes, sunscreen, and a camera.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tour_id' => 1,
                'question' => 'Is the tour suitable for children?',
                'answer' => 'Yes, the tour is family-friendly and suitable for all ages.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
