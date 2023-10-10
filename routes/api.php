<?php

use App\Http\Controllers\UserapiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', [UserapiController::class, 'index']);
Route::get('users/{id}', [UserapiController::class, 'show']);
Route::post('users', [UserapiController::class, 'store']);
Route::put('users/{id}', [UserapiController::class, 'update']);
Route::delete('users/{id}', [UserapiController::class, 'destroy']);
