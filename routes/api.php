<?php

use App\Http\Controllers\API\KriteriaController;
use App\Http\Controllers\API\SubKriteriaController;
use Illuminate\Http\Request;
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

Route::get('kriteria', [KriteriaController::class, 'index']);
Route::get('kriteria/{id}', [KriteriaController::class, 'show']);
Route::post('kriteria/store', [KriteriaController::class, 'store']);
Route::post('kriteria/update/{id}', [KriteriaController::class, 'update']);
Route::get('kriteria/destroy/{id}', [KriteriaController::class, 'destroy']);

Route::get('sub-kriteria', [SubKriteriaController::class, 'index']);
Route::get('sub-kriteria/{id}', [SubKriteriaController::class, 'show']);
Route::post('sub-kriteria/store', [SubKriteriaController::class, 'store']);
Route::post('sub-kriteria/update/{id}', [SubKriteriaController::class, 'update']);
Route::get('sub-kriteria/destroy/{id}', [SubKriteriaController::class, 'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
