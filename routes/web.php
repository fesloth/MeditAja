<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
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
Route::get('/music', [MainController::class, 'music']);

Route::get('/todo', [ContentController::class, 'todo']);
Route::get('/createTodo', [ContentController::class, 'createTodo']);
Route::post('/storeTodo', [ContentController::class, 'storeTodo']);
Route::post('status/{id}', [ContentController::class, 'status']);
Route::get('/editTodo/{id}', [ContentController::class, 'edit']);
Route::put('/editTodo/update/{id}', [ContentController::class, 'update']);
Route::get('delete/{id}', [ContentController::class, 'delete']);

Route::get('/timer', [ContentController::class, 'timer']);
Route::get('/video', [ContentController::class, 'video']);
Route::get('/mood', [ContentController::class, 'mood']);
Route::get('/progress', [ContentController::class, 'index']);

Route::get('/profile', [UsersController::class, 'profile']);
Route::get('/edit', [UsersController::class, 'edit']);

Route::get('/login', [SessionController::class, 'login'])->name('session.login');
Route::get('/register', [SessionController::class, 'register'])->name('session.register');

Route::get('/admin', [AdminController::class, 'index']);