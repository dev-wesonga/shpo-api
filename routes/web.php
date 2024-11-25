<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
Route::view('register','auth.register')->name('register');
Route::view('login','auth.login')->name('login');
// Render the products.index view when visiting '/'
Route::view('/', 'products.index')->name('home');

// Other routes
Route::view('/products/create', 'products.create')->name('products.create');
Route::get('/products/edit/{product}', function (Product $product) {
    return view('products.edit', ['product' => $product]);
})->name('products.edit');

