<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\StoreController;
use App\Http\Controllers\Store\CategoryController;
use App\Http\Controllers\Store\OrderController;
use App\Http\Controllers\Store\ProductController;
use App\Order;
use Illuminate\Support\Facades\Auth;
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

// User Register Routes
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

// User Login Routes
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// User Logout Route
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Store Routes
Route::get('/store', [StoreController::class, 'index'])->name('store');
Route::get('/view/{id}', [StoreController::class, 'productview']);



// Order Controller

// Shows the Order Now Form
Route::get('/ship-now', [OrderController::class, 'index'])->name('ship-now');

// Stores the Order to db
Route::post('/ship-now', [OrderController::class, 'store']);

// Shows the Track Order Form
Route::get('/track-order', [OrderController::class, 'track'])->name('track');

// Shows the details based on Refrence No.
Route::post('/track-order', [OrderController::class, 'orderDetails']);







// Admin Routes
Route::prefix('admin')->group(function () {
    // Category Routes

    // Show Categories
    Route::get('/catgories', [CategoryController::class, 'index'])->name('category');
    // Create New Category Form
    Route::get('/create-category', [CategoryController::class, 'create'])->name('create-category');

    // Submits the form and stores to db.
    Route::post('/create-category', [CategoryController::class, 'store']);


    // Product Routes

    // Show Product
    Route::get('/products', [ProductController::class, 'index'])->name('product');
    // Create New Product Form
    Route::get('/create-product', [ProductController::class, 'create'])->name('create-product');

    // Submits the form and stores to db.
    Route::post('/create-product', [ProductController::class, 'store']);

    // Show Orders

    Route::get('/orders', [OrderController::class, 'orderList'])->name('order-list');
});

// Home 
Route::get('/', function () {

    // dd(Auth::user());
    return view('ship.shipNow');
})->name('home');
