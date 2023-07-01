<?php

use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\AdminAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminHomeController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DynamicPagesController;
use App\Http\Controllers\Backend\HomePage\FeatureCategoryController;
use App\Http\Controllers\Backend\HomePage\HomePageAddsController;
use App\Http\Controllers\Backend\HomePage\HomePageProductController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PcBuildMappingController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\Select2ProductSearchController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Models\DynamicPages;

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
    Route::get('home-page-product/edit', [HomePageProductController::class, 'edit'])->name('home-page-product.edit');
    Route::post('home-page-product/update', [HomePageProductController::class, 'update'])->name('home-page-product.update');

    // Home Page Adds Setup
    Route::get('/home-page-adds/list', [HomePageAddsController::class, 'index'])->name('home-page.adds.index');
    Route::get('/home-page-adds/create', [HomePageAddsController::class, 'create'])->name('home-page.adds.create');
    Route::post('/home-page-adds/store', [HomePageAddsController::class, 'store'])->name('home-page.adds.store');
    Route::get('/home-page-adds/edit/{add}', [HomePageAddsController::class, 'edit'])->name('home-page.adds.edit');
    Route::post('/home-page-adds/update/{add}', [HomePageAddsController::class, 'update'])->name('home-page.adds.update');
    Route::delete('/home-page-adds/delete/{add}', [HomePageAddsController::class, 'destroy'])->name('home-page.adds.destroy');

    // Home Page Feature Category 
    Route::get('/home-page/feature-category/list', [FeatureCategoryController::class, 'list'])->name('home-page.feature-category.index');
    Route::get('/home-page/feature-category/create', [FeatureCategoryController::class, 'create'])->name('home-page.feature-category.create');
    Route::post('/home-page/feature-category/find-list', [FeatureCategoryController::class, 'findList'])->name('home-page.feature-category.find-list');
    Route::post('/home-page/feature-category/store', [FeatureCategoryController::class, 'store'])->name('home-page.feature-category.store');
    Route::get('/home-page/feature-category/{feature_category}/show', [FeatureCategoryController::class, 'show'])->name('home-page.feature-category.show');
    Route::post('/home-page/feature-category/{feature_category}', [FeatureCategoryController::class, 'update'])->name('home-page.feature-category.update');
    Route::delete('/home-page/feature-category/{featureCategory}', [FeatureCategoryController::class, 'destroy'])->name('home-page.feature-category.delete');
    
    // PC Build page
    Route::get('/pc-build/index', [PcBuildMappingController::class, 'index'])->name('pc-build.index');
    Route::get('/pc-build/create', [PcBuildMappingController::class, 'create'])->name('pc-build.create');
    Route::post('/pc-build/store', [PcBuildMappingController::class, 'store'])->name('pc-build.store');
    Route::get('/pc-build/edit', [PcBuildMappingController::class, 'edit'])->name('pc-build.edit');
    Route::post('/pc-build/update', [PcBuildMappingController::class, 'update'])->name('pc-build.update');

    // About Us
    Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.index');
    Route::get('/about-us/create', [AboutUsController::class, 'create'])->name('about-us.create');
    Route::post('/about-us/store', [AboutUsController::class, 'store'])->name('about-us.store');


    Route::get('/dynamic-page', [DynamicPagesController::class, 'index'])->name('dynamic-page.index');
    Route::get('/dynamic-page/create', [DynamicPagesController::class, 'create'])->name('dynamic-page.create');
    Route::post('/dynamic-page/store', [DynamicPagesController::class, 'store'])->name('dynamic-page.store');
    Route::get('/dynamic-page/edit', [DynamicPagesController::class, 'edit'])->name('dynamic-page.edit');
    Route::post('/dynamic-page/update', [DynamicPagesController::class, 'update'])->name('dynamic-page.update');


    Route::get('order/index', [OrderController::class, 'index'])->name('order.index');
    Route::get('order/{order}/details', [OrderController::class, 'details'])->name('order.details');
    Route::post('order/{order}/status-change', [OrderController::class, 'statusChange'])->name('order.status-change');

});
