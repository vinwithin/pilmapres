<?php

use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/peringkat', [BerandaController::class, 'peringkat'])->name('peringkat');
