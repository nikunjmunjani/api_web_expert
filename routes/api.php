<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('property')->group(function () {
    Route::get('/list', [PropertyController::class, 'index']);
    Route::post('/show', [PropertyController::class, 'show']);
    Route::post('/add', [PropertyController::class, 'add']);
    Route::post('/update', [PropertyController::class, 'update']);
    Route::post('/destroy', [PropertyController::class, 'destroy']);
});
