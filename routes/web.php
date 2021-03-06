<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
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

Route::get('/', [IndexController::class,'index'])->name('home');
Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class,'show'])->name('posts.show');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{product_code}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/{product_code}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::patch('/products/{product_code}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{product_code}', [ProductController::class, 'destroy'])->name('product.destroy');

