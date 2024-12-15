<?php

use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/test', function () {
    return view('test');
});

// Auth
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

// Auth backend
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/send-reset-link', [AuthController::class, 'sendResetLink'])->name('sendResetLink');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('resetPassword');
Route::get('/change-password/{token}', [AuthController::class, 'showResetForm']);

// Tours
Route::get('/list-tour', function () {
    return view('list-tour');
})->name('list-tour');

Route::get('/tour-details', function () {
    return view('tour-details');
})->name('tour-details');

Route::get('/tour-booking', function () {
    return view('tour-booking');
})->name('tour-booking');

// Hotel
Route::get('/list-hotel', function () {
    return view('list-hotel');
})->name('list-hotel');

Route::get('/hotel-details', function () {
    return view('hotel-details');
})->name('hotel-details');

Route::get('/hotel-booking', function () {
    return view('hotel-booking');
})->name('hotel-booking');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/thank', function () {
    return view('thank');
})->name('thank');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// ADMIN



Route::prefix('admin')->middleware('admin')->group(function () {
    // User
    Route::get('/user', function () {
        return view('admin.user.index');
    });
    Route::get('/list-user', [UserController::class, 'listUsers'])->name('user.list');
    Route::get('{id}/view-edit-user', [UserController::class, 'viewEditUser'])->name('user.view-edit');
    Route::post('/store-user', [UserController::class, 'storeUser'])->name('user.store');
    Route::delete('{id}/delete-user', [UserController::class, 'deleteUser'])->name('user.delete');

    // Tour
    Route::prefix('tour')->group(function () {
        Route::get('/', function () {
            return view('admin.tour.index');
        })->name('tour.index');
        Route::get('/add', [TourController::class, 'viewCreateTour'])->name('tour.view-create');
    });


    Route::get('/list-tour', [TourController::class, 'listTours'])->name('tour.list');
    Route::get('{id}/view-edit-tour', [TourController::class, 'viewEditTour'])->name('tour.view-edit');
    Route::post('/create-tour', [TourController::class, 'createTour'])->name('tour.create');
    Route::delete('{id}/delete-tour', [TourController::class, 'deleteTour'])->name('tour.delete');
});
