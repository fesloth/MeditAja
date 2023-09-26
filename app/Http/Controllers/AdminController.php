<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // views
    public function index()
    {
        return view('admin.index', [
            "title" => "Halaman Admin"
        ]);
    }
}
