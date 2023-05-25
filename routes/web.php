<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\PendudukController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\PengajuanController;

use App\Http\Controllers\Landing\LandingController;
use App\Http\Controllers\LoginController;



// DASHBOARD

// Home
Route::get('/', [HomeController::class, 'home']);

// Data Penduduk
Route::get('/data-penduduk', [PendudukController::class, 'index']);
Route::get('/form-pengajuan-penduduk', [PendudukController::class, 'form']);

// Data User
Route::get('/data-user', [UserController::class, 'index']);

// Daftar Pengajuan
Route::get('/daftar-pengajuan', [PengajuanController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'index']);


#LANDING
Route::get('/home', [LandingController::class, 'index']);