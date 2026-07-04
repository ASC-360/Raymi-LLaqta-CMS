<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;

/*
|--------------------------------------------------------------------------
| MAIN
|--------------------------------------------------------------------------
*/
Route::view('/', 'sections.home')->name('home.view');

/*
|--------------------------------------------------------------------------
| WEB SECTIONS
|--------------------------------------------------------------------------
*/

Route::view('/inicio', 'sections.home')->name('home.view');

Route::get('/publicaciones', [PublicationController::class, 'index'])
    ->name('publications.view');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/comment.php';
require __DIR__ . '/publication.php';