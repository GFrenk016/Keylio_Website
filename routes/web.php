<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\GeneralController;

Route::get('/', [GeneralController::class, 'homepage'])->name('welcome');

Route::get('/search', [SearchController::class, 'index'])->name('search');