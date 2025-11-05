<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index']);

// 3.B. Route Register dan Welcome diatur oleh AuthController
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);
Route::get('/table', [DashboardController::class, 'table']);
Route::get('/data-tables', [DashboardController::class, 'dataTables']);
Route::resource('cast', CastController::class);
