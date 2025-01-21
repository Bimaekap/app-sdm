<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\UserManagementController;
use App\Http\Middleware\SuperAdminMiddleware;

// Login
Route::get('/',  function () {
    return view('index');
});

// Authenticate

Route::post('post.login', [LoginController::class, 'login'])->name('post.login');

Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'superadmin', 'prefix' => 'superadmin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardSuperAdmin'])->name('dashboard.superadmin');
        Route::get('/users-management', [UserManagementController::class, 'pageuser'])->name('page.user');

        // * Users Management
        Route::post('create-user', [UserManagementController::class, 'create'])->name('create.user');
    });

    Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardAdmin'])->name('dashboard.admin');;
    });

    Route::group(['middleware' => 'staff', 'prefix' => 'staff'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardStaff'])->name('dashboard.staff');;
    });

    Route::group(['middleware' => 'dosen', 'prefix' => 'dosen'], function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboardDosen'])->name('dashboard.dosen');;
    });
});
