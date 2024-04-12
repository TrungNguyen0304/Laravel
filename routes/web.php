<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function(){
//     return 'page world';
// });
// Route::get('/shop', function(){
//     return 'page shop';
// })->name('home')->middleware('checkAge');
// Route::get('/about', function(){
//     return 'page world';
// });
// Route::get('/contact', function(){
//     return 'page world';
// });


// Route::prefix('admin')->group(function(){
//     Route::get('post/{post}/comments/{comments}', function($postId, $commentId){
//         return "postID: $postId - commentId: $commentId";
//     });
//     Route::get('user/{name?}', function($name = 'Jon'){
//         return $name;
//     });
// });


Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);
Route::resource('orderitems', OrderItemController::class);



Route::resource('home', HomeController::class,['names'=>'home']);
Route::get('/search', 'App\Http\Controllers\SearchController@index')->name('search.search');
Route::prefix('admin')->group(function(){
    Route::resource('users', App\Http\Controllers\Admin\UserController::class,['names'=>'admin.users']);
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class,['names'=>'admin.products']);
    Route::resource('orders', App\Http\Controllers\Admin\ProductController::class,['names'=>'admin.orders']);
    
});