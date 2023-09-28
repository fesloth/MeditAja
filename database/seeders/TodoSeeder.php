<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {{
            DB::table('todo')->insert([
                'priority' => 'tes',
                'description' => 'nothing',
                'deadline' => '2023-10-29',
                'status' => 'Done'
            ]); 
        }
    }
}
