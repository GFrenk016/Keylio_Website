<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

Route::get('/', [GeneralController::class, 'homepage'])->name('welcome');

Route::get('/search', [GeneralController::class, 'search'])->name('search');