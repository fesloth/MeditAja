<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data transaksi
        $transaksi = [
            [
                'user_id' => 1, // ID pengguna yang melakukan pembayaran
                'paket_id' => 1, // ID paket premium yang dibeli
                'jumlah_pembayaran' => 300000.00, // Jumlah pembayaran
                'waktu_pembayaran' => Carbon::now(), // Waktu pembayaran saat ini
            ],
            [
                'user_id' => 2,
                'paket_id' => 2,
                'jumlah_pembayaran' => 50000.00,
                'waktu_pembayaran' => Carbon::now(),
            ],
            // Tambahkan data transaksi lain sesuai kebutuhan
        ];

        // Insert data ke tabel transaksi
        DB::table('transaksi')->insert($transaksi);
    }
}
