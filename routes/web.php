<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Types_of_coffeController;
use App\Http\Controllers\ArrayController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products' ,[ProductController::class,"index"]);
Route::get('/Types_of_coffe' ,[Types_of_coffeController::class,"result"]);
Route::get('/Typess_of_coffe' ,[Types_of_coffeController::class,"index"]);
Route::get('/Types_of_cars' ,[ArrayController::class,"indexx"]);