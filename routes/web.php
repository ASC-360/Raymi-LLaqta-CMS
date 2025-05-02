<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarrioController;

Route::get('/', function () {
    return view('auth.registro');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::resource('dashboard-admin', AdminController::class);

    Route::get('dashboard-galeria', [AdminController::class, 'indexFotoDashboard'])->name('dashboard.galeria');

});

Route::middleware(['auth'])->group(function () {

    Route::resource('fotos', FotoController::class);

    Route::resource('barrios', BarrioController::class);
});


require __DIR__ . '/auth.php';
