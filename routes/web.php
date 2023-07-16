<?php

use Illuminate\Support\Facades\Route;





Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');


/**
 * Account
 */
Route::group([
    'middleware' => ['auth'],
    'prefix' => 'account',
    'as' => 'account.'
], function () {
    Route::get('/', [App\Http\Controllers\Account\AccountController::class, 'index'])->name('index');

    /**
     * Profile
     */
    Route::get('/profile', [App\Http\Controllers\Account\ProfileController::class, 'index'])->name('profile');
    Route::patch('/profile', [App\Http\Controllers\Account\ProfileController::class, 'update'])->name('profile.update');
    /**
     * Password
     */
    Route::get('/password', [App\Http\Controllers\Account\PasswordController::class, 'index'])->name('password.index');
    Route::patch('/password', [App\Http\Controllers\Account\PasswordController::class, 'update'])->name('password.update');
});