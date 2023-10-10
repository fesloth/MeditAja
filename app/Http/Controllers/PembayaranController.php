<?php

namespace App\Http\Controllers;

use App\Models\PaketPremium;
use Illuminate\Http\Request;

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
}
