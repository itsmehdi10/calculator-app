<?php

use Illuminate\Support\Facades\Route;

Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculate', [CalculatorController::class, 'calculate']);
