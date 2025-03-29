<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;


Route::prefix('admin')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/register', 'register');
        Route::get('/auth/google', 'redirectToGoogle')->name('google.login');
        Route::get('/auth/google/callback', 'registerCallback')->name('google.callback');
    });
    Route::controller(DashboardController::class)->middleware('admin')->group(function () {
        Route::get('/', 'getDashboard')->name('dashboard');
    });
    Route::controller(ProductController::class)->prefix('product')->middleware('admin')->group(function () {
        Route::get('/', 'index')->name('product.index');
        Route::get('/add', 'addProduct')->name('product.add');
        Route::post('/add', 'addProductHandle')->name('product.addProductHandle');
        Route::get('/update/{productId}', 'updateProduct')->name('product.update');
        Route::post('/update/{productId}', 'updateProductHandle')->name('product.updateProductHandle');
        Route::get('/delete/{productId}', 'deleteProduct')->name('product.delete');
    });
    Route::controller(ProductController::class)->prefix('category')->middleware('admin')->group(function () {
        Route::get('/', 'listCategory')->name('category.index');
        Route::get('/add', 'addCategory')->name('category.add');
        Route::post('/add', 'addCategoryHandle')->name('category.addHandle');
        Route::get('/update/{catId}', 'updateCategory')->name('category.update');
        Route::post('/update/{catId}', 'updateCategoryHandle')->name('category.updateHandle');
        Route::get('/delete/{catId}', 'deleteCategory')->name('category.delete');
    });
    // Route::get('auth/google', [GoogleAuthController::class, 'redirectToGoogle']);
});
