<?php

use App\Http\Controllers\ChallengeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ChallengeController::class)->group(function() 
{
    Route::get('/sum/{a}/{b}', 'sum');
    Route::get('/substract/{a}/{b}', 'substract');
});