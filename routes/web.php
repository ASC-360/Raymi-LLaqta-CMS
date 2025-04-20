<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FotoController;

Route::get('/', function () {
    return view('auth.registro');
});

Route::get('dashboard-galeria', [FotoController::class, 'indexDashboard'])->name('dashboard.galeria');

Route::resource('fotos', FotoController::class);




require __DIR__.'/auth.php';
