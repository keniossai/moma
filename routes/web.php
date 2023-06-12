<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::controller(FrontendController::class)->name('landing.')->group(function () {
    Route::get('/', 'home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'service')->name('service');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/my_profile', 'profile')->name('profile');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('galleries', GalleryController::class)->only(['index']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/chat', function () {
        return view('chat.index');
    })->name('chat');
    Route::get('/user', function () {
        return view('users.show');
    })->name('show');
    Route::get('/settings', function () {
        return view('settings.index');
    })->name('settings');
//    Route::get('/gallery', function () {
//        return view('gallery.index');
//    })->name('gallery');

    Route::resource('users',            UserController::class)->only(['index', 'show']);
    Route::resource('bookings',         BookingController::class)->only('index');


    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
