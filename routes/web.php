<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [homeController::class, 'index']);

Route::get('/admin/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth','admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/admin/dashboard', 'index');
    });
});
Route::get('/view_category', [AdminController::class, 'view_category'])->name('admin.category')
    ->middleware(['auth','admin']);
Route::post('add_category', [AdminController::class, 'add_category'])->name('add_category')
    ->middleware(['auth','admin']);
Route::get('delete_category/{id}', [AdminController::class, 'delete_category'])->name('delete_category')
    ->middleware(['auth','admin']);
Route::get('edit_category/{id}', [AdminController::class, 'edit_category'])->name('edit_category')
    ->middleware(['auth','admin']);
Route::post('update_category/{id}', [AdminController::class, 'update_category'])->name('update_category')
    ->middleware(['auth','admin']);
Route::get('add_product', [AdminController::class, 'add_product'])->name('add_product')
    ->middleware(['auth','admin']);
Route::post('upload_product', [AdminController::class, 'upload_product'])->name('upload_product')
    ->middleware(['auth','admin']);
Route::get('view_product', [AdminController::class, 'view_product'])->name('view_product')
    ->middleware(['auth','admin']);
Route::get('delete_product/{id}', [AdminController::class, 'delete_product'])->name('delete_product')
    ->middleware(['auth','admin']);
Route::get('update_product/{id}', [AdminController::class, 'update_product'])->name('update_product')
    ->middleware(['auth','admin']);
Route::post('edit_product/{id}', [AdminController::class, 'edit_product'])->name('edit_product')
    ->middleware(['auth','admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/cart', [AdminController::class, 'Cart'])->name('cart');
    Route::post('/add-to-cart', [AdminController::class, 'addToCart'])->name('add.to.cart');
    Route::delete('/delete-cart-item', [AdminController::class, 'deleteItem'])->name('delete.cart.item');
});

Route::get('add_cart/{id}',[homeController::class,'add_cart'])->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';
