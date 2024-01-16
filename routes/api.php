<?php

use App\Http\Controllers\LogController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/log', [LogController::class, 'index']);
    Route::post('/log', [LogController::class, 'store']);
});



