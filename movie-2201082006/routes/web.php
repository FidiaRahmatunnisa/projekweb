<?php

use App\Http\Controllers\controlHome;
use Illuminate\Support\Facades\Route;

Route::get('/', [controlHome::class, 'index']);
Route::get('/detail/{id}', [controlHome::class, 'detail'])->name('detail');
// Route::get('/detail/{id}', [MovieController::class, 'detail'])->name('detail');
