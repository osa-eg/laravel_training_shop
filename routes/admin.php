<?php

use App\Http\Controllers\Admin\BannarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix'     => LaravelLocalization::setLocale() . '/admin_dashboard',
        'middleware' => ['auth','localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Route::view('/', 'admin.index')->name('admin');

        Route::resource('sliders',  SliderController::class)->except('show');
        Route::resource('bannars',  BannarController::class)->except('show');
        Route::resource('categories', CategoryController::class)->except('show');
        Route::resource('products', ProductController::class)->except('show');
    },
);
