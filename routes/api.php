<?php

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Models\User;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', function () {
    return User::all();
});

Route::get('/products', [ProductController::class, 'index']);
Route::post('/create-product', [ProductController::class, 'store']);
Route::post('/update-product/{id}', [ProductController::class, 'update']);
Route::delete('/delete-product/{id}', [ProductController::class, 'delete']);

Route::post('/create-user', [UserController::class, 'addNewUser']);
Route::get('/collection', [UserController::class, 'collection']);
Route::get('/getAllUsers', [UserController::class, 'getAllUsers']);
