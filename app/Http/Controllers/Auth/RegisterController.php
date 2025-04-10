<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
<<<<<<< HEAD
use App\Models\Role;
=======
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
<<<<<<< HEAD
     * Where to redirect users after registration.
=======
     * Donde redirigir a los usuarios después del registro.
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
<<<<<<< HEAD
     * Create a new controller instance.
=======
     * Crear una nueva instancia del controlador.
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
<<<<<<< HEAD
     * Show the registration form with filtered roles (id >= 3).
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        // Solo mostrar roles con ID mayor o igual a 3
        $roles = Role::where('id', '>=', 3)->get();
        return view('auth.register', compact('roles'));
    }

    /**
     * Get a validator for an incoming registration request.
=======
     * Obtener un validador para una solicitud de registro entrante.
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
<<<<<<< HEAD
            'nickname' => ['required', 'string', 'max:255', 'unique:users,nickname'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role_id' => ['required', 'exists:roles,id'],
=======
            'document_type' => ['required', 'string', 'max:50'],
            'document_number' => ['required', 'string', 'max:20', 'unique:users'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
        ]);
    }

    /**
<<<<<<< HEAD
     * Create a new user instance after a valid registration.
=======
     * Crear una nueva instancia de usuario después de un registro válido.
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
<<<<<<< HEAD
            'nickname' => $data['nickname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['role_id'],
=======
            'document_type' => $data['document_type'],
            'document_number' => $data['document_number'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'aprendiz', // Asignamos el rol "aprendiz" por defecto
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
        ]);
    }
}
