<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chicas\ChicaAuthController;

Route::prefix('chicas')->name('chicas.')->group(function () {
    // Muestra el formulario de login solo si el usuario no está autenticado
    Route::get('login', [ChicaAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [ChicaAuthController::class, 'login'])->name('login.submit');

    // Protege las rutas bajo la autenticación de chica
    Route::middleware('auth:chica')->group(function () {
        // Dashboard
        Route::get('dashboard', [ChicaAuthController::class, 'dashboard'])->name('dashboard');

        // Logout
        Route::post('logout', [ChicaAuthController::class, 'logout'])->name('logout');
    });
});
