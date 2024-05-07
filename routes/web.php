<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;

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

Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('orderitems', OrderItemController::class);



Route::resource('home', HomeController::class, ['names' => 'home']);
Route::get('/search', 'App\Http\Controllers\SearchController@index')->name('search.search');
Route::get('/categories/{id}', [CategoryController::class, 'showById'])->name('categories.showById');
Route::get('categories/{category_id}/products', [ProductController::class, 'show'])->name('products.showById');
Route::get('show-cart', [CartController::class, 'index'])->name('cart.index');
Route::post('add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.delete');
Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/item_count', 'CartController@getItemCount')->name('cart.item_count');
Route::post('/products/store', 'ProductController@store');



Route::prefix('admin')->group(function () {
    Route::resource('users', App\Http\Controllers\Admin\UserController::class, ['names' => 'admin.users']);
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class, ['names' => 'admin.products']);
    Route::resource('orders', App\Http\Controllers\Admin\ProductController::class, ['names' => 'admin.orders']);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
