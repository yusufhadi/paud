<?php

use App\Http\Controllers\API\KriteriaController;
use App\Http\Controllers\API\PaudController;
use App\Http\Controllers\API\SubKriteriaController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\UserController;
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

Route::get('role', [RoleController::class, 'index']);
Route::get('role/{id}', [RoleController::class, 'show']);
Route::post('role/store', [RoleController::class, 'store']);
Route::post('role/update/{id}', [RoleController::class, 'update']);
Route::get('role/destroy/{id}', [RoleController::class, 'destroy']);

Route::get('tes', [UserController::class, 'index']);
Route::get('tes/{id}', [UserController::class, 'show']);
Route::post('tes/store', [UserController::class, 'store']);
Route::post('tes/update/{id}', [UserController::class, 'update']);
Route::get('tes/destroy/{id}', [UserController::class, 'destroy']);

Route::get('paud', [PaudController::class, 'index']);
Route::get('paud/{id}', [PaudController::class, 'show']);
Route::post('paud/store', [PaudController::class, 'store']);
Route::post('paud/update/{id}', [PaudController::class, 'update']);
Route::get('paud/destroy/{id}', [PaudController::class, 'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
