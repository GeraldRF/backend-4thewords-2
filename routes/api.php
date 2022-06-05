<?php

use App\Http\Controllers\historicalEventController;
use App\Http\Controllers\fileController;
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

Route::resource('historical-events', historicalEventController::class);
Route::put('historical-events/like/{id}', [historicalEventController::class, 'giveLike']);
Route::post('historical-events/upload', [fileController::class, 'upload']);
