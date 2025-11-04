<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landingcontroller;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [LandingController::class, 'index' ])->name('landing' );

Route::prefix('admin')->group(function () {
    Route::get ('/dashboard', [DashboardController::class, 'index' ] )->name('admin. dashboard' );

});
