<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

// Vista del login
Route::get('login', [AuthController::class, 'loginView'])->name('login.view');

// Vista del registro
Route::get('registro', [AuthController::class, 'registerView'])->name('register.view');

// Crear usuario
Route::post('registro-crear', [AuthController::class, 'register'])->name('register');

// Iniciar sesion
Route::post('login', [AuthController::class, 'login'])->name('login');

// Cerrar sesion
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

