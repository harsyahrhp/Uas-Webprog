<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

//auth

//login
Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

//register
Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//home
Route::get('/', [ProductController::class, 'index']);

//product by category
Route::get('/category/{id}', [ProductController::class, 'categoryProduct']);

//product detail
Route::get('/product/{id}', [ProductController::class, 'productDetail']);
Route::post('/product/{id}', [ProductController::class, 'purchase'])->middleware('auth');
