<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //views

    // public function index()
    // {
    //     return view('users.progress', [
    //         "title" => "Progress"
    //     ]);
    // }

    public function profile()
    {
        $user = Auth::user(); // Mengambil data pengguna berdasarkan email yang terkait dengan pengguna yang saat ini masuk

        return view('users.profile', [
            "title" => "Profile Setting",
            'user' => $user // Mengirim data pengguna ke tampilan
        ]);
    }

    public function edit()
    {
        $user = Auth::user();

        return view('users.action.edit', [
            "title" => "Edit Profile",
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request)
    {
        // Validasi data yang dikirimkan dari formulir jika diperlukan

        // Ambil pengguna yang saat ini masuk
        $user = Auth::user();

        // Update username dengan data baru dari formulir
        $user->username = $request->input('new_username'); // 'new_username' adalah nama input untuk username baru

        // Simpan perubahan ke dalam database
        $user->save();
        // Redirect ke halaman profil dengan pesan sukses jika diperlukan
        return redirect('/profile')->with('success', 'Username berhasil diperbarui.');
    }
}
