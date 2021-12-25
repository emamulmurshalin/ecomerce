<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/create', [ProductController::class, 'create'])
    ->name('product.create');
Route::post('/products/store', [ProductController::class, 'store'])
    ->name('product.store');

Route::get('/products/sales', [SalesController::class, 'create'])
    ->name('sales.create');

Route::post('/products/sales/store', [SalesController::class, 'store'])
    ->name('sales.store');
