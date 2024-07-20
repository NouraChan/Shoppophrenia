<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


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

Route::get('/', [CartController::class, 'showHome'])->name('home');

Auth::routes();

//Navigation

Route::get('/dashboard', [HomeController::class, 'dashIndex'])->name('dash');
Route::get('/users', [HomeController::class, 'usersAffair'])->name('usersdash');
Route::get('/usersindex', [HomeController::class, 'usersIndex'])->name('usersindex');
Route::get('/settings', [HomeController::class, 'dashIndex'])->name('settings');
Route::get('/genres', [HomeController::class, 'genreIndex'])->name('genres');
Route::get('/products', [HomeController::class, 'productIndex'])->name('products');
Route::get('/checkout', [HomeController::class, 'checkOut'])->name('checkout');

Route::get('/results', [SearchController::class, 'searchProduct'])->name('search');


//User group

Route::group(['prefix' => 'user'], function () {
    // Route::get('/create', [UserController::class, 'create'])->name('user.create');
    // Route::post('/store', [UserController::class, 'store'])->name('user.store');
    Route::get('/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/index', [UserController::class, 'index'])->name('user.index');
    Route::post('/update/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('user.show');
    Route::get('profile/show/{id}', [UserController::class, 'toProfile'])->name('user.profile');
    Route::get('profile/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
});





//Cart group

Route::group(['prefix' => 'cart'], function () {
    Route::get('/create', [CartController::class, 'create'])->name('cart.create');
    Route::post('/store', [CartController::class, 'store'])->name('cart.store');
    Route::get('/destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/index', [CartController::class, 'index'])->name('cart.index');
    Route::post('/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::get('/edit/{id}', [CartController::class, 'edit'])->name('cart.edit');
    Route::get('/add/{id}', [CartController::class, 'add'])->name('product.add');
    Route::get('/remove/{id}', [CartController::class, 'remove'])->name('product.remove');
    Route::get('/show', [CartController::class, 'toCart'])->name('cart.show');





});

//Items group

Route::group(['prefix' => 'items'], function () {
    Route::get('/create', [ItemsController::class, 'create'])->name('items.create');
    Route::post('/store', [ItemsController::class, 'store'])->name('items.store');
    Route::get('/destroy/{id}', [ItemsController::class, 'destroy'])->name('items.destroy');
    Route::get('/index', [ItemsController::class, 'index'])->name('items.index');
    Route::post('/update/{id}', [ItemsController::class, 'update'])->name('items.update');
    Route::get('/edit/{id}', [ItemsController::class, 'edit'])->name('items.edit');
});

//Product group

Route::group(['prefix' => 'product'], function () {
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/index', [ProductController::class, 'index'])->name('product.index');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('product.show');


});

//Orders group

Route::group(['prefix' => 'order'], function () {
    // Route::get('/create', [OrdersController::class, 'create'])->name('order.create');
    Route::post('/store', [OrdersController::class, 'store'])->name('order.store');
    Route::get('/destroy/{id}', [OrdersController::class, 'destroy'])->name('order.destroy');
    Route::get('/index', [OrdersController::class, 'index'])->name('order.index');
    Route::post('/update/{id}', [OrdersController::class, 'update'])->name('order.update');
    Route::get('/edit/{id}', [OrdersController::class, 'edit'])->name('order.edit');
    Route::get('/show/{id}', [OrdersController::class, 'show'])->name('order.show');

})->middleware('auth');

//Wishlists group

Route::group(['prefix' => 'wishlist'], function () {
    Route::get('/create', [WishlistController::class, 'create'])->name('wishlist.create');
    Route::post('/store', [WishlistController::class, 'store'])->name('wishlist.store');
    Route::get('/destroy/{id}', [WishlistController::class, 'destroy'])->name('wishlist.destroy');
    Route::get('/index', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/update/{id}', [WishlistController::class, 'update'])->name('wishlist.update');
    Route::get('/edit/{id}', [WishlistController::class, 'edit'])->name('wishlist.edit');
    Route::get('/show/{id}', [WishlistController::class, 'show'])->name('wishlist.show');

})->middleware('auth');

//Genre group

Route::group(['prefix' => 'genre'], function () {
    Route::get('/create', [GenreController::class, 'create'])->name('genre.create');
    Route::post('/store', [GenreController::class, 'store'])->name('genre.store');
    Route::get('/destroy/{id}', [GenreController::class, 'destroy'])->name('genre.destroy');
    Route::get('/index', [GenreController::class, 'index'])->name('genre.index');
    Route::post('/update/{id}', [GenreController::class, 'update'])->name('genre.update');
    Route::get('/edit/{id}', [GenreController::class, 'edit'])->name('genre.edit');
})->middleware('auth');



//Announcement group

Route::group(['prefix' => 'announcement'], function () {
    Route::get('/create', [AnnouncementController::class, 'create'])->name('announcement.create');
    Route::post('/store', [AnnouncementController::class, 'store'])->name('announcement.store');
    Route::get('/destroy/{id}', [AnnouncementController::class, 'destroy'])->name('announcement.destroy');
    Route::get('/index', [AnnouncementController::class, 'index'])->name('announcement.index');
    Route::post('/update/{id}', [AnnouncementController::class, 'update'])->name('announcement.update');
    Route::get('/edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement.edit');
    Route::get('/show/{id}', [AnnouncementController::class, 'show'])->name('announcement.show');
    Route::get('/', [AnnouncementController::class, 'toAnnouncements'])->name('announcement.home');


})->middleware('auth');



Route::group(['prefix' => 'review'], function () {
    Route::get('/create', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/store', [ReviewController::class, 'store'])->name('review.store');
    Route::get('/destroy/{id}', [ReviewController::class, 'destroy'])->name('review.destroy');
    Route::get('/index', [ReviewController::class, 'index'])->name('review.index');
    Route::post('/update/{id}', [ReviewController::class, 'update'])->name('review.update');
    Route::get('/edit/{id}', [ReviewController::class, 'edit'])->name('review.edit');
});
