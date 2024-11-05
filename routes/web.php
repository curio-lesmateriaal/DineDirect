<?php

use App\Http\Controllers\AuthController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/table/{table_code}', function() {
    return view('menu');
});

Route::prefix('dashboard')
        ->middleware(['auth'])
        ->group(function() {

            Route::get('/orders', function() {
                return view('dashboard');
            })->name('dashboard');

        });


