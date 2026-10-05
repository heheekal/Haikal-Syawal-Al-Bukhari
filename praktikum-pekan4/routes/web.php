<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/form', [mahasiswaController::class, 'form']);
route::post('/simpan', [mahasiswaController::class, 'simpan']);
route::get('/daftar-mahasiswa', [mahasiswaController::class, 'daftar']);
