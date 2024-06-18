<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;

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
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::post('/user/update', [UserController::class, 'update'])->name('user.update');
Route::post('/user/change-password', [UserController::class, 'changePassword'])->name('user.changePassword');
Route::get('/user/change-password', function () {
    return view('user.change_password');
})->name('user.showChangePassword');
