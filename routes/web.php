<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function(){
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'login']);
});
Route::middleware(['guest'])->group(function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('hakAkses:admin');
    Route::get('/admin/koperasi', [AdminController::class, 'koperasi'])->middleware('hakAkses:koperasi');
    Route::get('/admin/user', [AdminController::class, 'user'])->middleware('hakAkses:user');
    Route::get('/logout', [AuthController::class, 'logout']);
});

