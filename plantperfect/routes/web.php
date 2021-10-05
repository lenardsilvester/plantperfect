<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [App\Http\Controllers\UsersController::class, 'index'])->name('login');

Route::get('/register', [App\Http\Controllers\UsersController::class, 'create'])->name('register');
Route::post('/register', [App\Http\Controllers\UsersController::class, 'store'])->name('user.store');

Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('user.authenticate');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('user.logout');