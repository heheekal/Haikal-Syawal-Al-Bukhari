<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [studentController::class, 'index'])->name('students.index');
