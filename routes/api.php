<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VerifyEmailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->prefix('/auth')->group(function () {
    Route::post('login',            'login')->name('login');
    Route::post('forgot-password',  'forgot')->name('password.forgot');
    Route::post('reset-password',   'reset')->name('password.reset');
});

Route::middleware('auth:sanctum')->group(function () {

    Route::apiResource('users',             UserController::class);
    Route::apiResource('galleries',         GalleryController::class)->only(['store','update','destroy']);
    Route::post('email/verify', VerifyEmailController::class)->name('verification.resend');
});

Route::post('register', [RegisterController::class, 'store'])->name('register');
