<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\WishlistsController;
use App\Http\Controllers\ItemsController; 
use Illuminate\Support\Facades\Auth;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'cart'], function () {
    Route::get('/create', [CartController::class, 'create'])->name('cart.create');
    Route::post('/store', [CartController::class, 'store'])->name('cart.store');
    Route::get('/destroy{id}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/index', [CartController::class, 'index'])->name('cart.index');
    Route::post('/update{id}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/edit/{id}', [CartController::class, 'edit'])->name('cart.edit');
});