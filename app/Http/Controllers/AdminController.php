<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class AdminController extends Controller
{
    // views
    public function index()
    {
        $users = User::paginate(5);

        return view('admin.index', [
            "title" => "Halaman Admin",
            'users' => $users
        ]);
    }

    public function transaksiUser()
    {
        // Pengguna yang ingin melakukan pembayaran
        $users = User::whereHas('transaksi', function ($query) {
            $query->where('waktu_pembayaran'); 
        })->get();
    
        // Riwayat transaksi
        $transactions = Transaksi::all();
    
        return view('admin.transaksiUser', [
            "title" => "Halaman Admin",
            'users' => $users,
            'transactions' => $transactions,
        ]);
    }    

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('admin')->with('error', 'User tidak ditemukan.');
        }

        $user->delete();

        return redirect()->route('admin')->with('success', 'User berhasil dihapus.');
    }

    public function showUserTransactions($userId)
    {
        // Mengambil data transaksi untuk pengguna tertentu
        $transactions = Transaksi::where('user_id', $userId)->get();

        // Selanjutnya, Anda dapat menggunakan data transaksi ini untuk menampilkan informasi kepada pengguna
    }

    public function deleteTransaction($transactionId)
    {
        // Temukan transaksi berdasarkan ID
        $transaksi = Transaksi::find($transactionId);

        if (!$transaksi) {
            // Handle jika transaksi tidak ditemukan
            return redirect()->back()->with('error', 'Transaksi tidak ditemukan.');
        }

        // Hapus transaksi dari database
        $transaksi->delete();

        // Selanjutnya, Anda dapat melakukan apa pun sesuai kebutuhan aplikasi Anda
    }
}
