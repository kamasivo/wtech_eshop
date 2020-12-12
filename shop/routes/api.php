<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('admin-products/list/{page}', [ProductController::class, 'list']);
Route::get('admin-products/listAll', [ProductController::class, 'listAll']);
Route::delete('delete-product/{product}', [ProductController::class, 'destroy']);
Route::post('admin-products', [ProductController::class, 'store']);
Route::get('admin-products/{product}/edit', [ProductController::class, 'edit']);
Route::put('admin-products/{product}', [ProductController::class, 'update']);
