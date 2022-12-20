<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Promise\Create;
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
    return view('main.home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get(
//     '/create-product',
//     [App\Http\Controllers\ProductController::class, 'create']
// )->name('create-product');
// Route::post('/store-product', [App\Http\Controllers\ProductController::class, 'store'])->name('create-product');
// Route::get('/create-product', ProductController::class);

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
