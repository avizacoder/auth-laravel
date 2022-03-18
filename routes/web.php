<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'create'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');
Route::delete('/register/{id}', [RegisterController::class, 'destroy'])->name('auth.destroy');
Route::get('/register/{id}/edit', [RegisterController::class, 'edit'])->name('auth.edit');
Route::patch('/register/{id}', [RegisterController::class, 'update'])->name('auth.update');

Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/login', [LoginController::class, 'store'])->name('auth.store');

Route::get('/logout', [LoginController::class, 'destroy'])->name('auth.destroy');
