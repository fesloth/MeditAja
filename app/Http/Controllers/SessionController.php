<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $credentials = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
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
}
