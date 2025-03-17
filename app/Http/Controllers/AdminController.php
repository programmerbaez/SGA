<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
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
}
