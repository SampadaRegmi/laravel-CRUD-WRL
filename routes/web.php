<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('welcome');})->name('root');

Route::get('/about', function () {
    return view('about');
});

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/products', 'ProductController@index')->name('products.index');

// Authentication routes
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/register', [AuthController::class, 'register_view'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.post');

Route::resource('products', ProductController::class);
Route::get('/products/{id}', 'ProductController@show')->name('products.shows');
Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroys');

  
Route::resource('posts', PostController::class);