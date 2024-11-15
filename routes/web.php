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

Route::get('/quiz', [QuizController::class, 'index']);
