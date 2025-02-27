<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;


// Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Other Pages
Route::get('/signup', [SignupController::class, 'create'])->name('signup');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::get('/car/search', [CarController::class, 'search'])->name('search');
Route::resource('car', CarController::class);