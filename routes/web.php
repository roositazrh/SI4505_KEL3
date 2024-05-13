<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function(){
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'create']);
});


Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'admin'])->middleware('hakAkses:admin');
    Route::get('/koperasi', [AdminController::class, 'koperasi'])->middleware('hakAkses:koperasi');
    Route::get('/dashboard', [AdminController::class, 'user'])->middleware('hakAkses:user');
    Route::get('/logout', [AuthController::class, 'logout']);
});


