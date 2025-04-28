<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/about', function () {
    return view('content');
});


// Route::get('/products', [ProductController::class , 'index'])->name('products.index');
// Route::get('/create-product', [ProductController::class , 'create'])->name('products.create');
// Route::post('/products', [ProductController::class , 'store'])->name('products.store');
// Route::get('/products/{$id}', [ProductController::class , 'show'])->name('products.show');

Route::get('/products', [ProductController::class , 'index'])->name('products.index');

Route::get('/products/{id}', [ProductController::class , 'show'])->name('products.show');

Route::get('/categories', [CategoryController::class , 'index'])->name('categories.index');