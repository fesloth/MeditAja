<?php

namespace App\Http\Middleware;

use Closure;

class PremiumUser
{
    public function handle($request, Closure $next)
    {
        // Check if the user is a premium user
        if (auth()->check() && auth()->user()->is_premium) {
            // User is a premium user, allow access to the routes
            return $next($request);
        }

        // User is not a premium user, deny access
        return redirect()->route('peringatan')->with('error', 'You are not allowed to access this page.');
    }
}
