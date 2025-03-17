<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AprendizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí puedes registrar las rutas web para tu aplicación. Estas rutas son 
| cargadas por el RouteServiceProvider dentro de un grupo que contiene el 
| middleware "web". ¡Ahora crea algo genial!
|
*/

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Rutas de autenticación predeterminadas de Laravel
Auth::routes();

// Ruta después del inicio de sesión
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('auth');

// Rutas personalizadas de login y registro
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'register']);

// Rutas protegidas para cada tipo de usuario según su rol
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboardadmin/admin', [AdminController::class, 'index'])->name('dashboard.admin');
});

Route::middleware(['auth', 'role:funcionario'])->group(function () {
    Route::get('/dashboardfuncionario/funcionario', [FuncionarioController::class, 'index'])->name('dashboard.funcionario');
});

Route::middleware(['auth', 'role:aprendiz'])->group(function () {
    Route::get('/dashboardaprendiz/aprendiz', [AprendizController::class, 'index'])->name('dashboard.aprendiz');
});
