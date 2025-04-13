<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// qetu i krijon routat

Route::get('/dashboard', 'App\Http\Controllers\Api\ExpensController@index')->name('dashboard');
