<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;

Route::get('/', function () {
    return view('superadmin.layouts.app');
});


Route::prefix('superadmin')->group(function(){
    Route::resource('superadmin', SuperadminController::class);
});