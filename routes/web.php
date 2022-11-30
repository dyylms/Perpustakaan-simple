<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login-page.login');
});

Route::get('/beranda',[BerandaController::class, 'index'])->name('beranda');

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/postlogin',[LoginController::class, 'login'])->name('postlogin');
