<?php

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

use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');

Route::get('/users/result', [UserController::class, 'update'])->name('users.update');

Route::post('/users', [UserController::class, 'store'])->name('users.store');