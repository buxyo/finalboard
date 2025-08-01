<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Public login routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected routes (only if logged in)
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/drivers', function () {
        return view('drivers');
    });

});
