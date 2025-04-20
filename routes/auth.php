<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('login', [AuthController::class, 'loginView'])->name('login.view');

Route::get('registro', [AuthController::class, 'registerView'])->name('register.view');

Route::post('registro-crear', [AuthController::class, 'crearRegistro'])->name('register');

Route::post('login-iniciar', [AuthController::class, 'iniciarSesion'])->name('login');

Route::get('inicio', [AuthController::class,'inicioView'])->name('inicio.view');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');




