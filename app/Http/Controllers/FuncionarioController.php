<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    /**
     * Crear una nueva instancia del controlador.
     * Se aplica middleware para autenticar y verificar el rol.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:funcionario']);
    }

    /**
     * Mostrar el dashboard del funcionario.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboardfuncionario.funcionario');
    }
}
