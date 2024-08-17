<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\StringToNumberController;

Route::post('/string_to_number', [StringToNumberController::class, 'convert']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
