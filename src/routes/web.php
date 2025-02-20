<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllerController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/products', [ProductController::class, 'index']);
Route::post('/products/register', [ProductController::class, 'register' ]);
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products/{productld}', [ProductController::class, 'show']);
Route::post('/products/{productld}/update', [ProductController::class, 'update']);
Route::get('/products/search', [ProductController::class, 'search']);