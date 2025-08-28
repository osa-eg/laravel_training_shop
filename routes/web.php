<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'website.home')->name('home');
Route::view('cart', 'website.cart')->name('cart');
Route::view('checkout', 'website.checkout')->name('checkout');
Route::view('products', 'website.products')->name('products');
Route::view('product_details', 'website.product_details')->name('product_details');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
