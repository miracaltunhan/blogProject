<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Kullanıcının rolünü kontrol et
        $user=Auth::user();
        dd($user->hasRole());
        if ($user->hasRole('admin') || $user->hasRole('writer')) {
            return $next($request);
        }

        // Eğer kullanıcı uygun değilse, home sayfasına yönlendir
        return redirect('/home');
    }

}
