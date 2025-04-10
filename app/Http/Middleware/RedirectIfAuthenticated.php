<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
=======
use App\Providers\RouteServiceProvider;
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
<<<<<<< HEAD
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
=======
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
            }
        }

        return $next($request);
    }
}
