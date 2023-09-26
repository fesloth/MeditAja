<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MainController::class, 'index']);
Route::get('/premium', [MainController::class, 'premium']);
Route::get('/chat', [MainController::class, 'bot']);

Route::get('/progress', [UsersController::class, 'index']);
Route::get('/profile', [UsersController::class, 'profile']);

Route::get('/login', [SessionController::class, 'login'])->name('session.login');
Route::get('/register', [SessionController::class, 'register'])->name('session.register');

Route::get('/admin', [AdminController::class, 'index']);