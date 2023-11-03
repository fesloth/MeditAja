<?php

namespace App\Http\Controllers;

use App\Models\PaketPremium;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

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

    public function index($harga, $paket_id)
    {
        $paketPremiums = PaketPremium::all();

        return view('dashboard.action.pembayaran', [
            "title" => "Payment",
            "paketPremiums" => $paketPremiums,
            "hargaPaket" => $harga,
            "paket_id" => $paket_id, 
        ]);
    }

    public function createTransaction(Request $request)
    {
        // Validate and retrieve the form input data
        $validatedData = $request->validate([
            'payment_method' => 'required',
            'jumlah_pembayaran' => 'required',
            'paket_id' => 'required',
        ]);
    
        // Create a new transaction
        $transaksi = new Transaksi($validatedData);
    
        // Set the user_id for the transaction
        $transaksi->user_id = Auth::id();
    
        // Save the transaction to the database
        $transaksi->save();
    
        return redirect()->route('admin');
    }
    
}
