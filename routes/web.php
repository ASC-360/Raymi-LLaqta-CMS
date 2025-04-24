<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('auth.registro');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::resource('dashboard-admin', AdminController::class);

    Route::get('dashboard-galeria', [AdminController::class, 'indexFotoDashboard'])->name('dashboard.galeria');

});

Route::middleware(['auth'])->group(function () {

    Route::resource('fotos', FotoController::class);
});


require __DIR__ . '/auth.php';
