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
    Route::get('/peringatan', [MainController::class, 'peringatan'])->name('peringatan');

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

    Route::group(['middleware' => ['auth', 'premium_user']], function () {
        Route::get('/kalk', [ContentController::class, 'kalk'])->middleware('auth');
        Route::get('/pesan', [ContentController::class, 'pesan'])->middleware('auth');    
        Route::get('/jurnal', [ContentController::class, 'jurnal'])->middleware('auth')->name('jurnal');
        Route::get('/jurnalCreate', [ContentController::class, 'createJurnal'])->middleware('auth')->name('jurnal.create');
        Route::post('/jurnalStore', [ContentController::class, 'storeJurnal'])->name('jurnal.store');
        Route::get('/jurnal/{id}/edit', [ContentController::class, 'editJurnal'])->name('jurnal.edit');
        Route::put('/jurnal/{id}', [ContentController::class, 'updateJurnal'])->name('jurnal.update');
        Route::delete('/jurnal/{id}', [ContentController::class, 'destroy'])->name('jurnal.destroy');
    });    
  
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

    Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(['auth', 'admin']);
    Route::delete('/admin/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::get('/adminUserTransaksi', [AdminController::class, 'transaksiUser'])->name('adminTransaksi')->middleware(['auth', 'admin']);
    Route::get('/admin/showUserTransactions/{userId}', [AdminController::class, 'showUserTransactions'])->name('admin.showUserTransactions')->middleware(['auth', 'admin']);
    Route::get('/admin/deleteTransaction/{transactionId}', [AdminController::class, 'deleteTransaction'])->name('admin.deleteTransaction')->middleware(['auth', 'admin']);    

Route::post('/admin/makePremium/{id}', [AdminController::class, 'makeUserPremium'])
    ->name('admin.makePremium');
Route::post('/admin/cancelPremium/{id}', [AdminController::class, 'cancelPremium'])->name('admin.cancelPremium');



Route::get('/login', [SessionController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'loginProses']);
Route::get('/register', [SessionController::class, 'register'])->name('session.register');
Route::post('/register', [SessionController::class, 'registerProses']);
Route::get('/logout', [SessionController::class, 'logout'])->name('logout');

Route::get('/checkout/{harga}', [PembayaranController::class, 'index'])->middleware('auth');
Route::post('/transaksi', [PembayaranController::class, 'createTransaction'])->middleware('auth')->name('create.transaction');
Route::get('/premium', [PembayaranController::class, 'premium'])->middleware('auth');
Route::post('/process-payment', [PembayaranController::class, 'processPayment']); 

});
