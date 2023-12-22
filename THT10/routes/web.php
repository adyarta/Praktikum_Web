<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'processLogin']);
Route::post('/process-login', [LoginController::class, 'processLogin'])->name('process.login');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/process-login', [AuthController::class, 'processLogin'])->name('process.login');


