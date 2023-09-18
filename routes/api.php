<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\APIPostController;
use App\Http\Controllers\APITourController;

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

Route::get('/posts', [APIPostController::class, 'index']);
Route::get('/posts/{id}', [APIPostController::class, 'show']);

Route::get('/tours', [APITourController::class, 'index']);
Route::get('/tours/{id}', [APITourController::class, 'show']);
