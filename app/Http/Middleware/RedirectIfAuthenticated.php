<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (Auth::check()) {
            $role = Auth::user()->role_id;

            switch ($role) {
                case 1:
                    return redirect()->route('dashboard_admin');
                case 2:
                    return redirect()->route('dashboard_staff');
                case 3:
                default:
                    return redirect()->route('dashboard_apprentice');
            }
        }

        return $next($request);
    }
}
