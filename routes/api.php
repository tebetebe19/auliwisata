<?php

use App\Http\Controllers\API\ProductsController;
use App\Http\Controllers\API\ProductController;
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

Route::group(['prefix' => 'v1'], function () {
    Route::get('products', [ProductsController::class, 'index']);
    Route::get('product/{slug?}', [ProductController::class, 'index']);
    // Route::get('product/{slug?}', [ProductController::class, 'index']);
});
