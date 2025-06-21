<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/peringkat', [BerandaController::class, 'peringkat'])->name('peringkat');


Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');


