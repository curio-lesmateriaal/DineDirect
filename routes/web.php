<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table/{table_code}', function() {
    return view('menu');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
