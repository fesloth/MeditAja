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

    public function index($harga)
    {
        $paketPremiums = PaketPremium::all();

        return view('dashboard.action.pembayaran', [
            "title" => "Payment",
            "paketPremiums" => $paketPremiums,
            "hargaPaket" => $harga,
        ]);
    }

    public function createTransaction(Request $request)
    {
        $user_id = Auth::id(); 
        // Validate and retrieve the form input data
        $validatedData = $request->validate([
            'payment_method' => 'required', 
            'jumlah_pembayaran' => 'required', 
        ]);      
        
        $validatedData['user_id'] = $user_id;

        // Create a new transaction
        $transaksi = new Transaksi($validatedData);

        // Save the transaction to the database
        $transaksi->save();

        return redirect()->route('admin');
    }
}
