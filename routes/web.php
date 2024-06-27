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
Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index');
    });
});
Route::get('/view_category', [AdminController::class, 'view_category'])->name('admin.category');
Route::post('add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
Route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->name('edit_category');
Route::post('update_category/{id}', [AdminController::class, 'update_category'])->name('update_category');
Route::get('add_product', [AdminController::class, 'add_product'])->name('add_product');
Route::post('upload_product', [AdminController::class, 'upload_product'])->name('upload_product');
Route::get('view_product', [AdminController::class, 'view_product'])->name('view_product');
Route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product');

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