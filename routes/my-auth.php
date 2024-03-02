<?php

use Illuminate\Support\Facades\Route;

Route::prefix('my-auth')->middleware('guest')->group(function ()
{
    Route::controller(\App\Http\Controllers\MyAuth\Sessions::class)->group(function ()
    {

        Route::get('/login', 'create')->name('my-auth.sessions.create');
        Route::post('/login', 'store')->name('my-auth.sessions.store');
    });

    Route::controller(\App\Http\Controllers\MyAuth\RegisterController::class)->group(function ()
    {
        Route::get('/register', 'create')->name('my-auth.register.create');
        Route::post('/register', 'store')->name('my-auth.register.store');
    });

//    Route::delete('/logout',  [\App\Http\Controllers\MyAuth\Sessions::class, 'destroy'])->name('my-auth.sessions.destroy');
});

Route::delete('/logout',  [\App\Http\Controllers\MyAuth\Sessions::class, 'destroy'])->name('my-auth.sessions.destroy');


Route::middleware(['auth'])->get('/secret', function()
{
   return view('secret');
})->name('secret');
