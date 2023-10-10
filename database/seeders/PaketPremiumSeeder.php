<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketPremiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            [
                'nama_paket' => 'Paket Tahunan',
                'deskripsi' => 'Akses premium selama satu tahun.',
                'harga' => 300000.00,
            ],
            [
                'nama_paket' => 'Paket Bulanan',
                'deskripsi' => 'Akses premium selama satu bulan.',
                'harga' => 50000.00,
            ],
            [
                'nama_paket' => 'Paket Mingguan',
                'deskripsi' => 'Akses premium selama satu minggu.',
                'harga' => 20000.00,
            ],
        ];

        // Memasukkan data ke dalam tabel paket_premium
        DB::table('paket_premium')->insert($data);
    } 
}
