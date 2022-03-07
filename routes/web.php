<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImoveisController;

Route::get('/', [ImoveisController::class, 'index']);
Route::get('/create', [ImoveisController::class, 'create']);
Route::post('/store', [ImoveisController::class, 'store']);