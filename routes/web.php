<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/menus', function () {
    return view('menu');
})->name('menus');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('about');
})->name('aboutus');

Route::get('POS/dashboard', function () {
    return view('POS.dashboard');
})->name('dashboard');