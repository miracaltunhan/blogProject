<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()) {
            // Kullanıcı rolünü kontrol et
            $user=Auth::user();

            if ($user->hasRole('admin') || $user->hasRole('writer')) {
                return $next($request);
            }
        }

        return redirect('/home');
    }

}
