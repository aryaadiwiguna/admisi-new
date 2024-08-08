<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');