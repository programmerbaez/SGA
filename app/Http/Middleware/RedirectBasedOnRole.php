<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RedirectBasedOnRole
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();  // Obtener al usuario autenticado

        // Redirigir según el role_id
        if ($user) {
            if ($user->role_id == 1) {
                return redirect()->route('admin.dashboard');  // Ruta del administrador
            } elseif ($user->role_id == 2) {
                return redirect()->route('staff.dashboard');  // Ruta del staff
            } elseif ($user->role_id >= 3) {
                return redirect()->route('apprentice.dashboard');  // Ruta de aprendiz
            }
        }

        return $next($request);  // Si no es un usuario, continua la solicitud
    }
}
