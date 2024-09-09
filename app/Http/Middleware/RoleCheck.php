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
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {// Kullanıcı giriş yapmamışsa, role kontrolü yapma
        if (!Auth::check()) {
            return $next($request); // Oturum açmamışsa, middleware'i atla
        }

        // Kullanıcı rolünü kontrol et
        if (Auth::user()->role == "1") {
            return $next($request);
        }

        // Yanlış rol, home sayfasına yönlendir
        return redirect('/home');
    }
}
