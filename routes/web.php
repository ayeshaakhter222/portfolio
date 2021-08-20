<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

//Route::resource('post', App\Http\Controllers\PostController::class );
//Route::resource('category', App\Http\Controllers\CategoryController::class );
//Route::resource('tag', App\Http\Controllers\TagController::class );
