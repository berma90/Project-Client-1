<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/login');
});
Route::get('/landing', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
