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
    return view(view: 'home');
});

Route::get('/about', function () {
    return view(view: 'about');
});

Route::get('/login', function () {
    return view(view: 'login');
});

Route::get('/registration', function () {
    return view(view: 'registration');
});

Route::get('/contact', function () {
    return view(view: 'contact');
});

