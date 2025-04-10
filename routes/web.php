<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\HomeController;

=======
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
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
// Autenticación de Laravel
Auth::routes();

// Redirección a home (puede ser eliminada si no se usa)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rutas protegidas con autenticación
Route::middleware(['auth'])->group(function () {
    // Estas rutas ahora son protegidas por el middleware de autenticación y redirección por rol.
    Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('dashboard_admin');
    Route::get('/dashboard/staff', [StaffController::class, 'index'])->name('dashboard_staff');
    Route::get('/dashboard/apprentice', [ApprenticeController::class, 'index'])->name('dashboard_apprentice');
});

// Redirección de usuarios según su rol después de autenticarse
Route::middleware(['auth'])->get('/redirect_based_on_role', function () {
    $user = auth()->user();

    if ($user->role_id == 1) {
        return redirect()->route('admin');
    } elseif ($user->role_id == 2) {
        return redirect()->route('staff');
    } elseif ($user->role_id >= 3) {
        return redirect()->route('apprentice');
    }

    return redirect('/'); // En caso de no cumplir ninguna condición
=======
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
>>>>>>> acdf6dd27a3620108f5856f518dd8a0a926b05f0
});
