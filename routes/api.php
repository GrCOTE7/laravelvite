<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

use App\Http\Controllers\Api\FilmController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::apiResource('films', FilmController::class);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });