<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        return view('dashboard.index', [
            "title" => "Home",
            "user" => $user
        ]);
    }

    public function premium()
    {
        return view('dashboard.premium', [
            "title" => "Premium"
        ]);
    }

    public function music()
    {
        return view('dashboard.music', [
            "title" => "Playlist"
        ]);
    }
}
