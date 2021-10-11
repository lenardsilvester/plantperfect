<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\UsersController::class, 'index'])->name('login');

Route::get('/register', [App\Http\Controllers\UsersController::class, 'create'])->name('register');
Route::post('/register', [App\Http\Controllers\UsersController::class, 'store'])->name('user.store');

Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('user.authenticate');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('user.logout');

Route::get('/plant/{id}', [App\Http\Controllers\PlantController::class, 'show'])->name('plant')->middleware('auth');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart')->middleware('auth');
Route::post('/cart', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store')->middleware('auth');

Route::post('/delete', [App\Http\Controllers\CartController::class, 'delete'])->name('cart.delete')->middleware('auth');

Route::post('/search', [App\Http\Controllers\PlantController::class, 'search'])->name('search');
