<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //views

    public function index()
    {
        return view('users.progress', [
            "title" => "Progress"
        ]);
    }
}
