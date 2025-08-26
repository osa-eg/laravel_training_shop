<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'website.home')->name('home');
Route::view('cart', 'website.cart')->name('cart');
Route::view('checkout', 'website.checkout')->name('checkout');
Route::view('products', 'website.products')->name('products');
Route::view('product_details', 'website.product_details')->name('product_details');
