<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;


Auth::routes();

Route::get('/', [HomeController::class, 'home'])->name('dashboard');
Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::resource('skill', SkillController::class);

// Route::resource('post', App\Http\Controllers\PostController::class );
//Route::resource('category', App\Http\Controllers\CategoryController::class );
//Route::resource('tag', App\Http\Controllers\TagController::class );
