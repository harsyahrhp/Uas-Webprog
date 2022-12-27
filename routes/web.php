<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
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
Route::get('/profile/{id}', [AuthController::class, 'profileview']);
//login
Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

//register
Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//cart
Route::post('/addcart/{id}',[CartController::class,'addcart']);
Route::get('/showcart',[CartController::class,'showcart']);
Route::get('/deleteproduct/{id}',[CartController::class,'deletecart']);
Route::post('/purchase',[CartController::class,'confirmorder']);
Route::get('/showhistory/{id}',[CartController::class,'showorder']);

//home
Route::get('/', [ProductController::class, 'index']);

//product by category
Route::get('/category/{id}', [ProductController::class, 'categoryProduct']);

//product detail
Route::get('/product/{id}', [ProductController::class, 'productDetail']);
Route::post('/product/{id}', [ProductController::class, 'purchase'])->middleware('auth');

//search
Route::post('/search', [ProductController::class, 'search'])->name('search');

//admin
Route::get('/showproduct',[AdminController::class,'showproduct']);
Route::get('/addproduct',[AdminController::class,'addproductview']);
Route::post('/addproduct',[AdminController::class,'addproduct']);
Route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);
Route::get('/updateview/{id}',[AdminController::class,'updateview']);
Route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);
