<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Auth::routes();

Route::get('/', [HomeController::class, 'home']);

// Route::resource('post', App\Http\Controllers\PostController::class );
//Route::resource('category', App\Http\Controllers\CategoryController::class );
//Route::resource('tag', App\Http\Controllers\TagController::class );
