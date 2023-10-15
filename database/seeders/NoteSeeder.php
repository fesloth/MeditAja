<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat catatan untuk pengguna pertama (user_id 1)
        Note::create([
            'title' => 'Meeting',
            'content' => 'Pertemuan dengan klien',
            'user_id' => 1,
        ]);

        // Buat catatan untuk pengguna kedua (user_id 2)
        Note::create([
            'title' => 'Catatan Pribadi',
            'content' => 'Catatan pribadi Anda',
            'user_id' => 2,
        ]);

        Note::create([
            'title' => 'Meeting',
            'content' => 'Pertemuan dengan klien',
            'user_id' => 1,
            'category_id' => 1,
        ]);

        // Buat catatan untuk pengguna kedua (user_id 2) dengan kategori 2
        Note::create([
            'title' => 'Catatan Pribadi',
            'content' => 'Catatan pribadi Anda',
            'user_id' => 2,
            'category_id' => 2,
        ]);


        // Tambahkan catatan lain jika diperlukan untuk pengguna lain
    }
}
