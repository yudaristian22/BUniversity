<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SejarahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('index');

Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
