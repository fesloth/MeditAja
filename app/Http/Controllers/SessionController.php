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
    public function register()
    {
        return view('session.register', [
            "title" => "register"
        ]);
    }
}
