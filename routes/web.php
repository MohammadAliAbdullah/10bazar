<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Darryldecode\Cart\Facades\CartFacade as Cart;

use App\Http\Controllers\BkashController;
use App\Http\Controllers\BkashRefundController;
use App\Http\Controllers\BkashPaymentController;
use App\Http\Controllers\SslCommerzPaymentController;

// Clear Cache
Route::get('/clear-cache', function () {
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return redirect()->back();
});

// === Frontend Routes ===
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\CampaignController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\ComplainController;
use App\Http\Controllers\Frontend\Checkoutscontroller;
use App\Http\Controllers\Frontend\CartsController;
use App\Http\Controllers\Frontend\VrfController;
use App\Http\Controllers\Frontend\NewsletterController;
// === Auth Routes ===
use App\Http\Controllers\Mypanel\Auth\LoginController;
use App\Http\Controllers\Mypanel\Auth\RegisterController;
// === Mypanel Group ===
use App\Http\Controllers\Mypanel\Deshboardcontroller;
use App\Http\Controllers\Mypanel\OrderController;
use App\Http\Controllers\Mypanel\ReviewController;
use App\Http\Controllers\Mypanel\AddressController;
use App\Http\Controllers\Mypanel\WalletController;
use App\Http\Controllers\Mypanel\UserController;
use App\Http\Controllers\Mypanel\PasswordController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/today-offer', [HomeController::class, 'today_offer'])->name('today.offer');
Route::get('/newarrival', [CampaignController::class, 'newarrival'])->name('new.arrival');
Route::get('/upcomming', [CampaignController::class, 'upcomming'])->name('up.comming');
Route::get('/campaign', [CampaignController::class, 'campaign'])->name('campaign.index');
Route::get('/campaigns/{slug}', [CampaignController::class, 'campaigns'])->name('campaign.slug');
Route::get('/hotoffer', [CampaignController::class, 'hotoffer'])->name('hotoffer.index');

Route::get('/category/{slug}', [HomeController::class, 'shop_by_category'])->name('category');
Route::get('/shops/{category}/{brand}', [HomeController::class, 'shop_by_shop'])->name('shops');
Route::get('/brands/{slug}', [HomeController::class, 'shop_by_brand'])->name('brands');

Route::get('/filter-products', [HomeController::class, 'filterProducts'])->name('filter.products');
Route::post('/shopfilters', [HomeController::class, 'shopfilters'])->name('shop.filters');

Route::get('/shop', [PagesController::class, 'shop'])->name('shop');
Route::post('/shopfilter', [PagesController::class, 'shopfilter'])->name('shop.filter');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/{slug}', [BlogController::class, 'details'])->name('blog.details');

Route::resource('/complains', ComplainController::class);

Route::get('/contact-us', [PagesController::class, 'contact_us'])->name('contact_us');
Route::get('/brand', [PagesController::class, 'brand'])->name('brand');
Route::get('/warranty-policy', [PagesController::class, 'warranty_policy'])->name('warranty_policy');
Route::get('/terms-conditions', [PagesController::class, 'trams'])->name('trams');
Route::get('/privacy-policy', [PagesController::class, 'privacy'])->name('privacy');

Route::get('/product/{id}', [PagesController::class, 'product_details'])->name('product_details');
Route::get('/quick-view-product/{id}', [PagesController::class, 'product_quick_view_details'])->name('product_quick_view_details');
Route::post('/review', [PagesController::class, 'review_store'])->name('review_store');
Route::get('/track', [PagesController::class, 'track'])->name('track');

Route::post('/search', [HomeController::class, 'search'])->name('search');
Route::get('/vrf', [VrfController::class, 'index'])->name('vrf');

// === Checkout ===
Route::get('/states', [Checkoutscontroller::class, 'states'])->name('states');
Route::get('/cities', [Checkoutscontroller::class, 'cities'])->name('cities');
Route::get('/checkout', [Checkoutscontroller::class, 'checkout'])->name('checkout');
Route::post('/checkout-Store', [Checkoutscontroller::class, 'checkout_store'])->name('checkout_store');
Route::post('/transaction_fee', [Checkoutscontroller::class, 'transaction_fee'])->name('transaction_fee');
Route::post('/coupon', [Checkoutscontroller::class, 'coupon'])->name('coupon');

// === Cart ===
Route::post('/add-to-cart', [CartsController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/update-quantity', [CartsController::class, 'updateQuantity'])->name('cart.update');
Route::post('/cart/remove', [CartsController::class, 'removeItem'])->name('cart.remove');
Route::get('/cart/list', [CartsController::class, 'headerCartList'])->name('headerCart.list');

Route::post('/add', [CartsController::class, 'add'])->name('cart.Store');
Route::get('/cart', [CartsController::class, 'cart'])->name('cart.list');
Route::post('/update', [CartsController::class, 'update'])->name('update.cart');
Route::post('/clear', [CartsController::class, 'clear'])->name('cart.clear');

// === SSLCOMMERZ ===
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [OrderController::class, 'store']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

// === Pages ===
Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
Route::get('/about-us', [PagesController::class, 'about_us'])->name('about.us');
Route::get('/page/{slug}', [PagesController::class, 'page']);
Route::resource('/newsletter', NewsletterController::class);

// === Bkash ===
Route::get('/bkash', fn() => view('bkash'));
Route::get('/bkash/callback', function () {
    $paymentId = session('payment_id');
    if ($paymentId) {
        $bkashService = new \App\Services\BkashPaymentService();
        $result = $bkashService->executePayment($paymentId);
        dd($result);
    }
    return redirect('/bkash')->with('error', 'Payment ID not found.');
});
Route::post('/bkash/create', [BkashPaymentController::class, 'create'])->name('bkash.create');
Route::post('/bkash/execute', [BkashPaymentController::class, 'execute']);

// === Language & Currency Switch ===
Route::get('/lang-switch', function (\Illuminate\Http\Request $request) {
    session(['locale' => $request->lang]);
    app()->setLocale($request->lang);
    return back();
})->name('lang.switch');

Route::get('/currency-switch', function (\Illuminate\Http\Request $request) {
    session(['currency_id' => $request->currency]);
    Cart::clear();
    return back();
})->name('currency.switch');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/registration', [RegisterController::class, 'showLoginForm'])->name('register.user');

Route::prefix('/mypanel')->name('mypanel.')->group(function () {
    Route::namespace('Auth')->group(function () {
        Route::post('/login', [LoginController::class, 'login'])->name("loginuser");
        Route::post('/register', [RegisterController::class, 'create'])->name('register_user');
        Route::get('/logout', [LoginController::class, 'logout'])->name('elogout');
    });

    Route::middleware(['mypanel'])->group(function () {
        Route::get('/', [Deshboardcontroller::class, 'index'])->name('users');
        Route::resource('/morder', OrderController::class);
        Route::get('/invoice/{invoice_no}', [OrderController::class, 'invoice'])->name('minvoice.index');
        Route::resource('/mreview', ReviewController::class);
        Route::resource('/maddress', AddressController::class);
        Route::resource('/mwallet', WalletController::class);
        Route::resource('/profile', UserController::class);
        Route::resource('/password', PasswordController::class);
    });
});
// live chat
Route::get('/chat', function () {
    // dd(env('OPENAI_API_KEY'));
    // return env('OPENAI_API_KEY') ? 'Key exists' : 'Key missing';
    return view('chat');
});

Route::post('/chat-message', [App\Http\Controllers\ChatController::class, 'handle']);
// === Admin Panel Routes ===
require __DIR__ . '/admin.php';