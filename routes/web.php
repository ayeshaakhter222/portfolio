<?php

use Illuminate\Support\Facades\Route;


 Route::get('/', function () {
     return view('home');
 });

Auth::routes();

Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');

Route::resource('post', App\Http\Controllers\PostController::class );
Route::resource('tag', App\Http\Controllers\TagController::class );

