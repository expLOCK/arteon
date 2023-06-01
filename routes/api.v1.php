<?php

use App\Versions\V1\Http\Controllers\FavouriteController;
use App\Versions\V1\Http\Controllers\OrderController;
use App\Versions\V1\Http\Controllers\ProductController;
use App\Versions\V1\Http\Controllers\ReviewController;
use App\Versions\V1\Http\Controllers\UserController;
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

Route::apiResource('product', ProductController::class)
    ->only(['index', 'show']);

Route::apiResource('review', ReviewController::class)
    ->only(['store']);

Route::apiResource('favourite', FavouriteController::class)
    ->only(['store']);

Route::apiResource('order', OrderController::class)
    ->only(['store']);

Route::get('user/{user}/favourites', [UserController::class, 'favourites'])->name('user.favourites');
Route::get('user/{user}/orders', [UserController::class, 'orders'])->name('user.orders');
