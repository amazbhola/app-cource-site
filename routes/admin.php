<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::middleware(['admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    Route::resource('category', CategoryController::class);
});
