<?php

use App\Http\Controllers\AboutAdminController;
use App\Http\Controllers\ArticleAdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BillingAddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactAdminController;
use App\Http\Controllers\AdminCouponController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ShopPageController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqAdminController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FestiveController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\NurseryController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\PlaceOrderController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;



require __DIR__ . '/auth.php';



Route::get('/admin/login',[AdminAuthController::class,'index'])->name('admin.login');
Route::post('/admin/login',[AdminAuthController::class,'store'])->name('admin.login');

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function(){
Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('dashboard');

Route::get('/search','ProductDetailsController@search');
Route::get('get-all-products',[PDFController::class,'getAllproducts']);
Route::get('get-all-orders',[PDFController::class,'getAllorders']);
Route::get('/download-pdf',[PDFController::class,'downloadPDF'])->name('download-pdf');
Route::get('/download-pdf1',[PDFController::class,'downloadPDF1'])->name('download-pdf1');
Route::get('/download-pdf2',[PDFController::class,'downloadPDF2'])->name('download-pdf2');

Route::get('file-export', [ProductController::class, 'fileExport'])->name('file-export');

Route::get('file-export1', [ProductController::class, 'fileExport1'])->name('file-export1');
Route::get('file-export2', [ProductController::class, 'fileExport2'])->name('file-export2');


    // Route::resource('/orders',AdminOrderController::class);
    Route::get('/orders',[AdminOrderController::class,'index'])->name('orders');
    Route::get('/productView',[ProductController::class,'index'])->name('productView');
    Route::get('/productAdd',[ProductController::class,'create'])->name('productAdd');
    Route::post('/productStore',[ProductController::class,'store'])->name('image.resize.pro');
    Route::get('/stockView',[ProductController::class,'stockView'])->name('stockView');
    Route::get('/stockAdd',[ProductController::class,'stockAdd'])->name('stockAdd');
    Route::post('/stockStore',[ProductController::class,'stockStore'])->name('stockStore');
    Route::get('/getSubCategoryById',[ProductController::class,'getSubCategoryById'])->name('getSubCategoryById');
    Route::get('/orderDetails/{id}',[AdminOrderController::class,'orderDetails'])->name('orderDetails');

    Route::post('/validate_form', [AdminOrderController::class, 'validate_form'])->name('order.validate_form')->middleware('signed');
    Route::resource('order', AdminOrderController::class)->names([
        'store' => 'order.store'
    ])->middleware('signed');


    // Route::get('/download-pdf2',[AdminOrderController::class,'downloadPDF2']);

    Route::get('/import-form',[ProductController::class,'importForm'])->name('importForm');
    Route::post('/import',[ProductController::class,'import'])->name('import');

    Route::get('/editProduct/{id}',function($id){
        $prod = DB::table('products')->select('id','product_name','Product_Description','Product_Dimension','Price','Weight','Quantity','sale','new','popular_products','discount')->where('id','=',$id)->get();
        return view('Admin.Product.product_edit',['prod'=>$prod]);
    })->name('edit.product');

    Route::post('/updateProduct/{id}',[ProductController::class,'updateProduct'])->name('update.prod');

    Route::get('/editStock/{id}',function($id){
        $stock = DB::table('stocks')->select('id','stock_available')->where('id','=',$id)->get();
        return view('Admin.Stock.stockEdit',['stock'=>$stock]);
    })->name('edit.stock');

    Route::post('/updateStock/{id}',[ProductController::class,'updateStock'])->name('update.stock');

    Route::get('/categoryView',[CategoryController::class,'index'])->name('CategoryView');
    Route::get('/CategoryAdd',[CategoryController::class,'create'])->name('CategoryAdd');
    Route::post('/Category',[CategoryController::class, 'show'])->name('image.resize');

    Route::get('/editCategory/{id}',function($id){
        $data = DB::table('categories')->select('id','Category_Name')->where('id','=',$id)->get();
        return view('Admin.Category.category_edit',['data'=>$data]);
    })->name('edit.cate');
    Route::post('/updateCate/{id}',[CategoryController::class,'update'])->name('update.cate');

    Route::get('/SubCategoryView',[SubCategoryController::class,'index'])->name('SubCategoryView');
    Route::get('/SubCategoryAdd',[SubCategoryController::class,'create'])->name('SubCategoryAdd');
    Route::post('/SubCategory',[SubCategoryController::class, 'show'])->name('image.resize.sub');

    Route::get('/editSubcategory/{sub_id}',function($id){
        $sub = DB::table('subcategories')->select('id','SubCategory_Name')->where('id','=',$id)->get();
        return view('Admin.SubCategory.subcategory_edit',['sub'=>$sub]);
    })->name('edit.sub');

    Route::post('/updateSubCate/{id}',[SubCategoryController::class,'updateSub'])->name('update.Subcate');


    Route::get('/couponView',[AdminCouponController::class,'create'])->name('CouponView');
    Route::get('/couponAdd',[AdminCouponController::class,'index'])->name('CouponAdd');
    Route::post('/couponStore',[AdminCouponController::class,'store'])->name('CouponStore');
    Route::get('/delete-coupon/{id}', [AdminCouponController::class, 'delete'])->name('Coupon-Delete');
    // Route::resource('/orders',AdminOrderController::class);
    // Route::get('/orderDetails',[OrderController::class,'show_order_details'])->name('show_order_details');
    Route::resource('/payments',PaymentController::class);

    Route::get('/promotionView',[PromotionController::class,'index'])->name('promotionView');
    Route::get('/promotionAdd',[PromotionController::class,'create'])->name('promotionAdd');
    Route::post('promotionStore',[PromotionController::class,'store'])->name('promotionStore');
    Route::get('/editPromotion/{id}',function($id){
        $promo = DB::table('promotions')->select('id','banner','form_description')->where('id','=',$id)->get();
        return view('Admin.Promotion.promotion_edit',['promo'=>$promo]);
    })->name('edit.promotion');

    Route::post('/updatePromotion/{id}',[PromotionController::class,'updatePromotion'])->name('update.promo');
    Route::get('/shippingView',[ShippingController::class,'index'])->name('shippingView');
    Route::get('/shippingAdd',[ShippingController::class,'create'])->name('ShippingAdd');
    Route::post('/shippingStore',[ShippingController::class,'store'])->name('ShippingStore');

    Route::get('/aboutView',[AboutAdminController::class,'index'])->name('aboutView');
    Route::get('/aboutAdd',[AboutAdminController::class,'create'])->name('aboutAdd');
    Route::post('/aboutStore',[AboutAdminController::class,'show'])->name('aboutStore');

    Route::get('/editAbout/{id}',function($id){
        $about = DB::table('about_us')->select('id','Title','Description')->where('id','=',$id)->get();
        return view('Admin.About Us.aboutEdit',['about'=>$about]);
    })->name('edit.about');

    Route::post('/updateAbout/{id}',[AboutAdminController::class,'updateAbout'])->name('update.about');

    Route::get('/articleView',[ArticleAdminController::class,'index'])->name('articleView');
    Route::get('/articleAdd',[ArticleAdminController::class,'create'])->name('articleAdd');
    Route::post('/articleStore',[ArticleAdminController::class,'show'])->name('articleStore');

    Route::get('/editArticle/{id}',function($id){
        $article = DB::table('articles')->select('id','Title','Description')->where('id','=',$id)->get();
        return view('Admin.Article.articleEdit',['article'=>$article]);
    })->name('edit.article');

    Route::post('/updateArticle/{id}',[ArticleAdminController::class,'updateArticle'])->name('update.article');


    Route::get('/contactViews',[ContactAdminController::class,'index'])->name('contactViews');
    Route::get('/contactAdd',[ContactAdminController::class,'create'])->name('contactAdd');
    Route::post('/contactStore',[ContactAdminController::class,'show'])->name('contactStore');

    Route::get('/editContact/{id}',function($id){
        $contact = DB::table('contact_us')->select('id','Address','Email_Id','Phone_No')->where('id','=',$id)->get();
        return view('Admin.Contact Us.contactEdit',['contact'=>$contact]);
    })->name('edit.contact');

    Route::post('/updateContact/{id}',[ContactAdminController::class,'updateContact'])->name('update.contact');


    Route::get('/faqView',[FaqAdminController::class,'index'])->name('faqView');
    Route::get('/faqAdd',[FaqAdminController::class,'create'])->name('faqAdd');
    Route::post('/faqStore',[FaqAdminController::class,'show'])->name('faqStore');

    Route::get('/editFaq/{id}',function($id){
        $faq = DB::table('f_a_q_s')->select('id','Question','Answer')->where('id','=',$id)->get();
        return view('Admin.FAQ.faqEdit',['faq'=>$faq]);
    })->name('edit.faq');

    Route::post('/updateFaq/{id}',[FAQController::class,'updateFaq'])->name('update.Faq');


    Route::get('/contactView',[ContactController::class,'show'])->name('contactView');
    Route::get('/contactSearch',[ContactController::class,'showSearch'])->name('show');

    Route::get('/testimonialView',[TestimonialController::class,'show'])->name('testimonialView');
    Route::get('/testimonialCreate',[TestimonialController::class,'create'])->name('testimonialCreate');
    Route::post('/testimonialStore',[TestimonialController::class,'store'])->name('testimonialStore');
    Route::get('/editTestimonial/{id}',function($id){
        $test = DB::table('testimonials')->select('id','name','review')->where('id','=',$id)->get();
        return view('Admin.Testimonial.testimonialEdit',['test'=>$test]);

    })->name('edit.testimonial');
    Route::post('/updateTestimonial/{id}',[TestimonialController::class,'updateTestimonial'])->name('update.Testimonial');
});


// Route::get('/search','ProductDetailsController@search');
// Route::get('get-all-products',[PDFController::class,'getAllproducts']);
// Route::get('/download-pdf',[PDFController::class,'downloadPDF']);

Route::get('/',[HomeController::class,'index'])->name('user.index');
Route::get('/search/',[HomeController::class,'search'])->name('search');
// Route::get('/',[HomeController::class,'coupon'])->name('user.index');

Route::get('/productShow/{product_id}',[ShopPageController::class,'show'])->name('productShow');
Route::get('/shop/{id}',[ShopPageController::class,'shop'])->name('shop');
Route::get('/getPrice',[ShopPageController::class,'filter'])->name('get.price');
Route::get('/getPrice',[ShopPageController::class,'filters'])->name('get.price');
Route::get('/nursery',[NurseryController::class,'index'])->name('nursery');
Route::get('/loadcart',[AddToCartController::class,'loadCart']);
Route::get('/faq',[FaqController::class,'index'])->name('faq');
Route::get('/term',[FaqController::class,'term'])->name('term.condition');
// Route::get('/account',[AccountController::class,'index'])->name('account');
Route::post('/accountUpdate',[AccountController::class,'store'])->name('update.address');
Route::get('/about',[AboutController::class,'index'])->name('about.index');
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/news',[NewsController::class,'index'])->name('news.index');
Route::get('/newsDetails',[NewsController::class,'show'])->name('newsDetails.show');

Route::post('/submitContact',[ContactController::class,'save'])->name('contact.save');
Route::get('/privacy',[PrivacyController::class,'index'])->name('privacy');
Route::get('/festive',[FestiveController::class,'index'])->name('festive');
Route::get('/promotion',[ShopPageController::class,'promotion'])->name('promotion');



Route::middleware('auth')->group(function()
{
    Route::post('/add-to-cart',[AddToCartController::class,'addToCart'])->name('cart.store');
    Route::get('/cartShow',[AddToCartController::class,'cartShow'])->name('cart.show');
    Route::get('/removecart/{id}', [AddToCartController::class, 'removeCart'])->name('cart.remove');
    Route::post('/update_cart', [AddToCartController::class, 'update_cart'])->name('cart.update');
    Route::get('/addwish/{id}',[AddToCartController::class,'addWish'])->name('add.wish');
    Route::get('cart', [AddToCartController::class, 'cartList'])->name('cart.list');
    Route::get('/account',[AccountController::class,'index'])->name('account');

    Route::get('/countryShow',[AddToCartController::class,'show'])->name('countryShow');

    Route::get('/checkout',[PlaceOrderController::class,'index'])->name('checkout');
    Route::post('/check',[PlaceOrderController::class,'saveAddress'])->name('check.fetch');
    Route::get('/address',[PlaceOrderController::class,'addresShow'])->name('address.show');
    Route::post('/shipChange',[PlaceOrderController::class,'shipChange'])->name('update.shipping');
    Route::get('/payment',[PlaceOrderController::class,'showPayment'])->name('show.payment');

    Route::get('/shippingShow',[ShippingController::class,'frontShow'])->name('shipping.show');

    Route::get('/wishlist/{id}',[WishlistController::class,'index'])->name('wishlistShow');
    Route::get('/wishShow',[WishlistController::class,'wishShow'])->name('wish.show');
    Route::get('/removeWish/{id}', [WishlistController::class, 'removeWishlist'])->name('wish.remove');

    Route::get('/confirmPayment',[PlaceOrderController::class,'confirmPayment'])->name('confirm.payment');

    Route::get('paymentPal',[PaypalController::class,'payment'])->name('payment.Paypal');
    Route::post('payment/success', [PaypalController::class,'success'])->name('payment.success');
    Route::get('cancel',[PaypalController::class,'cancel'])->name('payment.cancel');

    Route::get('/payment/create',[PaypalController::class,'create_Payment'])->name('create_Payment.paypal');

    Route::post('/place-order',[PaypalController::class,'PlaceOrder'])->name('place-order');

    Route::resource('order', OrderController::class)->names([
        'store' => 'order.store'
    ])->middleware('signed');

    Route::resource('coupon', CouponController::class)->names([
        'store' => 'coupon.store'
    ])->middleware('signed');

    Route::post('/apply-coupon',[CouponController::class,'store'])->name('apply-coupon');
    

});
