<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
    // Route::get('/test', [ProductController::class, 'index']);
// Route::put('/products/{id}', [ProductController::class, 'edit']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/product/store', [ProductController::class, 'store']);
Route::put('/product/{id}', [ProductController::class, 'edit']);