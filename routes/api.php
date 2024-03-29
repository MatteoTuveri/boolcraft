<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TypeController;
use App\Http\Controllers\Api\CharacterController;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\StatController;


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

Route::controller(TypeController::class)->group(function () {
    Route::get('types', 'index');
    Route::get('types/{id}', 'show');
});
Route::post('/stats',[StatController::class,'store']);
Route::get('/stats', [StatController::class ,'index']);
Route::Get('/characters', [CharacterController::class,'index']);
Route::Get('/characters/{id}', [CharacterController::class,'show']);

Route::controller(ItemController::class)->group(function () {
    Route::get('items', 'index');
    Route::get('items/{id}', 'show');
});
