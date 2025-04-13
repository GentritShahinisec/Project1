<?php

use App\Http\Controllers\Api\ExpensController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// qetu i krijon routat

Route::get('/dashboard', ExpensController::class, 'index')->name('dashboard');
