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
    Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::get('/user/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/user/edit/{user}', [UsersController::class, 'update'])->name('edit.submit');

    Route::post('/addUser', [UsersController::class, 'addUser'])->name('addUser.submit');
    Route::get('/addUser', [UsersController::class, 'addUserPage'])->name('addUserPage');
   
});

