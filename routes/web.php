<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('users/profile/{user?}', [UserController::class, 'profile'])->name('users.profile');
    Route::put('users/profile/{user?}', [UserController::class, 'updateProfile'])->name('users.profile.update');
    Route::patch('users/{user}/reset-password', [UserController::class, 'resetPassword'])->name('users.reset-password');
    Route::resource('users', UserController::class);
});