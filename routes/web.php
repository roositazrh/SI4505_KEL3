<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;
use Filament\Forms\Get;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function(){
    Route::get('/', [AuthController::class, 'landing'])->name('landing');
    Route::get('/formpengaduan', [AuthController::class, 'pengaduan'])->name('pengaduan');
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'create']);
    Route::get('/artikel', [AuthController::class, 'artikel'])->name('artikel');
    Route::get('/detailartikel', [AuthController::class, 'detailartikel'])->name('detailartikel');
    Route::get('/detailgaleri', [AuthController::class, 'detailgaleri'])->name('detailgaleri');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/adminku', [AdminController::class, 'admin'])->middleware('hakAkses:admin');
    Route::get('/koperasiku', [AdminController::class, 'koperasi'])->middleware('hakAkses:koperasi');
    Route::get('/dashboard', [AdminController::class, 'user'])->middleware('hakAkses:user');
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::post('/auth/logout', [LogoutController::class, 'logout'])->name('filament.admin.auth.logout');
Route::post('/auth/logout', [LogoutController::class, 'logout'])->name('filament.koperasi.auth.logout');


