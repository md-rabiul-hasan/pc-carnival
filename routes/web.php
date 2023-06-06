<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\AdminAuthController;
use App\Http\Controllers\Backend\AdminHomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\PcBuildController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\ProductFilterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/product-filter', [ProductFilterController::class, 'index'])->name('product-filter.index');
Route::get('/product-details/{slug}', [ProductDetailsController::class, 'index'])->name('product-details.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.index');
Route::get('/check-out', [CheckOutController::class, 'index'])->name('check-out.index');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us.index');
Route::get('/pc-build', [PcBuildController::class, 'index'])->name('pc-build.index');

Route::get('/product/{slug}/details', [ProductController::class, 'productDetails'])->name('product.details');

