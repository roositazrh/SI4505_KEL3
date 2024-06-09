<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PengaduanController;
use Filament\Forms\Get;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function(){
    Route::get('/', [AuthController::class, 'landing'])->name('landing');
    Route::get('/formpengaduan', [AuthController::class, 'pengaduan'])->name('pengaduan');
    Route::post('/formpengaduan', [PengaduanController::class, 'create']);

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'create']);

    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
    Route::get('/artikel/{artikel:slug}', [ArtikelController::class, 'show'])->name('artikel.show');

    Route::get('/', [GaleriController::class, 'index'])->name('home');
    Route::get('/galeri/{galeri:slug}', [GaleriController::class, 'show'])->name('galeri.show');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/adminku', [AdminController::class, 'admin'])->middleware('hakAkses:admin');
    Route::get('/koperasiku', [AdminController::class, 'koperasi'])->middleware('hakAkses:koperasi');
    Route::get('/dashboard', [AdminController::class, 'user'])->middleware('hakAkses:user');
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/auth/logout', [LogoutController::class, 'logout'])->name('filament.admin.auth.logout');
    Route::post('/auth/logout', [LogoutController::class, 'logout'])->name('filament.koperasi.auth.logout');
});


