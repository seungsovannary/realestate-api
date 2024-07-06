<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\StateTownVillageController;
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
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')
    ->get('/me', [AuthController::class, 'user']);
Route::middleware('auth:sanctum')
    ->post('/logout', [AuthController::class, 'logout']);

Route::get('/users', [UserController::class, "getList"]);
Route::get('/users/{id}', [UserController::class, "get"]);
Route::middleware(['auth:sanctum', 'permission.admin'])->post('/users', [UserController::class, "create"]);
Route::middleware(['auth:sanctum'])->put('/users/{id}', [UserController::class, "update"]);
Route::middleware(['auth:sanctum'])->delete('/users/{id}', [UserController::class, "delete"]);

Route::get('/properties', [PropertyController::class, "getList"]);
Route::get('/properties/{id}', [PropertyController::class, "get"]);
Route::middleware(['auth:sanctum', 'permission.property_owner'])->post('/properties', [PropertyController::class, "create"]);
Route::middleware(['auth:sanctum', 'permission.property_owner'])->put('/properties/{id}', [PropertyController::class, "update"]);
Route::middleware(['auth:sanctum', 'permission.property_owner'])->delete('/properties/{id}', [PropertyController::class, "delete"]);

Route::get('/categories', [CategoryController::class, "getList"]);
Route::middleware(['auth:sanctum', 'permission.admin'])->post('/categories', [CategoryController::class, "create"]);
Route::middleware(['auth:sanctum', 'permission.admin'])->get('/categories/{id}', [CategoryController::class, "get"]);
Route::middleware(['auth:sanctum', 'permission.admin'])->put('/categories/{id}', [CategoryController::class, "update"]);
Route::middleware(['auth:sanctum', 'permission.admin'])->delete('/categories/{id}', [CategoryController::class, 'destroy']);


// returns the home page with all posts
Route::get('/', PostController::class . '@index');
// returns the form for adding a post
Route::get('/posts/create', PostController::class . '@create');
// adds a post to the database
Route::post('/posts', PostController::class . '@store');
// returns a page that shows a full post
Route::get('/posts/{post}', PostController::class . '@show');
// returns the form for editing a post
Route::get('/posts/{post}/edit', PostController::class . '@edit');
// updates a post
Route::put('/posts/{post}', PostController::class . '@update');
// deletes a post
Route::delete('/posts/{post}', PostController::class . '@destroy');


Route::get('/states', StateTownVillageController::class . '@indexState');
Route::get('/towns', StateTownVillageController::class . '@indexTown');
Route::get('/villages', StateTownVillageController::class . '@indexVillage');



Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/saves', [SaveController::class, 'store']);
    Route::get('/saves/{id}', [SaveController::class, 'show']);
    Route::delete('/saves/{id}', [SaveController::class, 'destroy']);
    Route::get('/saves', [SaveController::class, 'index']);
    Route::get('/saves/user/{userId}', [SaveController::class, 'getByUserId']);
    Route::get('/saved/{id}', [SaveController::class, 'saved']);
    Route::delete('/unsaved/{id}', [SaveController::class, 'unsaved']);
});
