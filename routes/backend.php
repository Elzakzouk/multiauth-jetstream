<?php

use Illuminate\Support\Facades\Route;


// admin Login authentication
Route::get('/admin/login', [\App\Http\Controllers\Backend\LoginController::class, 'showLoginForm']);
Route::post('/admin/login', [\App\Http\Controllers\Backend\LoginController::class, 'login'])->name('backend.login');


Route::group(['prefix' => 'admin','middleware' => ['auth:admin']], function () {
    Route::get('/', function () {return redirect()->route('backend.dashboard');});
    Route::get('/dashboard', [\App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('backend.dashboard');
});
