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

    // ADMIN VIEW
    Route::get('/dashboard/publicaciones', [PublicationController::class, 'index'])
        ->name('publications.admin.view');

    // CREATE VIEW
    Route::get('/publicaciones/crear', [PublicationController::class, 'create'])
        ->name('publication.create');

    // EDIT VIEW
    Route::get('/publicaciones/editar/{publication}', [PublicationController::class, 'edit'])
        ->name('publication.edit')
        ->whereNumber('publication');

    // STORE
    Route::post('/publicaciones/store', [PublicationController::class, 'store'])
        ->name('publication.store');

    // UPDATE
    Route::put('/publicaciones/update/{publication}', [PublicationController::class, 'update'])
        ->name('publication.update')
        ->whereNumber('publication');

    // DELETE
    Route::delete('/publicaciones/eliminar/{publication}', [PublicationController::class, 'destroy'])
        ->name('publication.destroy')
        ->whereNumber('publication');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/publicaciones/{publication}', [PublicationController::class, 'show'])
        ->name('publication.show')
        ->whereNumber('publication');

});