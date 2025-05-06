<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/login', [PageController::class, 'showLoginForm']);

Route::post('/login', [PageController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/orders', function () {
    return view('pengelolaan');
})->name('orders');
Route::get('/profile', function () {
    return view('profile');
})->name('profile');