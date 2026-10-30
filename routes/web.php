<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::resource('posts', PostController::class);

Route::get('/', [PageController::class, 'home'])->name('home');