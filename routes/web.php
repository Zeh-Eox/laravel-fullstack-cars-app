<?php

use App\Http\Controllers\ChallengeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});