<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use Carbon\Carbon;

class AdminController extends Controller
{
    // views
    public function index()
    {
        $users = User::paginate(4);

        $transactions = Transaksi::all();

        return view('admin.index', [
            "title" => "Halaman Admin",
            'users' => $users,
            'transactions' => $transactions,
        ]);
    }

    public function deleteUser($id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::find($id);

        if (!$user) {
            // Handle jika pengguna tidak ditemukan
            return redirect()->route('admin')->with('error', 'User not found.');
        }

        // Hapus semua todo yang terkait dengan pengguna
        $user->todos()->delete();
        $user->transaksi()->delete();

        // Hapus pengguna dari database
        $user->delete();

        return redirect()->route('admin')->with('success', 'User and related todos have been deleted successfully.');
    }

    public function transaksiUser()
    {
        // Pengguna yang ingin melakukan pembayaran
        $users = User::whereHas('transaksi')->get();

        // Riwayat transaksi
        $transactions = Transaksi::all();

        return view('admin.transaksiUser', [
            "title" => "Halaman Admin",
            'users' => $users,
            'transactions' => $transactions,
        ]);
    }

    public function showUserTransactions($userId)
    {
        // Mengambil data transaksi untuk pengguna tertentu
        $transactions = Transaksi::where('user_id', $userId)->get();
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

        return redirect()->route('adminTransaksi')->with('success', 'Transaksi berhasil dihapus');
    }

    // AdminController.php

    public function makeUserPremium($id)
    {
        // Find the user by their ID
        $user = User::find($id);

        if (!$user) {
            // Handle the case where the user is not found
            return redirect()->route('admin')->with('error', 'User not found.');
        }

        // Set the user as a premium user
        $user->is_premium = true;
        $user->premium_start_date = now(); // Menyimpan tanggal saat pengguna menjadi premium
        $user->save();

        return redirect()->route('admin')->with('success', 'User is now premium.');
    }

    public function cancelPremium($id)
    {
        // Retrieve the user by ID
        $user = User::find($id);

        if (!$user) {
            // Handle the case where the user is not found
            return redirect()->back()->with('error', 'User not found.');
        }

        // Check if the user is already a premium user
        if ($user->is_premium) {
            // Cancel premium status (you can implement your logic here)
            $user->is_premium = false;
            $user->save();

            return redirect()->back()->with('success', 'Premium status canceled successfully.');
        } else {
            return redirect()->back()->with('error', 'User is not a premium user.');
        }
    }

    public function reportForm(Request $request, $userId)
    {
        $user = User::find($userId);

        if (!$user) {
            return redirect()->route('admin')->with('error', 'User not found.');
        }

        return view('admin.action.reportUser', [
            'title' => 'Form Report',
            'user' => $user,
        ]);
    }

    public function reportUser(Request $request, $userId)
    {
        $user = User::find($userId);

        if (!$user) {
            return redirect()->route('admin')->with('error', 'User not found.');
        }

        $reportReason = $request->input('report_reason');

        // Simpan alasan pelaporan ke dalam kolom report_reason
        $user->report_reason = $reportReason;
        $user->save();

        return redirect()->route('admin')->with('success', 'User reported successfully.');
    }

    public function deleteReport($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            return redirect()->route('admin')->with('error', 'User not found.');
        }

        // Hapus laporan dari kolom report_reason
        $user->report_reason = null;
        $user->save();

        return redirect()->route('admin')->with('success', 'Report deleted successfully.');
    }
}
