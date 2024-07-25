<?php

use App\Http\Controllers\MateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get("/suma/{num1}/{num2}",[MateController::class, 'suma']);
Route::get("/mult/{num1}/{num2}",[MateController::class, 'multiplicacion']);