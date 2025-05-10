<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


//ROUTE DASHBOARD
Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('guest');
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

// ROUTE LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.post')->middleware('guest');
// ROUTE LOGOUT
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

//Route Article
Route::get('/', [DashboardController::class, 'TampilEvent'])->name('dashboard');
