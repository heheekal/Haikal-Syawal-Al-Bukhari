<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
});
Route::get('/laporan', [LaporanController::class, 'create'])->name('laporan.form');
Route::post('/laporan/konfirmasi', [LaporanController::class, 'store'])->name('laporan.store');
Route::get('/laporan/daftar', [LaporanController::class, 'index'])->name('laporan.index');
