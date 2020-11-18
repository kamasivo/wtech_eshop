<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\AccountController;


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




Route::resource('/', HomeController::class);

Route::resource('home', HomeController::class);

Route::resource('cart', CartController::class);

Route::resource('product-detail', ProductPageController::class);

Route::resource('products', ProductDetailController::class);

Route::resource('account', AccountController::class);



Auth::routes(); // toto mi podciarkuje code nechapem preco...a co to vobec je? :D