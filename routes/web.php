<?php

use App\Http\Controllers\Frontend\BrandController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\frontend\AuthenticationController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckOutController;
use App\Http\Controllers\Frontend\ConfirmOrderController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\DeliveryOptionController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\ManageOrderController;
use App\Http\Controllers\Frontend\OrderVoucherController;
use App\Http\Controllers\Frontend\PcBuildController;
use App\Http\Controllers\Frontend\PrivacyPolicyController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\ProductFilterController;
use App\Http\Controllers\Frontend\TearmsAndConditionController;

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
Route::get('/product-filter/search', [ProductFilterController::class, 'categoryFilter'])->name('product-filter.category');
Route::get('/product-details/{slug}', [ProductDetailsController::class, 'index'])->name('product-details.index');


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart-count', [CartController::class, 'cartItemCount'])->name('cart.count');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add_to_cart');
Route::post('/remove-from-cart', [CartController::class, 'removeFromCart'])->name('cart.remove_to_cart');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us.index');
Route::get('/check-out', [CheckOutController::class, 'index'])->name('check-out.index');

Route::get('/pc-build', [PcBuildController::class, 'index'])->name('pc-build.index');
Route::get('/pc-build/filter', [PcBuildController::class, 'filter'])->name('pc-build.filter');
Route::post('/add-to-pc-build', [PcBuildController::class, "addToPcBuild"])->name('add-to-pc-build');
Route::post('/remove-to-pc-build', [PcBuildController::class, "removeToPcBuild"])->name('remove-to-pc-build');
Route::post('/clear-all-pc-build', [PcBuildController::class, "clearAllPcBuild"])->name('clear-all-pc-build');
Route::post('/add-to-cart-pc-build', [PcBuildController::class, "addToCartPcBuild"])->name('add-to-cart-pc-build');

Route::get('/order-voucher/{orderNumber}', [OrderVoucherController::class, 'orderVoucher'])->name('order.voucher');

Route::get('/manage-order', [ManageOrderController::class, 'manageOrder'])->middleware('auth')->name('manage.order');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact-us.index');
Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact-us.store');

Route::get('/brands', [BrandController::class, 'index'])->name('brand.index');





Route::get('/product/{slug}/details', [ProductController::class, 'productDetails'])->name('product.details');

Route::post('/confirm-order', [ConfirmOrderController::class, 'confirmOrder'])->name('confirm-order');

Route::post("/auth/registration", [AuthenticationController::class, 'registration'])->name("auth.registration");
Route::post("/auth/signin", [AuthenticationController::class, 'signin'])->name("auth.signin");
Route::get("/auth/signin", [AuthenticationController::class, 'singinForm'])->name('auth.signin.form');
Route::get("/auth/registration", [AuthenticationController::class, 'registrationForm'])->name('auth.registration.form');
Route::post("/auth/logout", [AuthenticationController::class, 'logout'])->name('auth.registration.logout');


// Single Pages
Route::get('delivery-option', [DeliveryOptionController::class, 'show'])->name('delivery-option.show');
Route::get('terms-and-condition', [TearmsAndConditionController::class, 'show'])->name('terms-and-condition.show');
Route::get('privacy-policy', [PrivacyPolicyController::class, 'show'])->name('privacy-policy.show');