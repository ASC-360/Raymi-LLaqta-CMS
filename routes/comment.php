<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::middleware(['auth'])->group(function () {

    Route::post(
        '/publications/{publication}/comments',
        [CommentController::class, 'store']
    )->name('comments.store');

    Route::put(
        '/comments/{comment}',
        [CommentController::class, 'update']
    )->name('comments.update');


    Route::delete(
        '/comments/{comment}',
        [CommentController::class, 'destroy']
    )->name('comments.destroy');

});