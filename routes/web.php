<?php

use App\Http\Controllers\auth\EmailVerificationController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\ResetPasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class , 'index'])->name('home');
Route::get('/about_us', [HomeController::class , 'about'])->name('about');

Route::get('/dashboard', [DashboardController::class , 'index'])->name('dashboard.index');

//authentication

Route::get('/login', [LoginController::class , 'index'])->name('login');
Route::post('/login', [LoginController::class , 'login'])->name('login');

Route::get('/register', [RegisterController::class , 'index'])->name('register');
Route::post('/register', [RegisterController::class , 'register'])->name('register');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//===============forget password=============//

Route::get('/request_password', [ResetPasswordController::class, 'index'])->name('password.request');

Route::post('/request_password', [ResetPasswordController::class, 'sendEmail']);

//===========after return from email==========
Route::get('/reset_password/{token}', [ResetPasswordController::class, 'resetForm'])->name('password.reset');

Route::post('/reset_password', [ResetPasswordController::class, 'resetPassword'])->name('password.update');


//=============email verification=============//
Route::get('/email/verify', [EmailVerificationController::class, 'notice'])
->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', [EmailVerificationController::class, 'resend'])
->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//=============email verification=============//
Route::get('/email/verify', [EmailVerificationController::class, 'notice'])
->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])
->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', [EmailVerificationController::class, 'resend'])
->middleware(['auth', 'throttle:6,1'])->name('verification.send');