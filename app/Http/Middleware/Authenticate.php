<?php

namespace App\Http\Middleware;

use Closure; // Tambahkan ini
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function handle($request, Closure $next, ...$guards) 
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // Mengarahkan pengguna ke halaman login jika belum login
        }

        return $next($request); 
    }
}
