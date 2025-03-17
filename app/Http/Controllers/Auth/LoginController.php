<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Mostrar el formulario de login.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return $this->redirectTo();
        }
        return view('auth.login');
    }

    /**
     * Manejar una solicitud de inicio de sesión.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'document_number' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt(['document_number' => $request->document_number, 'password' => $request->password], $request->filled('remember'))) {
            return $this->redirectTo();
        }

        // Si la autenticación falla, redirigir con un mensaje de error
        return redirect()->route('login')->withErrors(['document_number' => 'Estas credenciales no coinciden con nuestros registros.']);
    }

    /**
     * Redirigir al usuario según su rol.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectTo()
    {
        $user = Auth::user();

        if (!$user || !$user->role) {
            return $this->redirectToHome();
        }

        switch ($user->role) {
            case 'admin':
                return redirect()->route('dashboard.admin');
            case 'funcionario':
                return redirect()->route('dashboard.funcionario');
            case 'aprendiz':
                return redirect()->route('dashboard.aprendiz');
            default:
                return $this->redirectToHome();
        }
    }

    /**
     * Redirigir a la página de inicio si el usuario no tiene un rol válido.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function redirectToHome()
    {
        Auth::logout();
        return redirect()->route('login')->withErrors(['error' => 'Tu cuenta no tiene un rol asignado.']);
    }

    /**
     * Cerrar sesión.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
