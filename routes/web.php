<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\CartController;

Route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('home');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('products', productController::class);
Route::post('/login/change-password', [UserController::class, 'changePassword'])->name('login.changePassword');
Route::post('/login/change-name', [UserController::class, 'changeName'])->name('login.changeName');
Route::post('/login/delete', [UserController::class, 'deleteUser'])->name('login.delete');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
