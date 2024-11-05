<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

            Route::get('/tables', [DashboardController::class, 'tables'])->name('tables');
            Route::get('/orders', [DashboardController::class, 'orders'])->name('dashboard');

        });


