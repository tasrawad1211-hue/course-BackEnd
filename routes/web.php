<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Types_of_coffeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products' ,[ProductController::class,"index"]);
Route::get('/Types_of_coffe' ,[Types_of_coffeController::class,"result"]);