<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\homeController;

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/', [homeController::class, 'index']);

// Route::get('/dashboard', [homeController::class, 'login_home'])->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\MovieController;

Route::get('/shopping', [ProductController::class, 'index']);   
Route::get('/cart', [ProductController::class, 'Cart']);
Route::post('add-to-cart', [ProductController::class, 'addToCart'])->name('products.addToCart');
Route::delete('/delete-cart-item', [ProductController::class, 'deleteItem'])->name('delete.cart.item');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('products', productController::class);