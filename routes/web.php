<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login-page.login');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('/postlogin',[LoginController::class, 'login'])->name('postlogin');

Route::middleware(['auth'])->group(function () {
    Route::get('/beranda',[BerandaController::class, 'index'])->name('beranda');
    // Master User Page
    Route::get('/members',[MemberController::class, 'index'])->name('members');
    Route::get('/members-create',[MemberController::class, 'create'])->name('members-create');
    Route::post('/members-store',[MemberController::class, 'store'])->name('members-store');
    Route::get('/members-edit/{id}',[MemberController::class, 'edit'])->name('members-edit');
    Route::get('/members-update/{id}',[MemberController::class, 'update'])->name('members-update');
    Route::get('/members-delete/{id}',[MemberController::class, 'destroy'])->name('members-delete');
    // Logout
    Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
});
