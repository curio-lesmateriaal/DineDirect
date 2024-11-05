<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table/{table_code}', function() {
    return view('menu');
});

Route::prefix('dashboard')
        ->middleware(['auth'])
        ->group(function() {
            Route::get('/orders', function() {
                return view('dashboard');
            });
        });


