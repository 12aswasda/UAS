<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your applicat ion. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\usersController::class, 'index']);
Route::get('/users/create', [App\Http\Controllers\usersController::class, 'create']);
Route::post('/users', [App\Http\Controllers\usersController::class, 'store']);
Route::get('/users/edit/{id}', [App\Http\Controllers\usersController::class, 'edit']);
Route::patch('/users/{id}', [App\Http\Controllers\usersController::class, 'update']);
Route::delete('/users/{id}', [App\Http\Controllers\usersController::class, 'destroy']);
