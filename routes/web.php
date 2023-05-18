<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\PendudukController;



// DASHBOARD

// Home
Route::get('/', [HomeController::class, 'home']);

// Data Penduduk
Route::get('/data-penduduk', [PendudukController::class, 'index']);

