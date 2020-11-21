<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPageController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DeliveryDataController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;


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


Route::get('product/{id}/addToCart', [ProductController::class, 'addToCart']);
Route::get('cart/{id}/remove', [CartController::class, 'remove']);
Route::get('cart/removeAll', [CartController::class, 'removeAll']);

Route::resource('/', HomeController::class);

Route::resource('/home', HomeController::class);

Route::resource('/cart', CartController::class);

Route::resource('product', ProductController::class);
Route::resource('products', ProductPageController::class);

Route::resource('account', AccountController::class);

Route::resource('payment', PaymentController::class);

Route::resource('delivery-data', DeliveryDataController::class);

Route::view('/contact', 'footerInformation.contact-info');
Route::view('/objection', 'footerInformation.objection');
Route::view('/privacy', 'footerInformation.privacy');

Auth::routes(); // toto mi podciarkuje code nechapem preco...a co to vobec je? :D // to tam musi byt kvoli prihlasovaniu, registracii odhlaseniu

Route::resource('user', UserController::class, ['middleware' => 'auth']);

Route::post('edit', [UserController::class, 'update']);
