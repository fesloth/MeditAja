<?php

namespace App\Http\Controllers;

use App\Models\PaketPremium;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class PembayaranController extends Controller
{
    // views
    public function premium()
    {
        $paketPremiums = PaketPremium::all();

        return view('dashboard.premium', [
            "title" => "Premium",
            "paketPremiums" => $paketPremiums,
        ]);
    }

    public function index($harga)
    {
        $paketPremiums = PaketPremium::all();

        return view('dashboard.action.pembayaran', [
            "title" => "Payment",
            "paketPremiums" => $paketPremiums,
            "hargaPaket" => $harga, // Mengirim variabel $harga ke tampilan
        ]);
    }

    public function createTransaction(Request $request)
{
    // Ambil data yang diperlukan dari request atau sesuai kebutuhan
    $userId = $request->input('user_id');
    $paketId = $request->input('paket_id');
    $jumlahPembayaran = $request->input('jumlah_pembayaran');

    // Buat data transaksi baru
    $transaksi = new Transaksi([
        'user_id' => $userId,
        'paket_id' => $paketId,
        'jumlah_pembayaran' => $jumlahPembayaran,
        'waktu_pembayaran' => now(), // Menggunakan waktu saat ini
    ]);

    // Simpan transaksi ke dalam database
    $transaksi->save();

    // Selanjutnya, Anda dapat melakukan apa pun sesuai kebutuhan aplikasi Anda
}
}
