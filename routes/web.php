<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::middleware(['web'])->group(function () {
    Route::get('/', [MainController::class, 'index']);

    Route::get('/notes', [ContentController::class, 'notes'])->middleware('auth'); 
    Route::get('/notes/create', [ContentController::class, 'create'])->name('create.note')->middleware('auth'); 
    Route::post('/notes', [ContentController::class, 'storeNotes'])->name('notes.store')->middleware('auth');
    Route::get('/notes/edit/{id}', [ContentController::class, 'editNote'])->name('edit.note')->middleware('auth');
    Route::put('/notes/update/{id}', [ContentController::class, 'updateNote'])->name('update.note')->middleware('auth');
    Route::get('/notesFilter', [ContentController::class, 'filterNotes'])->name('notes.filter')->middleware('auth'); 
    Route::get('/notes/delete/{id}', [ContentController::class, 'deleteNote'])->name('delete.note')->middleware('auth');

    Route::get('/timer', [ContentController::class, 'timer'])->middleware('auth');
    Route::get('/video', [ContentController::class, 'video'])->middleware('auth');
    Route::get('/mood', [ContentController::class, 'mood'])->middleware('auth');
    Route::post('/moodStore', [ContentController::class, 'store'])->name('mood.store')->middleware('auth');
    Route::get('/progress', [ContentController::class, 'index'])->middleware('auth');
    Route::get('/kalk', [ContentController::class, 'kalk'])->middleware('auth');
    
    Route::get('/todo', [ContentController::class, 'todo'])->middleware('auth');
    Route::get('/createTodo', [ContentController::class, 'createTodo'])->middleware('auth');
    Route::post('/storeTodo', [ContentController::class, 'storeTodo'])->middleware('auth');
    Route::post('status/{id}', [ContentController::class, 'status'])->middleware('auth');
    Route::get('/editTodo/{id}', [ContentController::class, 'edit'])->middleware('auth');
    Route::put('/editTodo/update/{id}', [ContentController::class, 'update'])->middleware('auth');
    Route::get('delete/{id}', [ContentController::class, 'delete'])->middleware('auth');
    
    Route::get('/profile', [UsersController::class, 'profile'])->middleware('auth');
    Route::post('/profile', [UsersController::class, 'updateProfile'])->name('profile.update')->middleware('auth');
    Route::get('/edit', [UsersController::class, 'edit'])->middleware('auth');    

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');
Route::delete('/admin/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser')->middleware('auth');
Route::get('/adminUserTransaksi', [AdminController::class, 'transaksiUser'])->name('adminTransaksi')->middleware('auth');
Route::get('/admin/showUserTransactions/{userId}', [AdminController::class, 'showUserTransactions'])->name('admin.showUserTransactions');
Route::get('/admin/deleteTransaction/{transactionId}', [AdminController::class, 'deleteTransaction'])->name('admin.deleteTransaction');


Route::get('/login', [SessionController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'loginProses']);
Route::get('/register', [SessionController::class, 'register'])->name('session.register');
Route::post('/register', [SessionController::class, 'registerProses']);
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');

Route::get('/checkout/{harga}', [PembayaranController::class, 'index'])->middleware('auth');
Route::get('/premium', [PembayaranController::class, 'premium'])->middleware('auth');
Route::post('/process-payment', [PembayaranController::class, 'processPayment']); 

});
