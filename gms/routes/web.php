<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register_view'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::middleware(['auth', 'check_admin'])->group(function () {
Route::get('/admin', 'AdminController@index');
// Route::post('/register', 'Auth\RegisterController@register');
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', 'AdminController@showDashboard')->name('admin.dashboard');
// Route::get('/dashboard', 'DashboardController@home')->name('dashboard.home');

});

});


ROute::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');