<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\stripeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/cache', [HomeController::class, 'cache']);


Route::get('/', [HomeController::class, 'index'])->name('home-page');
Route::get('/about-us', [HomeController::class, 'aboutus'])->name('about.us');
Route::get('/privacy-policy', [HomeController::class, 'privacypolicy'])->name('privacy.policy');
Route::get('/terms-condition', [HomeController::class, 'termscondition'])->name('terms.condition');
Route::get('/invoice', [HomeController::class, 'invoice'])->name('invoice');


Route::get('/contact-us', [ContactController::class, 'Index'])->name('contact.us');
Route::post('/contact-message', [ContactController::class, 'contactMessage'])->name('contact.message');


Route::get('/product-category/getFilterData', [ProductController::class, 'getFilterData'])->name('product.filterdata');
Route::get('/product-category/{parentslug}/{slug?}', [ProductController::class, 'productCategory'])->name('product.category');



Route::get('/product-details/getSizeData', [ProductController::class, 'pdtSizePrice'])->name('product.size.price');
Route::get('/product-details/getColorData', [ProductController::class, 'pdtColorPrice'])->name('product.color.price');
Route::get('/product-details/{slug}', [ProductController::class, 'productDetails'])->name('product.details');
Route::get('/product-detail-view/{id}', [ProductController::class, 'pdtDetailView'])->name('product.detail.view');
Route::get('/product-search', [ProductController::class, 'productSearch'])->name('product.search');
Route::get('/product-search/getSearchFilterData', [ProductController::class, 'getSearchFilterData'])->name('product.search.filter');
Route::get('/cart', [CartController::class, 'Index'])->name('product.cart');
Route::get('/cart-empty', [CartController::class, 'CartEmpty'])->name('cart.empty');
Route::get('/cart-data', [CartController::class, 'getCartData'])->name('product.getcartdata');
Route::get('/cart/qtyUpdate', [CartController::class, 'qtyUpdate'])->name('product.qtyUpdate');
Route::get('/cart-data/remove', [CartController::class, 'cartDataRemove'])->name('product.cartremove');
Route::get('/cart-remove/{rowId}', [CartController::class, 'cartPdtRemove'])->name('cart.pdtremove');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('product.addtocart');
Route::get('/checkout', [CheckoutController::class, 'Index'])->name('product.checkout');
Route::get('/wishlist', [ProductController::class, 'wishlist'])->name('product.wishlist');
Route::get('/compare', [ProductController::class, 'compare'])->name('product.compare');

Route::post('/product-order', [OrderController::class, 'ProductOrder'])->name('product.order');

Route::get('/ordercomplete', [OrderController::class, 'order_complete'])->name('ordercomplete.ordercomplete');


Route::get('/blog', [BlogController::class, 'blog'])->name('blog.page');
Route::get('/blog-details', [BlogController::class, 'blogDetails'])->name('blog.details');


// Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');

// Route::get('/account-details', [UserController::class, 'accountdetails'])->name('user.accountdetails');
// Route::get('/myaddress', [UserController::class, 'myaddress'])->name('user.myaddress');
// Route::get('/orders', [UserController::class, 'orders'])->name('user.orders');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// For Tracking order

Route::get('/track-order', [OrderController::class, 'order_tracking'])->name('track-order.order_tracking');



Route::post('/pay', [stripeController::class, 'payment_payment'])->name('pay.payment_payment');
Route::get('/success', [stripeController::class, 'success_payment'])->name('success.success_payment');
Route::get('/cancel', [stripeController::class, 'cancel_payment'])->name('cancel.cancel_payment');







require __DIR__.'/auth.php';




// ================

