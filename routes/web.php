<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('landing');
// });

Route::get('/', [LandingPageController::class, 'index']);
