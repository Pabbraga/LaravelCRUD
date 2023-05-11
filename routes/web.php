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

Route::get('/', [UserController::class, 'index'])->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/user/{id}', [UserController::class, 'show'])->where('id', '[0-9]{1,5}')->name('user.show'); // não finalizado

Route::get('/user/edit/{id}', [UserController::class, 'edit'])->where('id', '[0-9]{1,5}')->name('user.edit');

Route::put('/user/{id}', [UserController::class, 'update'])->where('id', '[0-9]{1,5}')->name('user.update');

Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->where('id', '[0-9]{1,5}')->name('user.destroy');