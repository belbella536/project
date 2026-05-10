<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::get('/registeration', 'registeration')->name('registeration')->middleware('guest');
    Route::post('/loginProcess', 'loginProcess')->name('login.process')->middleware('guest');
    Route::post('/registerProcess', 'registerProcess')->name('register.process')->middleware('guest');
});

Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('dashboard')->middleware('auth');
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
});

