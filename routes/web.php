<?php
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\User\UserController;
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
Route::prefix('user')->middleware('auth')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/change-password', [UserController::class, 'showChangePasswordForm'])->name('user.change-password-form');
    Route::post('/change-password', [UserController::class, 'changePassword'])->name('user.change-password');
    Route::get('/change-name', [UserController::class, 'showChangeNameForm'])->name('user.change-name-form');
    Route::post('/change-name', [UserController::class, 'changeName'])->name('user.change-name');
    Route::post('/delete', [UserController::class, 'deleteUser'])->name('user.delete');

    Route::get('/menus', [UserController::class, 'listMenus'])->name('user.list-menus');
    Route::get('/menus/add', [UserController::class, 'showAddMenuForm'])->name('user.show-add-menu-form');
    Route::post('/menus/add', [UserController::class, 'addMenu'])->name('user.add-menu');
    Route::get('/menus/{menu}/edit', [UserController::class, 'showEditMenuForm'])->name('user.show-edit-menu-form');
    Route::post('/menus/{menu}/edit', [UserController::class, 'editMenu'])->name('user.edit-menu');
    Route::delete('/menus/{menu}', [UserController::class, 'deleteMenu'])->name('user.delete-menu');
});