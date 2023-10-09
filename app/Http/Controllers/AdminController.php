<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // views
    public function index()
    {
        $users = User::paginate(5);

        return view('admin.index', [
            "title" => "Halaman Admin",
            'users' => $users
        ]);
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->route('admin')->with('error', 'User tidak ditemukan.');
        }
    
        $user->delete();
    
        return redirect()->route('admin')->with('success', 'User berhasil dihapus.');
    }
    
}
