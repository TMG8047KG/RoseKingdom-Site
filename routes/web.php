<?php

use App\Http\Controllers\IssuesController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserRegistrationController;
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

Route::get('/issues', [IssuesController::class, 'index'])->name('issues');
Route::get('/issues/report', [IssuesController::class, 'form'])->name('report');
Route::get('/issues/{id}', [IssuesController::class, 'show']);
Route::post('/issues', [IssuesController::class, 'create']);


Route::get('/register', [UserRegistrationController::class, 'form'])->name('register');
Route::post('/register', [UserRegistrationController::class, 'register']);

Route::get('/login', [SessionController::class, 'form'])->name('login');
Route::post('/login', [SessionController::class, 'login']);
Route::post('/logout', [SessionController::class, 'logout']);




