<?php

use Illuminate\Support\Facades\Route;

Route::prefix('test1')->group(function () {

    Route::get('/', function () {
        return view('test1.index');
    });

    Route::resource('genres', \App\Http\Controllers\Test1\GenreController::class);

//        Route::get('films', [\App\Http\Controllers\Test1\FilmController::class, 'index'])->name('films.index');
    Route::resource('films', \App\Http\Controllers\Test1\FilmController::class);
    Route::post('films/{film}/publish', [\App\Http\Controllers\Test1\FilmController::class, 'publish'])->name('films.publish');

});


