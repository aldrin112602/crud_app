<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

Route::get('/', [PageController::class, 'index']);
Route::get('/login', [PageController::class, 'login']);Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/signup', [PageController::class, 'signup']);

