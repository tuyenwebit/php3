<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
    return view('about');
});

// Route::get('/products', [ProductController::class, 'index']);

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/add', [ProductController::class, 'addProduct'])->name('product.add');
Route::post('/products/store', [ProductController::class, 'storeProduct'])->name('product.store');

Route::get('/products/edit/{productId}', [ProductController::class, 'editProduct'])->name('product.edit');
Route::put('/products/update/{productId}', [ProductController::class, 'updateProduct'])->name('product.update');

Route::get('/products/delete/{productId}', [ProductController::class, 'deleteProduct'])->name('product.delete');


