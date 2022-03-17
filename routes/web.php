<?php

use App\Http\Controllers\AboutAdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BillingAddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ShopPageController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqAdminController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FestiveController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\NurseryController;
use App\Http\Controllers\PlaceOrderController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;



require __DIR__ . '/auth.php';



Route::get('/admin/login',[AdminAuthController::class,'index'])->name('admin.login');
Route::post('/admin/login',[AdminAuthController::class,'store'])->name('admin.login');

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');

    Route::get('/productView',[ProductController::class,'index'])->name('productView');
    Route::get('/productAdd',[ProductController::class,'create'])->name('productAdd');
    Route::post('/productStore',[ProductController::class,'store'])->name('image.resize.pro');
    Route::get('/getSubCategoryById',[ProductController::class,'getSubCategoryById'])->name('getSubCategoryById');

    Route::get('/categoryView',[CategoryController::class,'index'])->name('CategoryView');
    Route::get('/CategoryAdd',[CategoryController::class,'create'])->name('CategoryAdd');
    Route::post('/Category',[CategoryController::class, 'show'])->name('image.resize');

    Route::get('/SubCategoryView',[SubCategoryController::class,'index'])->name('SubCategoryView');
    Route::get('/SubCategoryAdd',[SubCategoryController::class,'create'])->name('SubCategoryAdd');
    Route::post('/SubCategory',[SubCategoryController::class, 'show'])->name('image.resize.sub');

    Route::get('/couponView',[CouponController::class,'create'])->name('CouponView');
    Route::get('/couponAdd',[CouponController::class,'index'])->name('CouponAdd');
    Route::post('/couponStore',[CouponController::class,'store'])->name('CouponStore');

    Route::resource('/orders',OrderController::class);
    Route::resource('/payments',PaymentController::class);
    Route::resource('/promotions',PromotionController::class);

    Route::get('/shippingView',[ShippingController::class,'index'])->name('shippingView');
    Route::get('/shippingAdd',[ShippingController::class,'create'])->name('ShippingAdd');
    Route::post('/shippingStore',[ShippingController::class,'store'])->name('ShippingStore');

    Route::get('/aboutView',[AboutAdminController::class,'index'])->name('aboutView');
    Route::get('/aboutAdd',[AboutAdminController::class,'create'])->name('aboutAdd');
    Route::post('/aboutStore',[AboutAdminController::class,'show'])->name('aboutStore');

    Route::get('/faqView',[FaqAdminController::class,'index'])->name('faqView');
    Route::get('/faqAdd',[FaqAdminController::class,'create'])->name('faqAdd');
    Route::post('/faqStore',[FaqAdminController::class,'show'])->name('faqStore');
});

Route::get('/',[HomeController::class,'index'])->name('user.index');

Route::get('/productShow/{product_id}',[ShopPageController::class,'show'])->name('productShow');
Route::get('/product_show/{id}',[ShopPageController::class,'product_show'])->name('product_show');

Route::get('filterAll',[ShopPageController::class,'filterAll'])->name('filter.all');
Route::get('lowToHigh',[ShopPageController::class,'filterLow'])->name('filter.low');
Route::get('highToLow',[ShopPageController::class,'filterHigh'])->name('filter.high');
Route::get('newest',[ShopPageController::class,'filterNewest'])->name('filter.newest');

Route::get('/nursery',[NurseryController::class,'index'])->name('nursery');
Route::get('/loadcart',[AddToCartController::class,'loadCart']);
Route::get('/faq',[FaqController::class,'index'])->name('faq');
Route::get('/account',[AccountController::class,'index'])->name('account');
Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/privacy',[PrivacyController::class,'index'])->name('privacy');
Route::get('/festive',[FestiveController::class,'index'])->name('festive');



Route::middleware('auth')->group(function()
{
    Route::post('/add-to-cart',[AddToCartController::class,'addToCart'])->name('cart.store');
    Route::get('/cartShow',[AddToCartController::class,'cartShow'])->name('cart.show');
    Route::get('/removecart/{id}', [AddToCartController::class, 'removeCart'])->name('cart.remove');
    Route::post('/update_cart', [AddToCartController::class, 'update_cart'])->name('cart.update');
    Route::get('/addwish/{id}',[AddToCartController::class,'addWish'])->name('add.wish');
    Route::get('cart', [AddToCartController::class, 'cartList'])->name('cart.list');

    Route::get('/countryShow',[AddToCartController::class,'show'])->name('countryShow');

    Route::get('/checkout',[PlaceOrderController::class,'index'])->name('checkout');
    Route::post('/check',[PlaceOrderController::class,'saveAddress'])->name('check.fetch');
    Route::post('/shipChange',[PlaceOrderController::class,'shipChange'])->name('update.shipping');

    Route::get('/shippingShow',[ShippingController::class,'frontShow'])->name('shipping.show');

    Route::get('/wishlist/{id}',[WishlistController::class,'index'])->name('wishlistShow');
    Route::get('/wishShow',[WishlistController::class,'wishShow'])->name('wish.show');
    Route::get('/removeWish/{id}', [WishlistController::class, 'removeWishlist'])->name('wish.remove');

});
