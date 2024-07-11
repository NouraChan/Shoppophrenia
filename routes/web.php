<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\WishlistsController;
use App\Http\Controllers\ItemsController; 
use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\UserController;


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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'index2'])->name('dash');
Route::get('/users', [HomeController::class, 'usersAffair'])->name('usersdash');
Route::get('/usersindex', [HomeController::class, 'usersIndex'])->name('usersindex');
// Route::get('/usersindex', [HomeController::class, 'showUser'])->name('usersindex');
// Route::get('/usersindex', [HomeController::class, 'showUser'])->name('usersindex');







//User group

Route::group(['prefix' => 'user'], function () {
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/destroy{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/index', [UserController::class, 'index'])->name('user.index');
    Route::post('/update{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
});



//Cart group

Route::group(['prefix' => 'cart'], function () {
    Route::get('/create', [CartController::class, 'create'])->name('cart.create');
    Route::post('/store', [CartController::class, 'store'])->name('cart.store');
    Route::get('/destroy{id}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/index', [CartController::class, 'index'])->name('cart.index');
    Route::post('/update{id}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/edit/{id}', [CartController::class, 'edit'])->name('cart.edit');
});

//Items group

Route::group(['prefix' => 'orderitems'], function () {
    Route::get('/create', [ItemsController::class, 'create'])->name('orderitems.create');
    Route::post('/store', [ItemsController::class, 'store'])->name('orderitems.store');
    Route::get('/destroy{id}', [ItemsController::class, 'destroy'])->name('orderitems.destroy');
    Route::get('/index', [ItemsController::class, 'index'])->name('orderitems.index');
    Route::post('/update{id}', [ItemsController::class, 'update'])->name('orderitems.update');
    Route::get('/edit/{id}', [ItemsController::class, 'edit'])->name('orderitems.edit');
});

//Product group

Route::group(['prefix' => 'product'], function () {
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/destroy{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/index', [ProductController::class, 'index'])->name('product.index');
    Route::post('/update{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
});

//Orders group

Route::group(['prefix' => 'orders'], function () {
    Route::get('/create', [OrdersController::class, 'create'])->name('orders.create');
    Route::post('/store', [OrdersController::class, 'store'])->name('orders.store');
    Route::get('/destroy{id}', [OrdersController::class, 'destroy'])->name('orders.destroy');
    Route::get('/index', [OrdersController::class, 'index'])->name('orders.index');
    Route::post('/update{id}', [OrdersController::class, 'update'])->name('orders.update');
    Route::get('/edit/{id}', [OrdersController::class, 'edit'])->name('orders.edit');
});

//Wishlists group

Route::group(['prefix' => 'wishlists'], function () {
    Route::get('/create', [WishlistsController::class, 'create'])->name('wishlists.create');
    Route::post('/store', [WishlistsController::class, 'store'])->name('wishlists.store');
    Route::get('/destroy{id}', [WishlistsController::class, 'destroy'])->name('wishlists.destroy');
    Route::get('/index', [WishlistsController::class, 'index'])->name('wishlists.index');
    Route::post('/update{id}', [WishlistsController::class, 'update'])->name('wishlists.update');
    Route::get('/edit/{id}', [WishlistsController::class, 'edit'])->name('wishlists.edit');
});

//Category group

Route::group(['prefix' => 'category'], function () {
    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/destroy{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    Route::get('/index', [CategoryController::class, 'index'])->name('category.index');
    Route::post('/update{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
});

//Shipment group

Route::group(['prefix' => 'shipment'], function () {
    Route::get('/create', [ShipmentController::class, 'create'])->name('shipment.create');
    Route::post('/store', [ShipmentController::class, 'store'])->name('shipment.store');
    Route::get('/destroy{id}', [ShipmentController::class, 'destroy'])->name('shipment.destroy');
    Route::get('/index', [ShipmentController::class, 'index'])->name('shipment.index');
    Route::post('/update{id}', [ShipmentController::class, 'update'])->name('shipment.update');
    Route::get('/edit/{id}', [ShipmentController::class, 'edit'])->name('shipment.edit');
});

//Payment group

Route::group(['prefix' => 'payment'], function () {
    Route::get('/create', [PaymentController::class, 'create'])->name('payment.create');
    Route::post('/store', [PaymentController::class, 'store'])->name('payment.store');
    Route::get('/destroy{id}', [PaymentController::class, 'destroy'])->name('payment.destroy');
    Route::get('/index', [PaymentController::class, 'index'])->name('payment.index');
    Route::post('/update{id}', [PaymentController::class, 'update'])->name('payment.update');
    Route::get('/edit/{id}', [PaymentController::class, 'edit'])->name('payment.edit');
});

//Announcement group

Route::group(['prefix' => 'announcement'], function () {
    Route::get('/create', [AnnouncementController::class, 'create'])->name('announcement.create');
    Route::post('/store', [AnnouncementController::class, 'store'])->name('announcement.store');
    Route::get('/destroy{id}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');
    Route::get('/index', [AnnouncementController::class, 'index'])->name('announcement.index');
    Route::post('/update{id}', [AnnouncementController::class, 'update'])->name('announcement.update');
    Route::get('/edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement.edit');
});


Route::get('/user',function(){
    $users = User::with('profile')->get();
    dd($users);
});


// Route::get('/one-to-one',function(){
//     $user = User::create(['name'=>'Maitrik','email'=>'Maitrik1@test.com','password'=>123456]);
//     Profile::create([
//         'firstname'=>'Maitrik',
//         'lastname'=>'T',
//         'birthday'=>'15-10-1990',
//         'user_id'=>$user->id
//     ]);
//     return response()->json([
//         'username' => $user->name,
//         'email' => $user->email,
//         'firstname' => $user->profile->firstname,
//         'lastname' => $user->profile->lastname,
//     ]);
// });