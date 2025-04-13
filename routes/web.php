<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Searcher;
use App\Http\Controllers\GeneralController;

Route::get('/', [GeneralController::class, 'homepage'])->name('welcome');

Route::get('/search', Searcher::class)->name('search');