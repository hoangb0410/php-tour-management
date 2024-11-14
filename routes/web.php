<?php

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
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('forgot-password');

Route::get('/change-password', function () {
    return view('change-password');
})->name('change-password');

// Tour
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