<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MoodsTableSeeder extends Seeder
{
    public function run()
    {
        // Define sample moods data
        $moods = [
            [
                'user_id' => 1, // Replace with a valid user ID
                'mood' => 'Happy',
                'description' => 'Feeling great today!',
            ],
            [
                'user_id' => 2, // Replace with another user ID
                'mood' => 'Sad',
                'description' => 'Not a good day.',
            ],
            // Add more mood records as needed
        ];

        // Insert the data into the "moods" table
        DB::table('moods')->insert($moods);
    }
}

