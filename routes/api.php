<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')
    ->get('/me', [AuthController::class, 'user']);

Route::get('/users', [UserController::class, "getList"]);
Route::post('/users', [UserController::class, "create"]);
Route::get('/users/{id}', [UserController::class, "get"]);
Route::put('/users/{id}', [UserController::class, "update"]);
Route::delete('/users/{id}', [UserController::class, "delete"]);

Route::get('/properties', [PropertyController::class, "getList"]);
Route::post('/properties', [PropertyController::class, "create"]);
Route::get('/properties/{id}', [PropertyController::class, "get"]);
Route::put('/properties/{id}', [PropertyController::class, "update"]);
Route::delete('/properties/{id}', [PropertyController::class, "delete"]);

