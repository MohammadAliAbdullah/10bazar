<?php

use App\Http\Controllers\BkashController;
use App\Http\Controllers\BkashRefundController;
use App\Http\Controllers\BkashPaymentController;

use Illuminate\Support\Facades\Route;

Route::get('/clear-cache', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return redirect()->back();
});
// Front end routes
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home.index'); // -- done
Route::get('/today-offer', [App\Http\Controllers\Frontend\HomeController::class, 'today_offer'])->name('today.offer'); // -- done
Route::get('/newarrival', [App\Http\Controllers\Frontend\CampaignController::class, 'newarrival'])->name('new.arrival'); // -- done
Route::get('/upcomming', [App\Http\Controllers\Frontend\CampaignController::class, 'upcomming'])->name('up.comming'); // -- done
Route::get('/campaign', [App\Http\Controllers\Frontend\CampaignController::class, 'campaign'])->name('campaign.index');
Route::get('/campaigns/{slug}', [App\Http\Controllers\Frontend\CampaignController::class, 'campaigns'])->name('campaign.slug');
Route::get('/hotoffer', [App\Http\Controllers\Frontend\CampaignController::class, 'hotoffer'])->name('hotoffer.index'); // -- done
//Route::get('/login', [App\Http\Controllers\Frontend\HomeController::class, 'login'])->name('login');
//Route::get('/register', [App\Http\Controllers\Frontend\HomeController::class, 'register'])->name('register');
Route::get('/category/{slug}', [App\Http\Controllers\Frontend\HomeController::class, 'shop_by_category'])->name('category'); // -- done
Route::get('/shops/{category}/{brand}/', [App\Http\Controllers\Frontend\HomeController::class, 'shop_by_shop'])->name('shops'); // -- done
// Route::get('/collection/{category}/{value}/', [App\Http\Controllers\Frontend\HomeController::class, 'collection'])->name('collection'); // commit by abdullah 18-05-2025
// Route::get('/price/{category}/{slug}', [App\Http\Controllers\Frontend\HomeController::class, 'price'])->name('price'); // commit by abdullah 18-05-2025
Route::get('/brands/{slug}', [App\Http\Controllers\Frontend\HomeController::class, 'shop_by_brand'])->name('brands'); // -- done

// filter product
Route::get('/filter-products', [App\Http\Controllers\Frontend\HomeController::class, 'filterProducts'])->name('filter.products');
Route::post('/shopfilters', [App\Http\Controllers\Frontend\HomeController::class, 'shopfilters'])->name('shop.filters');
Route::get('/shop', [App\Http\Controllers\Frontend\PagesController::class, 'shop'])->name('shop'); // -- done
Route::post('/shopfilter', [App\Http\Controllers\Frontend\PagesController::class, 'shopfilter'])->name('shop.filter'); // -- done
//blog
Route::get('/blog', [App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/{slug}', [App\Http\Controllers\Frontend\BlogController::class, 'details'])->name('blog.details');
// Route::get('/deals', [App\Http\Controllers\Frontend\PagesController::class, 'deals'])->name('deals');
Route::resource('/complains', 'App\Http\Controllers\Frontend\ComplainController');
Route::get('/contact-us', [App\Http\Controllers\Frontend\PagesController::class, 'contact_us'])->name('contact_us'); // -- done
Route::get('/brand', [App\Http\Controllers\Frontend\PagesController::class, 'brand'])->name('brand'); // -- done
Route::get('/warranty-policy', [App\Http\Controllers\Frontend\PagesController::class, 'warranty_policy'])->name('warranty_policy'); // -- done
Route::get('/terms-conditions', [App\Http\Controllers\Frontend\PagesController::class, 'trams'])->name('trams');
Route::get('/privacy-policy', [App\Http\Controllers\Frontend\PagesController::class, 'privacy'])->name('privacy'); // -- done
Route::get('/product/{id}', [App\Http\Controllers\Frontend\PagesController::class, 'product_details'])->name('product_details'); // -- done
Route::get('/quick-view-product/{id}', [App\Http\Controllers\Frontend\PagesController::class, 'product_quick_view_details'])->name('product_quick_view_details');
Route::post('/review', [App\Http\Controllers\Frontend\PagesController::class, 'review_store'])->name('review_store');
Route::get('/track', [App\Http\Controllers\Frontend\PagesController::class, 'track'])->name('track'); // -- done
Route::post('/search', [App\Http\Controllers\Frontend\HomeController::class, 'search'])->name('search');
//VRF
Route::get('/vrf', [App\Http\Controllers\Frontend\VrfController::class, 'index'])->name('vrf');
//Checkout
Route::get('/areas', [App\Http\Controllers\Frontend\Checkoutscontroller::class, 'areas'])->name('areas');
Route::get('/checkout', [App\Http\Controllers\Frontend\Checkoutscontroller::class, 'checkout'])->name('checkout');
Route::post('/checkout-Store', [App\Http\Controllers\Frontend\Checkoutscontroller::class, 'checkout_store'])->name('checkout_store');
Route::post('/transaction_fee', [App\Http\Controllers\Frontend\Checkoutscontroller::class, 'transaction_fee'])->name('transaction_fee');
Route::post('/coupon', [App\Http\Controllers\Frontend\Checkoutscontroller::class, 'coupon'])->name('coupon');

// cart updated by abdullah
Route::post('/add-to-cart', [App\Http\Controllers\Frontend\CartsController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update-quantity', [App\Http\Controllers\Frontend\CartsController::class, 'updateQuantity'])->name('cart.update');
Route::post('/cart/remove', [App\Http\Controllers\Frontend\CartsController::class, 'removeItem'])->name('cart.remove');
Route::get('/cart/list', [App\Http\Controllers\Frontend\CartsController::class, 'headerCartList'])->name('headerCart.list');
// 
Route::post('/add', [App\Http\Controllers\Frontend\CartsController::class, 'add'])->name('cart.Store');
Route::get('/cart', [App\Http\Controllers\Frontend\CartsController::class, 'cart'])->name('cart.list');
Route::post('/update', [App\Http\Controllers\Frontend\CartsController::class, 'update'])->name('update.cart');
//Route::post('/remove', [App\Http\Controllers\Frontend\CartsController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\Frontend\CartsController::class, 'clear'])->name('cart.clear');
//Route::get('/add-to-cart/{id}', [App\Http\Controllers\Frontend\CartsController::class, 'addtocart'])->name('addtocart');
//Route::post('/cart-update/', [App\Http\Controllers\Frontend\CartsController::class, 'cart_update'])->name('cart_update');
//Route::get('/cart', [App\Http\Controllers\Frontend\CartsController::class, 'cart'])->name('cart');
// Route::get('/remove/{id}', [App\Http\Controllers\Frontend\CartsController::class, 'remove'])->name('cart.remove');

// SSLCOMMERZ Start
//Route::get('/example1', [App\Http\Controllers\SslCommerzPaymentController::class, 'exampleEasyCheckout']);
//Route::get('/example2', [App\Http\Controllers\SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [App\Http\Controllers\Mypanel\OrderController::class, 'store']);
//Route::post('/pay-via-ajax', [App\Http\Controllers\SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [App\Http\Controllers\SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [App\Http\Controllers\SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [App\Http\Controllers\SslCommerzPaymentController::class, 'cancel']);
Route::post('/ipn', [App\Http\Controllers\SslCommerzPaymentController::class, 'ipn']);
//Page
Route::get('/faq', [App\Http\Controllers\Frontend\PagesController::class, 'faq'])->name('faq'); // -- done
Route::get('/about-us', [App\Http\Controllers\Frontend\PagesController::class, 'about_us'])->name('about.us'); // -- done
Route::get('/contact-us', [App\Http\Controllers\Frontend\PagesController::class, 'contact_us'])->name('contact.us'); // -- done
Route::get('/page/{slug}', [App\Http\Controllers\Frontend\PagesController::class, 'page']); // -- done
Route::resource('/newsletter','\App\Http\Controllers\Frontend\NewsletterController'); // -- done

//SSLCOMMERZ END
Route::get('/login', [App\Http\Controllers\Mypanel\Auth\LoginController::class, 'showLoginForm'])->name('login'); // -- done
Route::get('/registration', [App\Http\Controllers\Mypanel\Auth\RegisterController::class, 'showLoginForm'])->name('register.user'); // -- done

Route::prefix('/mypanel')->name('mypanel.')->namespace('Mypanel')->group(function () {
    Route::namespace('Auth')->group(function () {
        //Login Routes
        //Route::get('/userpanel',[App\Http\Controllers\Mypanel\UserController::class, 'index'])->name('index');
        Route::post('/login', [App\Http\Controllers\Mypanel\Auth\LoginController::class, 'login'])->name("loginuser");
        Route::post('/register', [App\Http\Controllers\Mypanel\Auth\RegisterController::class, 'create'])->name('register_user');
        Route::get('/logout', [App\Http\Controllers\Mypanel\Auth\LoginController::class, 'logout'])->name('elogout');
    });
    Route::group(['middleware' => 'mypanel'], function () {
        Route::get('/', [App\Http\Controllers\Mypanel\Deshboardcontroller::class, 'index'])->name('users');
        Route::resource('/morder', '\App\Http\Controllers\Mypanel\OrderController');
        Route::get('/invoice/{invoice_no}', [App\Http\Controllers\Mypanel\OrderController::class, 'invoice'])->name('minvoice.index');
        Route::resource('/mreview', '\App\Http\Controllers\Mypanel\ReviewController');
        Route::resource('/maddress', '\App\Http\Controllers\Mypanel\AddressController');
        Route::resource('/mwallet', '\App\Http\Controllers\Mypanel\WalletController');
        Route::resource('/profile', '\App\Http\Controllers\Mypanel\UserController');
        Route::resource('/password', '\App\Http\Controllers\Mypanel\PasswordController');
    });
});

Route::get('/bkash', function () {
    return view('bkash');
});

Route::get('/bkash/callback', function () {
    $paymentId = session('payment_id');

    if ($paymentId) {
        $bkashService = new \App\Services\BkashPaymentService();
        $result = $bkashService->executePayment($paymentId);
        dd($result); // or redirect with a message
    }

    return redirect('/bkash')->with('error', 'Payment ID not found.');
});

Route::post('/bkash/create', [BkashPaymentController::class, 'create'])->name('bkash.create');
Route::post('/bkash/execute', [BkashPaymentController::class, 'execute']);
// language change

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

Route::get('/lang', function () {
    $today = \Carbon\Carbon::now()
        ->settings(
            [
                'locale' => app()->getLocale(),
            ]
        );

    // LL is macro placeholder for MMMM D, YYYY (you could write same as dddd, MMMM D, YYYY)
    $dateMessage = $today->isoFormat('dddd, LL');

    return view('language', [
        'date_message' => $dateMessage
    ]);
});

Route::get('/lang-switch', function (\Illuminate\Http\Request $request) {
    session(['locale' => $request->lang]);
    app()->setLocale($request->lang);
    return back();
})->name('lang.switch');

// Route::get('/lang', function () {
//     return view('language');
// });
// Route::get('/lang/{locale}', function ($locale) {
//     if (in_array($locale, ['en', 'bn'])) {
//         session(['locale' => $locale]);
//     }
//     return redirect()->back();
// });

//admin panel
require __DIR__ . '/admin.php';
