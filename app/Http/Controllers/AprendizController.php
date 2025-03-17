<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprendizController extends Controller
{
    /**
     * Crear una nueva instancia del controlador.
     * Se aplica middleware para autenticar y verificar el rol.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:aprendiz']);
    }

    /**
     * Mostrar el dashboard del aprendiz.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboardaprendiz.aprendiz');
    }
}
