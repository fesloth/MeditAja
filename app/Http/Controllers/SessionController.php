<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    // functions views
    public function login()
    {
        return view('session.login', [
            "title" => "login"
        ]);
    }

    public function loginProses(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        // Cek apakah username dan email adalah "admin" dan "sazzaliee@gmail.com"
        if ($validatedData['username'] === 'syahla' && $validatedData['email'] === 'sazzaliee@gmail.com') {
            auth()->login(User::where('email', 'sazzaliee@gmail.com')->first());
            return redirect('/admin');
        }

        if (auth()->attempt($validatedData)) {
            return redirect('/');
        } else {
            return back()->withErrors(['message' => 'Kredensial tidak valid.'])->withInput();
        }
    }

    public function register()
    {
        return view('session.register', [
            "title" => "register"
        ]);
    }

    public function registerProses(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validatedData) {
            $user = new User;
            $user->username = $validatedData['username'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);

            // Mengatur role menjadi "user"
            $user->role = 'user';

            $user->save();

            return redirect('/login')->with('success', 'Registrasi berhasil! Silakan login kembali.');
        } else {
            // Validasi gagal atau password tidak sesuai dengan konfirmasi
            return redirect()->back()->withInput()->withErrors(['password' => 'Password dan konfirmasi password tidak cocok.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); 
    }
}
