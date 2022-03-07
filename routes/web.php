<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ImoveisController;

Route::get('/', [ImoveisController::class, 'index']);