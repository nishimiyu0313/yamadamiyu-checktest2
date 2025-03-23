<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControllerController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth')->group(function () {
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/register', [ProductController::class, 'register' ]);
Route::post('/products/register', [ProductController::class, 'store']);
Route::get('/products/search', [ProductController::class, 'search']);
Route::get('/products/{productId}', [ProductController::class, 'show'])->name('show');
Route::patch('/products/{productId}/update', [ProductController::class, 'update']);
Route::post('/products/{productId}/delete', [ProductController::class, 'destroy']);
});

