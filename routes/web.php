<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index');
    });
});
Route::get('/view_category', [AdminController::class, 'view_category'])->name('admin.category');
Route::post('add_category', [AdminController::class, 'add_category'])->name('add_category');
Route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category');
Route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->name('edit_category');
Route::post('update_category/{id}', [AdminController::class, 'update_category'])->name('update_category');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cart', [ProductController::class, 'Cart']);
Route::post('add-to-cart', [ProductController::class, 'addToCart'])->name('products.addToCart');
Route::delete('/delete-cart-item', [ProductController::class, 'deleteItem'])->name('delete.cart.item');

Route::resource('products', productController::class);

require __DIR__.'/auth.php';
