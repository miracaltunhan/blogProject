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
        // Kullanıcının admin rolüne sahip olup olmadığını kontrol et
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return $next($request);
        }

        // Eğer kullanıcı admin değilse, home sayfasına yönlendir
        return redirect('/home');
    }
}
