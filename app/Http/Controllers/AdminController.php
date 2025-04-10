<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
<<<<<<< HEAD
    public function index()
{
    return view('admin.admin');
}

=======
    /**
     * Crear una nueva instancia del controlador.
     * Se aplica middleware para autenticar y verificar el rol.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Mostrar el dashboard del administrador.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboardadmin.admin');
    }
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
}
