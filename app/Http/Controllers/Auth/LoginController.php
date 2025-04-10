<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
=======
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
<<<<<<< HEAD
    /*
    |----------------------------------------------------------------------
    | Login Controller
    |----------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirige al usuario después de la autenticación basado en su rol.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        // Redirigir a los usuarios según su rol
        if ($user->role_id == 1) {
            return redirect()->route('dashboard_admin');  // Admin
        } elseif ($user->role_id == 2) {
            return redirect()->route('dashboard_staff');  // Staff
        } elseif ($user->role_id >= 3) {
            return redirect()->route('dashboard_apprentice');  // Apprentice
        }

        // Redirigir a home si no tiene un rol definido
        return redirect()->route('home');
=======
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
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
    }
}
