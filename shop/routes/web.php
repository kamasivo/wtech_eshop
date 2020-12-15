<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DeliveryDataController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Request;

use App\Models\Product;
use App\Models\Image;
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



Route::get('cart/{id}/remove', [CartController::class, 'remove']);
Route::get('cart/removeAll', [CartController::class, 'removeAll']);
Route::get('cart/delete', [CartController::class, 'delete']);
Route::get('cart/{id}/{count}/plus', [CartController::class, 'plus']);
Route::get('cart/{id}/{count}/minus', [CartController::class, 'minus']);
Route::any('products/{id}', [ProductPageController::class, 'paging']);
Route::any('/search', [ProductPageController::class, 'search']);
Route::get('product/{id}/{count}/plus', [ProductController::class, 'plus']);
Route::get('product/{id}/{count}/minus', [ProductController::class, 'minus']);

Route::resource('/cart', CartController::class, ['middleware' => 'auth']);
Route::resource('product', ProductController::class);
Route::resource('account', AccountController::class);
Route::resource('payment', PaymentController::class);
Route::resource('delivery-data', DeliveryDataController::class);
Route::resource('orders', OrderController::class);
Route::resource('user', UserController::class, ['middleware' => 'auth']);

Route::view('/contact', 'footerInformation.contact-info');
Route::view('/objection', 'footerInformation.objection');
Route::view('/privacy', 'footerInformation.privacy');
Route::view('/', 'home.index');
Route::view('/home', 'home.index');

Auth::routes();


Route::post('product/{id}/{continue}/addToChart', [ProductController::class, 'addToCart']);
Route::post('edit', [UserController::class, 'update']);
Route::post('/delivery-data/edit', [DeliveryDataController::class, 'update']);
Route::get('/admin', [AdminController::class, 'index'])->middleware('role');
