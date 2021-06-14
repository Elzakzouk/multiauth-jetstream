<?php

use Illuminate\Support\Facades\Route;


// admin Login authentication
Route::get('/backend/login', [\App\Http\Controllers\Backend\LoginController::class, 'showLoginForm']);
Route::post('/backend/login', [\App\Http\Controllers\Backend\LoginController::class, 'login'])->name('backend.login');


Route::group(['prefix' => 'backend','middleware' => ['auth:admin']], function () {
    Route::get('/', function () {return redirect()->route('backend.dashboard');});
    Route::get('/dashboard', [\App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('backend.dashboard');

//    Route::resource('roles', [\App\Http\Controllers\Backend\RoleController::class]);
    Route::get('/admins', [\App\Http\Controllers\Backend\AdminController::class, 'index'])->name('backend.admins');
    Route::get('/admins/create', [\App\Http\Controllers\Backend\AdminController::class, 'create'])->name('backend.admins.create');
    Route::post('/admins/create', [\App\Http\Controllers\Backend\AdminController::class, 'store'])->name('backend.admins.store');
//    Route::resource('universities', \App\Models\University::class);

});
