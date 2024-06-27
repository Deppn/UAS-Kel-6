<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [homeController::class, 'index']);

Route::get('/dashboard', [homeController::class, 'login_home'])->middleware(['auth','verified'])->name('dashboard');

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cart', [AdminController::class, 'Cart']);
Route::get('add_cart/{id}', [homeController::class,'add_cart'])->middleware(['auth','verified']);
Route::post('add-to-cart', [AdminController::class, 'addToCart'])->name('products.addToCart');
Route::delete('/delete-cart-item', [AdminController::class, 'deleteItem'])->name('delete.cart.item');


require __DIR__.'/auth.php';
