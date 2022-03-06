<?php

use Illuminate\Support\Facades\Route;
use Monet\Framework\Admin\Http\Controllers\DashboardController;

Route::prefix('/admin')->middleware(['web', 'auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
});