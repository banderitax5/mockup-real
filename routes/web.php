<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/menus', function () {
    return view('menu');
})->name('menus');
