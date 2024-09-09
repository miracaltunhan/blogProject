<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $roleId)
    {
        $user = Auth::user();

        if ($user && $user->id == $roleId) {
            return $next($request);
        }

        return redirect('/home'); // Yetki kontrolünden geçmeyenleri yönlendirin
    }
}
