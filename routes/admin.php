<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {

    // DASHBOARD VIEW
    Route::get('/dashboard', [UserController::class, 'index'])
        ->name('dashboard.admin.view');
});