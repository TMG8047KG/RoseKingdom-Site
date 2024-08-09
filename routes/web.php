<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/guides', function () {
    return view('guides');
})->name('guides');
