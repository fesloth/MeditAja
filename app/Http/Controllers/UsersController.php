<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('users.profile', [
            "title" => "Profile Setting"
        ]);
    }

    public function edit()
    {
        return view('users.action.edit', [
            "title" => "Edit Profile"
        ]);
    }
}
