<?php

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

Route::apiResource('v1/carts', App\Http\Controllers\Api\V1\CartController::class)
    ->only('show');

Route::apiResource('v1/items', App\Http\Controllers\Api\V1\ItemController::class);

//Route::apiResource('v1/products', App\Http\Controllers\Api\V1\ProductController::class)->only(['index', 'show']);

Route::get('v1/products', [App\Http\Controllers\Api\V1\ProductController::class, 'index'])->name('products.index');
Route::get('v1/products/{$id}', [App\Http\Controllers\Api\V1\ProductController::class, 'show'])->name('products.show');
Route::post('v1/products/add', [App\Http\Controllers\Api\V1\ProductController::class, 'addItem'])->name('products.add');

Route::post('v1/orders', [App\Http\Controllers\Api\V1\OrderController::class, 'store'])->name('orders.store');