<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Http\Request;

class LoginResponse implements LoginResponseContract
{
    /**
     * Handle the response after login.
     */
    public function toResponse($request)
    {
        $user = $request->user();

        // Redirect based on role
        if ($user->role === 'admin') {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->intended('/user/dashboard');
    }
}
