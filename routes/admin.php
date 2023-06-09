<?php

use App\Http\Controllers\Backend\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminHomeController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomePageProductController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\Select2ProductSearchController;
use App\Http\Controllers\Backend\SubCategoryController;

// Group all admin routes together
Route::group([
    'as' => 'admin.',
    'middleware' => ['auth', 'is_admin']
], function () {
    // Route for admin dashboard
    Route::get('/', [AdminHomeController::class, 'dashboard'])->name('dashboard');

    // Route for admin logout
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Route for managing brands
    Route::resource('brand', BrandController::class);

    // Route for managing categories
    Route::resource('category', CategoryController::class);

    // Route for managing sub-categories
    Route::resource('sub-category', SubCategoryController::class);

    // Route for managing products
    Route::resource('product', ProductController::class);
    Route::post('product/search-related-product', [Select2ProductSearchController::class, 'select2SearchProduct'])->name('search.select2.product');

    // Route to find sub-categories for a product
    Route::get('product/find-sub-category/{id}', [ProductController::class, 'findSubCategory'])->name('product.find_sub_category');

    // Home Page Product Setup
    Route::get('/home-page-product/list', [HomePageProductController::class, 'index'])->name('home-page-product.index');
    Route::get('/home-page-product/create', [HomePageProductController::class, 'create'])->name('home-page-product.create');
    Route::post('/home-page-product/store', [HomePageProductController::class, 'store'])->name('home-page-product.store');
});
