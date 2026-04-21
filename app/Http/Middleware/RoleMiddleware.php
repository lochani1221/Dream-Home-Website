<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        $user = Auth::user();

        if (!$user) {
            // Redirect to login if not authenticated
            return redirect()->route('login');
        }

        // Check role (case-insensitive)
        if (strtolower($user->role) !== strtolower($role)) {
            return redirect('/'); // Redirect to landing page if role does not match
        }

        return $next($request);
    }
}
