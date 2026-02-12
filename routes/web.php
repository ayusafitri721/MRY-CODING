<?php
// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\Admin\AdminClassController;
use App\Http\Controllers\ForgotPasswordController;

// Redirect root: jika sudah login arahkan ke classes, jika belum ke login
Route::get('/', function () {
    return auth()->check() ? redirect()->route('classes.index') : redirect()->route('login');
});

// Auth Routes (Guest only - belum login)
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    // Social login
    Route::get('/auth/redirect/{provider}', [SocialAuthController::class, 'redirect'])->name('social.redirect');
    Route::get('/auth/callback/{provider}', [SocialAuthController::class, 'callback'])->name('social.callback');
    // Forgot Password
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');
    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'reset'])->name('password.update');
});

// Logout (harus sudah login)
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// User Routes (harus login)
Route::middleware(['auth'])->group(function () {
    Route::get('/classes', [ClassController::class, 'index'])->name('classes.index');
    Route::get('/classes/{class}', [ClassController::class, 'show'])->name('classes.show');
});

// Admin Routes (harus login DAN role admin)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('classes', AdminClassController::class);
});