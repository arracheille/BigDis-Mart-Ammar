<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $products = Product::orderBy('created_at', 'desc')->get();
    return view('welcome', compact('products'));
});

Route::get('/products', function () {
    $products = Product::orderBy('created_at', 'desc')->get();
    return view('products', compact('products'));
})->name('products');

Route::post('/create-product', [ProductController::class, 'create']);