<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Brand
Route::get('/brand', [BrandController::class, 'index'])->name('brand.index'); // route untuk menampilkan data awal
Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create'); // route untuk menampilkan form create
Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit'); // route untuk menampilkan form edit
Route::post('/brand', [BrandController::class, 'store'])->name('brand.store'); // route untuk menyimpan data
Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update'); // route untuk mengupdate data
Route::delete('/brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy'); // route untuk menghapus data

// Category
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

// Product
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

// User
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Role
Route::get('/role', [RoleController::class, 'index'])->name('role.index');
