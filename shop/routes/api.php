<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductControllerApi;
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


Route::get('admin-products/list/{id}', [ProductControllerApi::class, 'list']);
Route::get('admin-products/listAll', [ProductControllerApi::class, 'listAll']);
Route::delete('delete-product/{id}', [ProductControllerApi::class, 'destroy']);
Route::post('admin-products', [ProductControllerApi::class, 'store']);
Route::get('admin-products/{product}/edit', [ProductControllerApi::class, 'edit']);
Route::put('/update/{product}', [ProductControllerApi::class, 'update']);
Route::post('admin-images/upload', [ProductControllerApi::class, 'upload']);