<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarrioController;
use App\Http\Controllers\ViewController;

Route::get('/', function () {
    return view('inicio');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::resource('dashboard-admin', AdminController::class);

    Route::get('dashboard-galeria', [AdminController::class, 'indexFotoDashboard'])->name('dashboard.galeria');
});

Route::middleware(['auth'])->group(function () {

    Route::resource('fotos', FotoController::class);

    Route::resource('barrios', BarrioController::class);

    // Ruta para la sección de Historia
    Route::get('/home', [ViewController::class, 'intro'])->name('intro.view');

    // Ruta para la sección de Historia
    Route::get('/history', [ViewController::class, 'history'])->name('history.view');

    // Ruta para la sección de Galería
    Route::get('/gallery', [ViewController::class, 'gallery'])->name('gallery.view');

    // Ruta para la sección de Ubicación
    Route::get('/location', [ViewController::class, 'location'])->name('location.view');

    // Ruta para la sección de Testimonios
    Route::get('/testimonials', [ViewController::class, 'testimonials'])->name('testimonials.view');
});


require __DIR__ . '/auth.php';
