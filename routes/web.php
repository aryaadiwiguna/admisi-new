<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/layout', function () {
    return view('dashboard.test');
});

Route::get('/profile', [DashboardController::class, 'profile']);

Route::get('/application', [DashboardController::class, 'application']);

Route::get("/application/pembayaran/1", [DashboardController::class, 'pembayaran']);
Route::get("/application/pembayaran/2", [DashboardController::class, 'pembayaran2']);
Route::get("/application/pembayaran/3", [DashboardController::class, 'pembayaran3']);

Route::get('/ujian', [DashboardController::class, 'test']);

Route::get('/quiz', [QuizController::class, 'index']);

Route::get('/daftar_ulang', [DashboardController::class, 'daftar_ulang']);
