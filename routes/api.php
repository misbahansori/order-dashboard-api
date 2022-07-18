<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientSearchController;
use App\Http\Controllers\ModelAlocationController;
use App\Http\Controllers\ShippingAndStorageController;

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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/shipping-and-storage', ShippingAndStorageController::class);
    Route::get('/orders', [OrderController::class, 'index']);
});

Route::prefix('dashboard')->group(function () {
    Route::get('/overview', DashboardController::class);
    Route::post('/search-client', ClientSearchController::class);
    Route::get('/model-alocation', ModelAlocationController::class);
});
