<?php

use Illuminate\Support\Facades\Route;


 Route::get('/', function () {
     return view('home');
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');

Route::resource('post', App\Http\Controllers\PostController::class );

// Auth::routes();

//  Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
// Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
// Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


// Route::resource('/posts', App\Http\Controllers\PostController::class);