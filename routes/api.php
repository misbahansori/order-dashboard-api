<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InOutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApiLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientSearchController;
use App\Http\Controllers\NewBussinessController;
use App\Http\Controllers\ModelAllocationController;
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

Route::post('/login', ApiLoginController::class);
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
    Route::get('/model-allocation', ModelAllocationController::class);
    Route::get('/new-bussiness', NewBussinessController::class);
    Route::get('/in-out', InOutController::class);

    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/reports', ReportController::class);
    });
});
