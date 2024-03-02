<?php

use Illuminate\Support\Facades\Route;

Route::resource('blogs', \App\Http\Controllers\BlogController::class);

Route::resource('comments', \App\Http\Controllers\CommentController::class);
