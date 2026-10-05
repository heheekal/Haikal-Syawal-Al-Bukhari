<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
})->name('Halaman.Profile');

Route::get('/about', function () {
    return view('about');
})->name('Halaman.About');

Route::get('/formulir', [App\Http\Controllers\DataController::class, 'formulir'])->name('Masuk.Page');
Route::post('/post', [App\Http\Controllers\DataController::class, 'inputData'])->name('Post.Page');