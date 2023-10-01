<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\APIPostController;
use App\Http\Controllers\APITourController;
use App\Http\Controllers\APIOrderController;

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

Route::post('/orders', [APIOrderController::class, 'store']);
Route::get('/orders/{id}', [APIOrderController::class, 'show']);

Route::get('/login/{id}', [APIOrderController::class, 'login']);

Route::get('/maps/{id}', [APITourController::class, 'showMap']);
Route::get('/maps/{id}/median', [APITourController::class, 'showMapMedian']);