<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Manejar una solicitud entrante.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login'); // Redirigir si el usuario no está autenticado
        }

        // Verificar si el usuario tiene el rol requerido
        if (Auth::user()->role !== $role) {
            return redirect()->route('home')->with('error', 'No tienes permiso para acceder a esta página.');
        }

        return $next($request);
    }
}
