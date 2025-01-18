<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;
use App\Http\Middleware\SuperAdminMiddleware;

// Login
Route::get('/',  function () {
    return view('index');
});

// Authenticate

Route::post('post.login', [LoginController::class, 'login'])->name('post.login');

Route::group(['middleware' => 'superadmin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardSuperAdmin']);
});

Route::group(['middleware' => 'superadmin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardAdmin']);
});

Route::group(['middleware' => 'staff'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardStaff']);
});


Route::group(['middleware' => 'dosen'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboardDosen']);
});
