<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;

// Public routes
Route::get('/', [PageController::class, 'index']);
Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/signup', [PageController::class, 'signup']);
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.submit');
Route::get('/dashboard', [PageController::class, 'dashboard']);

// Protected routes
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/dashboard', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::get('/user/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
   
});

