<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\User\DashboardController as UserDashboard;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('home');

// Only Guestes can Access
Route::middleware('guest')->group(function () {
    Route::get('/login', [FrontendController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth'])->name('auth');
    Route::get('/signup', [FrontendController::class, 'signup'])->name('signup');
    Route::post('/signup', [AuthController::class, 'register'])->name('register');

    Route::view('/forgot-password', 'frontend.passwords.email')->name('password.request'); //Reset Password
    Route::post('/password-email', [ForgotPasswordController::class, 'verify_email'])->middleware('guest')->name('password.verify_email');
    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'reset_index'])->middleware('guest');
    Route::post('/reset-password-update', [ForgotPasswordController::class, 'reset_update'])->middleware('guest')->name('password.reset.update');

    Route::get('verify-email/{token}', [ForgotPasswordController::class, 'verifyEmail'])->name('verification.verify');
});

// Only User can Access
Route::middleware('auth')->prefix('user')->group(function () {

    Route::get('/dashboard', [UserDashboard::class, 'index'])->name('user.dashboard');
  
    Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');
});



// Only Admin can Access
Route::middleware(['auth:admin'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');
    

    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
});