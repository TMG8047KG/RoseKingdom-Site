<?php

use App\Http\Controllers\IssuesController;
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

Route::get('/issues', function () {
    $issues = DB::table("issues")->get();
    return view('issues', ['issues' => $issues]);
})->name('issues');

Route::get('/issues/report', [IssuesController::class, 'form'])->name('report');

Route::post('/issues', [IssuesController::class, 'createIssue']);
