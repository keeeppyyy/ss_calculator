<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DiamToWeight\IndexController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/get-weight', \App\Http\Controllers\Api\DiamToWeight\IndexController::class)->name('get-weight');

Route::get('/get-diameter', \App\Http\Controllers\Api\WeightToDiam\IndexController::class)->name('get-diameter');
