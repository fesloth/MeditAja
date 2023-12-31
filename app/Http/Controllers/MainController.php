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

    public function peringatan()
    {
        $user = Auth::user();
        
        return view('dashboard.peringatan', [
            "title" => "Warning!",
            "user" => $user
        ]);
    }
}
