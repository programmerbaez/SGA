<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

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
});
