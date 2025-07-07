<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bkash' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o1EOc07hFhQqVHF5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/createpayment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'createpayment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/executepayment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'executepayment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dSTNVz1xkfhaqUPz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1umV2jQcJfg2RjvG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/today-offer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'today.offer',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/newarrival' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'new.arrival',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/upcomming' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'up.comming',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/campaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'campaign.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/hotoffer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'hotoffer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/filter-products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'filter.products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shopfilters' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.filters',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shop' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/shopfilter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shop.filter',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/complains' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'complains.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'complains.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/complains/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'complains.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact_us',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/warranty-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warranty_policy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms-conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'trams',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'review_store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/track' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'track',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vrf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vrf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'states',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout-Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkout_store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transaction_fee' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transaction_fee',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupon',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-to-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/update-quantity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'headerCart.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.Store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.cart',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cart.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/example1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6MvElyBaXT1wrVfg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/example2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PIYbYVK7FKSuijjg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m2jnAqDNZKbuj7mz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pay-via-ajax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Luuvi9LfiDgyXzX1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1BFO0Zx8oqGFLVv2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0uxF2W7F5DxNXRhG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jJy8WGqsY6M2miAd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ipn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oTsnVKN6w3xNmJcD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.us',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/newsletter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/newsletter/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bkash/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uqt8JmzCywNd3UUC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bkash/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bkash.create',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bkash/execute' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nYR5SJOrBIlBdqIE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/lang-switch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'lang.switch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/currency-switch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currency.switch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register.user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.loginuser',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.register_user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.elogout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/morder' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.morder.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.morder.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/morder/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.morder.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/mreview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mreview.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mreview.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/mreview/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mreview.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/maddress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.maddress.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.maddress.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/maddress/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.maddress.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/mwallet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mwallet.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mwallet.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/mwallet/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mwallet.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.profile.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.profile.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/profile/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.profile.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.password.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mypanel/password/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.password.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zj4EHWEkt0VUW8qG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/chat-message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::21G787OOmSgXBm0l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.generated::L54GdyoteCx1Hjkj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/adminmenu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminmenu.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminmenu.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/adminmenu/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminmenu.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/adminuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminuser.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminuser.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/adminuser/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminuser.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/units' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.units.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.units.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/units/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.units.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/attributes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.attributes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.attributes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/attributes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.attributes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/brands' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.brands.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.brands.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/brands/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.brands.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/spacial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.spacial.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/regular' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.regular.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/change_sub_category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.change_sub_category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.tags',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/bercode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.bercode.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.bercode.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/bercode/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.bercode.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/autocompleteproduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.autocomplete.product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.purchases.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.purchases.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/purchases/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.purchases.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/get_sku_item/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.get_sku_item',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/get_price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.get_price',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/get_supplier/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.get_supplier',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/suppliers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.suppliers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.suppliers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/suppliers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.suppliers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.stock.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/stock/low' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.stock.low',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/stock/sold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.stock.sold',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/adjustment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.stock.adjustment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/adjustment/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adjustment.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/adjustment/sku' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.get_adjustment_sku',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/adjustment/qty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.get_adjustment_qty',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/adjustment/Store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adjustment.Store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/slides' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.slides.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.slides.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/slides/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.slides.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.blogs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.blogs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/blogs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.blogs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.faqs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.faqs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/faqs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.faqs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/pages' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.pages.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.pages.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/pages/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.pages.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/banners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.banners.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.banners.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/banners/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.banners.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/vouchers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.vouchers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.vouchers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/vouchers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.vouchers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/flashdealadmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.flashdealadmin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.flashdealadmin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/flashdealadmin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.flashdealadmin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/get_product_id/id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.get_product_id',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/get_voucher_product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.get_voucher_product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/discounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.discounts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.discounts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/discounts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.discounts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/get_discount_product_id' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.get_discount_product_id',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/testimonials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.testimonials.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.testimonials.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/testimonials/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.testimonials.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/couriers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.couriers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.couriers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/couriers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.couriers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/paymentgetway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentgetway.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentgetway.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/paymentgetway/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentgetway.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/contactinfo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contactinfo.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contactinfo.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/contactinfo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contactinfo.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/logofavs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.logofavs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.logofavs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/logofavs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.logofavs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contacts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contacts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/contacts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contacts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/seoconfigs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.seoconfigs.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.seoconfigs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/seoconfigs/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.seoconfigs.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/socialmedia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.socialmedia.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.socialmedia.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/socialmedia/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.socialmedia.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/aboutadmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.aboutadmin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.aboutadmin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/aboutadmin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.aboutadmin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/customeradmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.customeradmin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.customeradmin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/customeradmin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.customeradmin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/newsletteradmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.newsletteradmin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.newsletteradmin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/newsletteradmin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.newsletteradmin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/local-sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.local-sale.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.local-sale.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/local-sale/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.local-sale.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.review_index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/orderadmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderadmin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderadmin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/orderadmin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderadmin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orders.pending',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/complete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orders.complete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/due' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orders.due',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/paid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orders.paid',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/orderreturn' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderreturn.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderreturn.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/orderreturn/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderreturn.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/complainadmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.complainadmin.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.complainadmin.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/complainadmin/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.complainadmin.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/pendings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.complainadmin.pendings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/completes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.complainadmin.completes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/servicing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.servicing.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.servicing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/servicing/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.servicing.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.store.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.store.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/store/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.store.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/tutorial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.tutorial.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.tutorial.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/tutorial/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.tutorial.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/smscampaign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smscampaign.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smscampaign.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/smscampaign/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smscampaign.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/smstemplete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smstemplete.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smstemplete.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/smstemplete/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smstemplete.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/smslog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smslog.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smslog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/smslog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smslog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/salesreports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.sales.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/stockreports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.stock.reports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/visitors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.visitors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/app-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.appsetting.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.appsetting.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.currency.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.currency.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/currency/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.currency.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/payment-method' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentmethod.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentmethod.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/payment-method/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentmethod.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/payment-setup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentsetup.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentsetup.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/payment-setup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentsetup.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/sms-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smsconfig.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smsconfig.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/mail-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.mailconfig.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.mailconfig.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/lang' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.lang.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/coupon-types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.type.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/coupon-type/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.type.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/coupon-type/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.type.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/coupon-type/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.type.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/coupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/coupon/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.add',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/coupon/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/coupon/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.states.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.states.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/states/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.states.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.cities.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.cities.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/cities/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.cities.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/shipping-zones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zones.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zones.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/shipping-zones/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zones.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/shipping-zone-locations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zone-locations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zone-locations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/shipping-zone-locations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zone-locations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/shipping-methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-methods.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-methods.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/myadminpanel/shipping-methods/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-methods.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/applay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'applay',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/toggle-sidebar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'toggle.sidebar',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/(?|c(?|lockwork/([^/]++)(*:42)|ache/([^/]++)(?:/([^/]++))?(*:76))|telescope/([^/]++)(*:102))|/c(?|a(?|mpaigns/([^/]++)(*:136)|tegory/([^/]++)(*:159))|omplains/([^/]++)(?|(*:188)|/edit(*:201)|(*:209)))|/shops/([^/]++)/([^/]++)(*:243)|/b(?|rands/([^/]++)(*:270)|logs/([^/]++)(*:291))|/p(?|roduct/([^/]++)(*:320)|age/([^/]++)(*:340))|/quick\\-view\\-product/([^/]++)(*:379)|/newsletter/([^/]++)(?|(*:410)|/edit(*:423)|(*:431))|/my(?|panel/(?|m(?|order/([^/]++)(?|(*:476)|/edit(*:489)|(*:497))|review/([^/]++)(?|(*:524)|/edit(*:537)|(*:545))|address/([^/]++)(?|(*:573)|/edit(*:586)|(*:594))|wallet/([^/]++)(?|(*:621)|/edit(*:634)|(*:642)))|invoice/([^/]++)(*:668)|p(?|rofile/([^/]++)(?|(*:698)|/edit(*:711)|(*:719))|assword/([^/]++)(?|(*:747)|/edit(*:760)|(*:768))))|adminpanel/(?|a(?|d(?|min(?|menu/([^/]++)(?|(*:823)|/edit(*:836)|(*:844))|user/([^/]++)(?|(*:869)|/edit(*:882)|(*:890)))|justment/(?|edit/([^/]++)(*:925)|store/([^/]++)(*:947)))|ttributes/([^/]++)(?|(*:978)|/edit(*:991)|(*:999))|boutadmin/([^/]++)(?|(*:1029)|/edit(*:1043)|(*:1052)))|units/([^/]++)(?|(*:1080)|/edit(*:1094)|(*:1103))|b(?|rands/([^/]++)(?|(*:1134)|/edit(*:1148)|(*:1157))|ercode/([^/]++)(?|(*:1185)|/edit(*:1199)|(*:1208))|logs/([^/]++)(?|(*:1234)|/edit(*:1248)|(*:1257))|anners/([^/]++)(?|(*:1285)|/edit(*:1299)|(*:1308)))|c(?|ategories/([^/]++)(?|(*:1344)|/edit(*:1358)|(*:1367))|o(?|u(?|riers/([^/]++)(?|(*:1402)|/edit(*:1416)|(*:1425))|pon(?|\\-type/(?|edit/([^/]++)(*:1464)|update/([^/]++)(*:1488))|/(?|edit/([^/]++)(*:1515)|update/([^/]++)(*:1539))))|ntact(?|info/([^/]++)(?|(*:1575)|/edit(*:1589)|(*:1598))|s/([^/]++)(?|(*:1621)|/edit(*:1635)|(*:1644)))|mplainadmin/([^/]++)(?|(*:1678)|/edit(*:1692)|(*:1701)))|u(?|stomeradmin/([^/]++)(?|(*:1739)|/edit(*:1753)|(*:1762))|rrency/(?|edit/([^/]++)(*:1795)|update/([^/]++)(*:1819)|delete/([^/]++)(*:1843)))|halan/([^/]++)(*:1868)|ities/([^/]++)(?|(*:1894)|/edit(*:1908)|(*:1917)))|p(?|roducts/([^/]++)(?|(*:1951)|/edit(*:1965)|(*:1974))|urchases/([^/]++)(?|(*:2004)|/edit(*:2018)|(*:2027))|a(?|ges/([^/]++)(?|(*:2056)|/edit(*:2070)|(*:2079))|yment(?|getway/([^/]++)(?|(*:2115)|/edit(*:2129)|(*:2138))|\\-(?|method/(?|edit/([^/]++)(*:2176)|update/([^/]++)(*:2200)|delete/([^/]++)(*:2224))|setup/(?|edit/([^/]++)(*:2256)|update/([^/]++)(*:2280)|delete/([^/]++)(*:2304))))))|s(?|uppliers/([^/]++)(?|(*:2342)|/edit(*:2356)|(*:2365))|lides/([^/]++)(?|(*:2392)|/edit(*:2406)|(*:2415))|e(?|oconfigs/([^/]++)(?|(*:2449)|/edit(*:2463)|(*:2472))|rvicing/([^/]++)(?|(*:2501)|/edit(*:2515)|(*:2524)))|ocialmedia/([^/]++)(?|(*:2557)|/edit(*:2571)|(*:2580))|t(?|ore/([^/]++)(?|(*:2609)|/edit(*:2623)|(*:2632))|ates/([^/]++)(?|(*:2658)|/edit(*:2672)|(*:2681)))|ms(?|campaign/([^/]++)(?|(*:2717)|/edit(*:2731)|(*:2740))|templete/([^/]++)(?|(*:2770)|/edit(*:2784)|(*:2793))|log/([^/]++)(?|(*:2818)|/edit(*:2832)|(*:2841))|sends/([^/]++)(*:2865))|hipping\\-(?|zone(?|s/([^/]++)(?|(*:2907)|/edit(*:2921)|(*:2930))|\\-locations/([^/]++)(?|(*:2963)|/edit(*:2977)|(*:2986)))|methods/([^/]++)(?|(*:3016)|/edit(*:3030)|(*:3039))))|f(?|aqs/([^/]++)(?|(*:3070)|/edit(*:3084)|(*:3093))|lashdealadmin/([^/]++)(?|(*:3128)|/edit(*:3142)|(*:3151)))|vouchers/([^/]++)(?|(*:3182)|/edit(*:3196)|(*:3205))|discounts/([^/]++)(?|(*:3236)|/edit(*:3250)|(*:3259))|t(?|estimonials/([^/]++)(?|(*:3296)|/edit(*:3310)|(*:3319))|utorial/([^/]++)(?|(*:3348)|/edit(*:3362)|(*:3371)))|l(?|o(?|gofavs/([^/]++)(?|(*:3408)|/edit(*:3422)|(*:3431))|cal\\-sale/([^/]++)(?|(*:3462)|/edit(*:3476)|(*:3485)))|ang/(?|edit/([^/]++)(*:3516)|update/([^/]++)(*:3540)))|newsletteradmin/([^/]++)(?|(*:3578)|/edit(*:3592)|(*:3601))|re(?|views/reply/([^/]++)(*:3636)|ply\\-Store/([^/]++)/([^/]++)/([^/]++)(*:3682))|order(?|admin/([^/]++)(?|(*:3717)|/edit(*:3731)|(*:3740))|return/([^/]++)(?|(*:3768)|/edit(*:3782)|(*:3791)))|invoicea4(?|/([^/]++)(*:3823)|photo/([^/]++)(*:3846)))))/?$}sDu',
    ),
    3 => 
    array (
      42 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      76 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.telescope',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'campaign.slug',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      159 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      188 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'complains.show',
          ),
          1 => 
          array (
            0 => 'complain',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'complains.edit',
          ),
          1 => 
          array (
            0 => 'complain',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'complains.update',
          ),
          1 => 
          array (
            0 => 'complain',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'complains.destroy',
          ),
          1 => 
          array (
            0 => 'complain',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'shops',
          ),
          1 => 
          array (
            0 => 'category',
            1 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      270 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brands',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      291 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blog.details',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yRkkAuynAiHBru4o',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_quick_view_details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.show',
          ),
          1 => 
          array (
            0 => 'newsletter',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.edit',
          ),
          1 => 
          array (
            0 => 'newsletter',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.update',
          ),
          1 => 
          array (
            0 => 'newsletter',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'newsletter.destroy',
          ),
          1 => 
          array (
            0 => 'newsletter',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.morder.show',
          ),
          1 => 
          array (
            0 => 'morder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      489 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.morder.edit',
          ),
          1 => 
          array (
            0 => 'morder',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.morder.update',
          ),
          1 => 
          array (
            0 => 'morder',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.morder.destroy',
          ),
          1 => 
          array (
            0 => 'morder',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mreview.show',
          ),
          1 => 
          array (
            0 => 'mreview',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mreview.edit',
          ),
          1 => 
          array (
            0 => 'mreview',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mreview.update',
          ),
          1 => 
          array (
            0 => 'mreview',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mreview.destroy',
          ),
          1 => 
          array (
            0 => 'mreview',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.maddress.show',
          ),
          1 => 
          array (
            0 => 'maddress',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.maddress.edit',
          ),
          1 => 
          array (
            0 => 'maddress',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.maddress.update',
          ),
          1 => 
          array (
            0 => 'maddress',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.maddress.destroy',
          ),
          1 => 
          array (
            0 => 'maddress',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mwallet.show',
          ),
          1 => 
          array (
            0 => 'mwallet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mwallet.edit',
          ),
          1 => 
          array (
            0 => 'mwallet',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      642 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mwallet.update',
          ),
          1 => 
          array (
            0 => 'mwallet',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.mwallet.destroy',
          ),
          1 => 
          array (
            0 => 'mwallet',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      668 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.minvoice.index',
          ),
          1 => 
          array (
            0 => 'invoice_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      698 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.profile.show',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.profile.edit',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.profile.update',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.profile.destroy',
          ),
          1 => 
          array (
            0 => 'profile',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.password.show',
          ),
          1 => 
          array (
            0 => 'password',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.password.edit',
          ),
          1 => 
          array (
            0 => 'password',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.password.update',
          ),
          1 => 
          array (
            0 => 'password',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'mypanel.password.destroy',
          ),
          1 => 
          array (
            0 => 'password',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminmenu.show',
          ),
          1 => 
          array (
            0 => 'adminmenu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminmenu.edit',
          ),
          1 => 
          array (
            0 => 'adminmenu',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      844 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminmenu.update',
          ),
          1 => 
          array (
            0 => 'adminmenu',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminmenu.destroy',
          ),
          1 => 
          array (
            0 => 'adminmenu',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminuser.show',
          ),
          1 => 
          array (
            0 => 'adminuser',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      882 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminuser.edit',
          ),
          1 => 
          array (
            0 => 'adminuser',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      890 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminuser.update',
          ),
          1 => 
          array (
            0 => 'adminuser',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adminuser.destroy',
          ),
          1 => 
          array (
            0 => 'adminuser',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      925 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adjustment.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.adjustment.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.attributes.show',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      991 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.attributes.edit',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      999 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.attributes.update',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.attributes.destroy',
          ),
          1 => 
          array (
            0 => 'attribute',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.aboutadmin.show',
          ),
          1 => 
          array (
            0 => 'aboutadmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.aboutadmin.edit',
          ),
          1 => 
          array (
            0 => 'aboutadmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1052 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.aboutadmin.update',
          ),
          1 => 
          array (
            0 => 'aboutadmin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.aboutadmin.destroy',
          ),
          1 => 
          array (
            0 => 'aboutadmin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.units.show',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1094 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.units.edit',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.units.update',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.units.destroy',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.brands.show',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1148 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.brands.edit',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.brands.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.brands.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.bercode.show',
          ),
          1 => 
          array (
            0 => 'bercode',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.bercode.edit',
          ),
          1 => 
          array (
            0 => 'bercode',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.bercode.update',
          ),
          1 => 
          array (
            0 => 'bercode',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.bercode.destroy',
          ),
          1 => 
          array (
            0 => 'bercode',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.blogs.show',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1248 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.blogs.edit',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.blogs.update',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.blogs.destroy',
          ),
          1 => 
          array (
            0 => 'blog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.banners.show',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.banners.edit',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.banners.update',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.banners.destroy',
          ),
          1 => 
          array (
            0 => 'banner',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.categories.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.categories.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1367 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.categories.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.categories.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1402 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.couriers.show',
          ),
          1 => 
          array (
            0 => 'courier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1416 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.couriers.edit',
          ),
          1 => 
          array (
            0 => 'courier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.couriers.update',
          ),
          1 => 
          array (
            0 => 'courier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.couriers.destroy',
          ),
          1 => 
          array (
            0 => 'courier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1464 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.type.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.type.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1539 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.coupon.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1575 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contactinfo.show',
          ),
          1 => 
          array (
            0 => 'contactinfo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contactinfo.edit',
          ),
          1 => 
          array (
            0 => 'contactinfo',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contactinfo.update',
          ),
          1 => 
          array (
            0 => 'contactinfo',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contactinfo.destroy',
          ),
          1 => 
          array (
            0 => 'contactinfo',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1621 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contacts.show',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1635 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contacts.edit',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contacts.update',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.contacts.destroy',
          ),
          1 => 
          array (
            0 => 'contact',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.complainadmin.show',
          ),
          1 => 
          array (
            0 => 'complainadmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.complainadmin.edit',
          ),
          1 => 
          array (
            0 => 'complainadmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.complainadmin.update',
          ),
          1 => 
          array (
            0 => 'complainadmin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.complainadmin.destroy',
          ),
          1 => 
          array (
            0 => 'complainadmin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1739 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.customeradmin.show',
          ),
          1 => 
          array (
            0 => 'customeradmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.customeradmin.edit',
          ),
          1 => 
          array (
            0 => 'customeradmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.customeradmin.update',
          ),
          1 => 
          array (
            0 => 'customeradmin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.customeradmin.destroy',
          ),
          1 => 
          array (
            0 => 'customeradmin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.currency.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1819 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.currency.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1843 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.currency.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.chalan.index',
          ),
          1 => 
          array (
            0 => 'invoice_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.cities.show',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1908 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.cities.edit',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1917 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.cities.update',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.cities.destroy',
          ),
          1 => 
          array (
            0 => 'city',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.products.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1974 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2004 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.purchases.show',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2018 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.purchases.edit',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2027 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.purchases.update',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.purchases.destroy',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.pages.show',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2070 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.pages.edit',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2079 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.pages.update',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.pages.destroy',
          ),
          1 => 
          array (
            0 => 'page',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentgetway.show',
          ),
          1 => 
          array (
            0 => 'paymentgetway',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentgetway.edit',
          ),
          1 => 
          array (
            0 => 'paymentgetway',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2138 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentgetway.update',
          ),
          1 => 
          array (
            0 => 'paymentgetway',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentgetway.destroy',
          ),
          1 => 
          array (
            0 => 'paymentgetway',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentmethod.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentmethod.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentmethod.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2256 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentsetup.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentsetup.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.paymentsetup.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.suppliers.show',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.suppliers.edit',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.suppliers.update',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.suppliers.destroy',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.slides.show',
          ),
          1 => 
          array (
            0 => 'slide',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.slides.edit',
          ),
          1 => 
          array (
            0 => 'slide',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.slides.update',
          ),
          1 => 
          array (
            0 => 'slide',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.slides.destroy',
          ),
          1 => 
          array (
            0 => 'slide',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.seoconfigs.show',
          ),
          1 => 
          array (
            0 => 'seoconfig',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.seoconfigs.edit',
          ),
          1 => 
          array (
            0 => 'seoconfig',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2472 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.seoconfigs.update',
          ),
          1 => 
          array (
            0 => 'seoconfig',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.seoconfigs.destroy',
          ),
          1 => 
          array (
            0 => 'seoconfig',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.servicing.show',
          ),
          1 => 
          array (
            0 => 'servicing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.servicing.edit',
          ),
          1 => 
          array (
            0 => 'servicing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.servicing.update',
          ),
          1 => 
          array (
            0 => 'servicing',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.servicing.destroy',
          ),
          1 => 
          array (
            0 => 'servicing',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.socialmedia.show',
          ),
          1 => 
          array (
            0 => 'socialmedia',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2571 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.socialmedia.edit',
          ),
          1 => 
          array (
            0 => 'socialmedia',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.socialmedia.update',
          ),
          1 => 
          array (
            0 => 'socialmedia',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.socialmedia.destroy',
          ),
          1 => 
          array (
            0 => 'socialmedia',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.store.show',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.store.edit',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.store.update',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.store.destroy',
          ),
          1 => 
          array (
            0 => 'store',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.states.show',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.states.edit',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.states.update',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.states.destroy',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smscampaign.show',
          ),
          1 => 
          array (
            0 => 'smscampaign',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smscampaign.edit',
          ),
          1 => 
          array (
            0 => 'smscampaign',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smscampaign.update',
          ),
          1 => 
          array (
            0 => 'smscampaign',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smscampaign.destroy',
          ),
          1 => 
          array (
            0 => 'smscampaign',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2770 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smstemplete.show',
          ),
          1 => 
          array (
            0 => 'smstemplete',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smstemplete.edit',
          ),
          1 => 
          array (
            0 => 'smstemplete',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smstemplete.update',
          ),
          1 => 
          array (
            0 => 'smstemplete',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smstemplete.destroy',
          ),
          1 => 
          array (
            0 => 'smstemplete',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smslog.show',
          ),
          1 => 
          array (
            0 => 'smslog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2832 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smslog.edit',
          ),
          1 => 
          array (
            0 => 'smslog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smslog.update',
          ),
          1 => 
          array (
            0 => 'smslog',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.smslog.destroy',
          ),
          1 => 
          array (
            0 => 'smslog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2865 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.generated::aQiF1xCdUE70JKVE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2907 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zones.show',
          ),
          1 => 
          array (
            0 => 'shipping_zone',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zones.edit',
          ),
          1 => 
          array (
            0 => 'shipping_zone',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zones.update',
          ),
          1 => 
          array (
            0 => 'shipping_zone',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zones.destroy',
          ),
          1 => 
          array (
            0 => 'shipping_zone',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zone-locations.show',
          ),
          1 => 
          array (
            0 => 'shipping_zone_location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2977 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zone-locations.edit',
          ),
          1 => 
          array (
            0 => 'shipping_zone_location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2986 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zone-locations.update',
          ),
          1 => 
          array (
            0 => 'shipping_zone_location',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-zone-locations.destroy',
          ),
          1 => 
          array (
            0 => 'shipping_zone_location',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3016 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-methods.show',
          ),
          1 => 
          array (
            0 => 'shipping_method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3030 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-methods.edit',
          ),
          1 => 
          array (
            0 => 'shipping_method',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-methods.update',
          ),
          1 => 
          array (
            0 => 'shipping_method',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.shipping-methods.destroy',
          ),
          1 => 
          array (
            0 => 'shipping_method',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3070 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.faqs.show',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3084 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.faqs.edit',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3093 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.faqs.update',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.faqs.destroy',
          ),
          1 => 
          array (
            0 => 'faq',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.flashdealadmin.show',
          ),
          1 => 
          array (
            0 => 'flashdealadmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3142 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.flashdealadmin.edit',
          ),
          1 => 
          array (
            0 => 'flashdealadmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.flashdealadmin.update',
          ),
          1 => 
          array (
            0 => 'flashdealadmin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.flashdealadmin.destroy',
          ),
          1 => 
          array (
            0 => 'flashdealadmin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.vouchers.show',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.vouchers.edit',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.vouchers.update',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.vouchers.destroy',
          ),
          1 => 
          array (
            0 => 'voucher',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3236 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.discounts.show',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3250 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.discounts.edit',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.discounts.update',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.discounts.destroy',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.testimonials.show',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.testimonials.edit',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3319 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.testimonials.update',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.testimonials.destroy',
          ),
          1 => 
          array (
            0 => 'testimonial',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.tutorial.show',
          ),
          1 => 
          array (
            0 => 'tutorial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.tutorial.edit',
          ),
          1 => 
          array (
            0 => 'tutorial',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.tutorial.update',
          ),
          1 => 
          array (
            0 => 'tutorial',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.tutorial.destroy',
          ),
          1 => 
          array (
            0 => 'tutorial',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.logofavs.show',
          ),
          1 => 
          array (
            0 => 'logofav',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3422 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.logofavs.edit',
          ),
          1 => 
          array (
            0 => 'logofav',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.logofavs.update',
          ),
          1 => 
          array (
            0 => 'logofav',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.logofavs.destroy',
          ),
          1 => 
          array (
            0 => 'logofav',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.local-sale.show',
          ),
          1 => 
          array (
            0 => 'local_sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.local-sale.edit',
          ),
          1 => 
          array (
            0 => 'local_sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.local-sale.update',
          ),
          1 => 
          array (
            0 => 'local_sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.local-sale.destroy',
          ),
          1 => 
          array (
            0 => 'local_sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3516 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.lang.edit',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3540 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.lang.update',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3578 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.newsletteradmin.show',
          ),
          1 => 
          array (
            0 => 'newsletteradmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.newsletteradmin.edit',
          ),
          1 => 
          array (
            0 => 'newsletteradmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.newsletteradmin.update',
          ),
          1 => 
          array (
            0 => 'newsletteradmin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.newsletteradmin.destroy',
          ),
          1 => 
          array (
            0 => 'newsletteradmin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.review_reply',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.reply_store',
          ),
          1 => 
          array (
            0 => 'review_id',
            1 => 'customer_id',
            2 => 'admin_id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3717 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderadmin.show',
          ),
          1 => 
          array (
            0 => 'orderadmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderadmin.edit',
          ),
          1 => 
          array (
            0 => 'orderadmin',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3740 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderadmin.update',
          ),
          1 => 
          array (
            0 => 'orderadmin',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderadmin.destroy',
          ),
          1 => 
          array (
            0 => 'orderadmin',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderreturn.show',
          ),
          1 => 
          array (
            0 => 'orderreturn',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderreturn.edit',
          ),
          1 => 
          array (
            0 => 'orderreturn',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3791 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderreturn.update',
          ),
          1 => 
          array (
            0 => 'orderreturn',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.orderreturn.destroy',
          ),
          1 => 
          array (
            0 => 'orderreturn',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.invoicea4.index',
          ),
          1 => 
          array (
            0 => 'invoice_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3846 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'madmin.invoicea4photo.index',
          ),
          1 => 
          array (
            0 => 'invoice_no',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.telescope' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/telescope/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'as' => 'debugbar.telescope',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\TelescopeController@show',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o1EOc07hFhQqVHF5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bkash',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:240:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:22:"fn() => \\view(\'bkash\')";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000eda0000000000000000";}";s:4:"hash";s:44:"AjW0iRnQHF+dH7BmI4y/zh+UtEZgY9hAwXAjWOZ8yCc=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::o1EOc07hFhQqVHF5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'token',
      'action' => 
      array (
        'uses' => 'Concave\\Bkash\\Controllers\\PaymentController@token',
        'controller' => 'Concave\\Bkash\\Controllers\\PaymentController@token',
        'namespace' => 'Concave\\Bkash\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'token',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'createpayment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'createpayment',
      'action' => 
      array (
        'uses' => 'Concave\\Bkash\\Controllers\\PaymentController@createpayment',
        'controller' => 'Concave\\Bkash\\Controllers\\PaymentController@createpayment',
        'namespace' => 'Concave\\Bkash\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'createpayment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'executepayment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'executepayment',
      'action' => 
      array (
        'uses' => 'Concave\\Bkash\\Controllers\\PaymentController@executepayment',
        'controller' => 'Concave\\Bkash\\Controllers\\PaymentController@executepayment',
        'namespace' => 'Concave\\Bkash\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'executepayment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dSTNVz1xkfhaqUPz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000e9a0000000000000000";}";s:4:"hash";s:44:"0l3mSviG6Rh7if+Ql94nyufwscNOVNFB6A7ejEFwm2o=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dSTNVz1xkfhaqUPz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1umV2jQcJfg2RjvG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:394:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:175:"function () {
    \\Illuminate\\Support\\Facades\\Artisan::call(\'route:clear\');
    \\Illuminate\\Support\\Facades\\Artisan::call(\'cache:clear\');
    return \\redirect()->back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000e9c0000000000000000";}";s:4:"hash";s:44:"/HVVv/se8EKlbMRVxJjAwBZzHdOSgBjoON6Vj+JxC9M=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1umV2jQcJfg2RjvG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'today.offer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'today-offer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@today_offer',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@today_offer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'today.offer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'new.arrival' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newarrival',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CampaignController@newarrival',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CampaignController@newarrival',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'new.arrival',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'up.comming' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'upcomming',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CampaignController@upcomming',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CampaignController@upcomming',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'up.comming',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'campaign.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'campaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CampaignController@campaign',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CampaignController@campaign',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'campaign.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'campaign.slug' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'campaigns/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CampaignController@campaigns',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CampaignController@campaigns',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'campaign.slug',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'hotoffer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'hotoffer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CampaignController@hotoffer',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CampaignController@hotoffer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'hotoffer.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@shop_by_category',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@shop_by_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shops' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shops/{category}/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@shop_by_shop',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@shop_by_shop',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shops',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brands' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brands/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@shop_by_brand',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@shop_by_brand',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brands',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'filter.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'filter-products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@filterProducts',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@filterProducts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'filter.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.filters' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shopfilters',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@shopfilters',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@shopfilters',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.filters',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'shop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@shop',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@shop',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'shop.filter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'shopfilter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@shopfilter',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@shopfilter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'shop.filter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\BlogController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blog.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\BlogController@details',
        'controller' => 'App\\Http\\Controllers\\Frontend\\BlogController@details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blog.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'complains.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'complains',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'complains.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ComplainController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ComplainController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'complains.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'complains/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'complains.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ComplainController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ComplainController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'complains.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'complains',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'complains.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ComplainController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ComplainController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'complains.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'complains/{complain}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'complains.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ComplainController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ComplainController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'complains.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'complains/{complain}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'complains.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ComplainController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ComplainController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'complains.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'complains/{complain}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'complains.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ComplainController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ComplainController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'complains.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'complains/{complain}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'complains.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\ComplainController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\ComplainController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact_us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@contact_us',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@contact_us',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact_us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@brand',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@brand',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brand',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warranty_policy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warranty-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@warranty_policy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@warranty_policy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'warranty_policy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'trams' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@trams',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@trams',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'trams',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@privacy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@privacy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'privacy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@product_details',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@product_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_quick_view_details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quick-view-product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@product_quick_view_details',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@product_quick_view_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_quick_view_details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'review_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@review_store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@review_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'review_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'track' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'track',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@track',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@track',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'track',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\HomeController@search',
        'controller' => 'App\\Http\\Controllers\\Frontend\\HomeController@search',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vrf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vrf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\VrfController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\VrfController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'vrf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@states',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@states',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@cities',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@cities',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@checkout',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@checkout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkout_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkout-Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@checkout_store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@checkout_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'checkout_store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transaction_fee' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transaction_fee',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@transaction_fee',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@transaction_fee',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transaction_fee',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupon' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@coupon',
        'controller' => 'App\\Http\\Controllers\\Frontend\\Checkoutscontroller@coupon',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'coupon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-to-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartsController@addToCart',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartsController@addToCart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/update-quantity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartsController@updateQuantity',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartsController@updateQuantity',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.remove' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cart/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartsController@removeItem',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartsController@removeItem',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'headerCart.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartsController@headerCartList',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartsController@headerCartList',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'headerCart.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.Store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartsController@add',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartsController@add',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.Store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartsController@cart',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartsController@cart',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.cart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartsController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartsController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cart.clear' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\CartsController@clear',
        'controller' => 'App\\Http\\Controllers\\Frontend\\CartsController@clear',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cart.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6MvElyBaXT1wrVfg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'example1',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@exampleEasyCheckout',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@exampleEasyCheckout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6MvElyBaXT1wrVfg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PIYbYVK7FKSuijjg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'example2',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@exampleHostedCheckout',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@exampleHostedCheckout',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::PIYbYVK7FKSuijjg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m2jnAqDNZKbuj7mz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Mypanel\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\OrderController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::m2jnAqDNZKbuj7mz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Luuvi9LfiDgyXzX1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'pay-via-ajax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@payViaAjax',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@payViaAjax',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Luuvi9LfiDgyXzX1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1BFO0Zx8oqGFLVv2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@success',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@success',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1BFO0Zx8oqGFLVv2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0uxF2W7F5DxNXRhG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'fail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@fail',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@fail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0uxF2W7F5DxNXRhG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jJy8WGqsY6M2miAd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@cancel',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@cancel',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jJy8WGqsY6M2miAd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oTsnVKN6w3xNmJcD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ipn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SslCommerzPaymentController@ipn',
        'controller' => 'App\\Http\\Controllers\\SslCommerzPaymentController@ipn',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oTsnVKN6w3xNmJcD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@faq',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@faq',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@about_us',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@about_us',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yRkkAuynAiHBru4o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'page/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@page',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yRkkAuynAiHBru4o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'newsletter.index',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@index',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newsletter/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'newsletter.create',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@create',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@create',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'newsletter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'newsletter.store',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@store',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newsletter/{newsletter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'newsletter.show',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@show',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@show',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'newsletter/{newsletter}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'newsletter.edit',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@edit',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@edit',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'newsletter/{newsletter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'newsletter.update',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@update',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@update',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'newsletter.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'newsletter/{newsletter}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'newsletter.destroy',
        'uses' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@destroy',
        'controller' => 'App\\Http\\Controllers\\Frontend\\NewsletterController@destroy',
        'namespace' => NULL,
        'prefix' => '/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uqt8JmzCywNd3UUC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bkash/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:531:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:312:"function () {
    $paymentId = \\session(\'payment_id\');
    if ($paymentId) {
        $bkashService = new \\App\\Services\\BkashPaymentService();
        $result = $bkashService->executePayment($paymentId);
        \\dd($result);
    }
    return \\redirect(\'/bkash\')->with(\'error\', \'Payment ID not found.\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000e2c0000000000000000";}";s:4:"hash";s:44:"9jP6vD1WYgy0rQaP4T7qqfGvWNtngj5PAqTAU3+dNAU=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Uqt8JmzCywNd3UUC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bkash.create' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bkash/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BkashPaymentController@create',
        'controller' => 'App\\Http\\Controllers\\BkashPaymentController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bkash.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nYR5SJOrBIlBdqIE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bkash/execute',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\BkashPaymentController@execute',
        'controller' => 'App\\Http\\Controllers\\BkashPaymentController@execute',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nYR5SJOrBIlBdqIE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'lang.switch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'lang-switch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:374:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:155:"function (\\Illuminate\\Http\\Request $request) {
    \\session([\'locale\' => $request->lang]);
    \\app()->setLocale($request->lang);
    return \\back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000edd0000000000000000";}";s:4:"hash";s:44:"MieAzuap3RI4cZ0jwi9/Mfl6m4bW2de0cpwKMfCYFGM=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'lang.switch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.switch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currency-switch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:396:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:177:"function (\\Illuminate\\Http\\Request $request) {
    \\session([\'currency_id\' => $request->currency]);
    \\Darryldecode\\Cart\\Facades\\CartFacade::clear();
    return \\back();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000ee60000000000000000";}";s:4:"hash";s:44:"NblyECV2VRCfjKHrMgaklAzYfk3zjhHb01h+1BeiCF8=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'currency.switch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Mypanel\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\Auth\\LoginController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register.user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Mypanel\\Auth\\RegisterController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\Auth\\RegisterController@showLoginForm',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.loginuser' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mypanel/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Mypanel\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\Auth\\LoginController@login',
        'as' => 'mypanel.loginuser',
        'namespace' => 'Auth',
        'prefix' => '/mypanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.register_user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mypanel/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Mypanel\\Auth\\RegisterController@create',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\Auth\\RegisterController@create',
        'as' => 'mypanel.register_user',
        'namespace' => 'Auth',
        'prefix' => '/mypanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.elogout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Mypanel\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\Auth\\LoginController@logout',
        'as' => 'mypanel.elogout',
        'namespace' => 'Auth',
        'prefix' => '/mypanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'uses' => 'App\\Http\\Controllers\\Mypanel\\Deshboardcontroller@index',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\Deshboardcontroller@index',
        'as' => 'mypanel.users',
        'namespace' => NULL,
        'prefix' => '/mypanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.morder.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/morder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.morder.index',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.morder.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/morder/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.morder.create',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\OrderController@create',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\OrderController@create',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.morder.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mypanel/morder',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.morder.store',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\OrderController@store',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.morder.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/morder/{morder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.morder.show',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\OrderController@show',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.morder.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/morder/{morder}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.morder.edit',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\OrderController@edit',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\OrderController@edit',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.morder.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mypanel/morder/{morder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.morder.update',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\OrderController@update',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.morder.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mypanel/morder/{morder}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.morder.destroy',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\OrderController@destroy',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\OrderController@destroy',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.minvoice.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/invoice/{invoice_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'uses' => 'App\\Http\\Controllers\\Mypanel\\OrderController@invoice',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\OrderController@invoice',
        'as' => 'mypanel.minvoice.index',
        'namespace' => NULL,
        'prefix' => '/mypanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mreview.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/mreview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mreview.index',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@index',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mreview.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/mreview/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mreview.create',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@create',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@create',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mreview.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mypanel/mreview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mreview.store',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@store',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mreview.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/mreview/{mreview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mreview.show',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@show',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@show',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mreview.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/mreview/{mreview}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mreview.edit',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@edit',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mreview.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mypanel/mreview/{mreview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mreview.update',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@update',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@update',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mreview.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mypanel/mreview/{mreview}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mreview.destroy',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@destroy',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\ReviewController@destroy',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.maddress.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/maddress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.maddress.index',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\AddressController@index',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\AddressController@index',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.maddress.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/maddress/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.maddress.create',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\AddressController@create',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\AddressController@create',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.maddress.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mypanel/maddress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.maddress.store',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\AddressController@store',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\AddressController@store',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.maddress.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/maddress/{maddress}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.maddress.show',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\AddressController@show',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\AddressController@show',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.maddress.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/maddress/{maddress}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.maddress.edit',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\AddressController@edit',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\AddressController@edit',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.maddress.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mypanel/maddress/{maddress}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.maddress.update',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\AddressController@update',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\AddressController@update',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.maddress.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mypanel/maddress/{maddress}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.maddress.destroy',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\AddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\AddressController@destroy',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mwallet.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/mwallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mwallet.index',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\WalletController@index',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\WalletController@index',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mwallet.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/mwallet/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mwallet.create',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\WalletController@create',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\WalletController@create',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mwallet.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mypanel/mwallet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mwallet.store',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\WalletController@store',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\WalletController@store',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mwallet.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/mwallet/{mwallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mwallet.show',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\WalletController@show',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\WalletController@show',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mwallet.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/mwallet/{mwallet}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mwallet.edit',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\WalletController@edit',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\WalletController@edit',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mwallet.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mypanel/mwallet/{mwallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mwallet.update',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\WalletController@update',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\WalletController@update',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.mwallet.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mypanel/mwallet/{mwallet}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.mwallet.destroy',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\WalletController@destroy',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\WalletController@destroy',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.profile.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.profile.index',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\UserController@index',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.profile.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/profile/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.profile.create',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\UserController@create',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.profile.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mypanel/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.profile.store',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\UserController@store',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.profile.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/profile/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.profile.show',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\UserController@show',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/profile/{profile}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.profile.edit',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\UserController@edit',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mypanel/profile/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.profile.update',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\UserController@update',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.profile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mypanel/profile/{profile}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.profile.destroy',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\UserController@destroy',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.password.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.password.index',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@index',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@index',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.password.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/password/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.password.create',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@create',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'mypanel/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.password.store',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@store',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.password.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/password/{password}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.password.show',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@show',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.password.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mypanel/password/{password}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.password.edit',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@edit',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@edit',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'mypanel/password/{password}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.password.update',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@update',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@update',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mypanel.password.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'mypanel/password/{password}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'mypanel',
        ),
        'as' => 'mypanel.password.destroy',
        'uses' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@destroy',
        'controller' => 'App\\Http\\Controllers\\Mypanel\\PasswordController@destroy',
        'namespace' => NULL,
        'prefix' => 'mypanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zj4EHWEkt0VUW8qG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:261:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:43:"function () {
    return \\view(\'chat\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000eea0000000000000000";}";s:4:"hash";s:44:"7+Fwl0/GjLntsJX3pdym2jMZ49M3glC/hJyyJqtQuGE=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zj4EHWEkt0VUW8qG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::21G787OOmSgXBm0l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'chat-message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ChatController@handle',
        'controller' => 'App\\Http\\Controllers\\ChatController@handle',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::21G787OOmSgXBm0l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'as' => 'madmin.',
        'namespace' => 'Madmin\\Auth',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@showLoginForm',
        'as' => 'madmin.login',
        'namespace' => 'Madmin\\Auth',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.generated::L54GdyoteCx1Hjkj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@login',
        'as' => 'madmin.generated::L54GdyoteCx1Hjkj',
        'namespace' => 'Madmin\\Auth',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Auth\\LoginController@logout',
        'as' => 'madmin.logout',
        'namespace' => 'Madmin\\Auth',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'as' => 'madmin.users',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminmenu.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adminmenu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminmenu.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\MenuController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\MenuController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminmenu.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adminmenu/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminmenu.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\MenuController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\MenuController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminmenu.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/adminmenu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminmenu.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\MenuController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\MenuController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminmenu.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adminmenu/{adminmenu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminmenu.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\MenuController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\MenuController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminmenu.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adminmenu/{adminmenu}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminmenu.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\MenuController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\MenuController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminmenu.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/adminmenu/{adminmenu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminmenu.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\MenuController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\MenuController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminmenu.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/adminmenu/{adminmenu}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminmenu.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\MenuController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\MenuController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminuser.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adminuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminuser.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UserController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UserController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminuser.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adminuser/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminuser.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UserController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UserController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminuser.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/adminuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminuser.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UserController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UserController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminuser.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adminuser/{adminuser}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminuser.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UserController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UserController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminuser.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adminuser/{adminuser}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminuser.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UserController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UserController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminuser.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/adminuser/{adminuser}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminuser.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UserController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UserController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adminuser.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/adminuser/{adminuser}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.adminuser.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UserController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UserController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.units.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.units.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UnitsController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UnitsController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.units.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/units/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.units.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UnitsController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UnitsController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.units.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/units',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.units.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UnitsController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UnitsController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.units.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.units.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UnitsController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UnitsController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.units.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/units/{unit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.units.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UnitsController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UnitsController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.units.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.units.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UnitsController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UnitsController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.units.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/units/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.units.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\UnitsController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\UnitsController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.attributes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.attributes.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AttributesController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AttributesController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.attributes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/attributes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.attributes.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AttributesController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AttributesController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.attributes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/attributes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.attributes.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AttributesController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AttributesController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.attributes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.attributes.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AttributesController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AttributesController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.attributes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/attributes/{attribute}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.attributes.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AttributesController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AttributesController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.attributes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.attributes.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AttributesController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AttributesController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.attributes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/attributes/{attribute}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.attributes.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AttributesController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AttributesController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.brands.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.brands.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BrandsController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BrandsController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.brands.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/brands/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.brands.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BrandsController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BrandsController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.brands.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/brands',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.brands.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BrandsController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BrandsController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.brands.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.brands.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BrandsController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BrandsController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.brands.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/brands/{brand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.brands.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BrandsController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BrandsController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.brands.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.brands.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BrandsController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BrandsController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.brands.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/brands/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.brands.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BrandsController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BrandsController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.categories.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.categories.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.categories.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.categories.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/categories/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.categories.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.categories.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/categories/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.categories.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CategoriesController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.spacial.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/spacial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@spacial',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@spacial',
        'as' => 'madmin.spacial.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.regular.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/regular',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CategoriesController@regular',
        'controller' => 'App\\Http\\Controllers\\Admin\\CategoriesController@regular',
        'as' => 'madmin.regular.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.change_sub_category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/change_sub_category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductsController@change_sub_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductsController@change_sub_category',
        'as' => 'madmin.change_sub_category',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.tags' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ProductsController@tags',
        'controller' => 'App\\Http\\Controllers\\Admin\\ProductsController@tags',
        'as' => 'madmin.tags',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.products.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ProductsController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ProductsController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.products.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ProductsController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ProductsController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.products.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ProductsController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ProductsController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.products.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ProductsController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ProductsController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.products.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ProductsController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ProductsController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.products.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ProductsController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ProductsController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.products.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ProductsController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ProductsController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.bercode.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/bercode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.bercode.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BercodeController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BercodeController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.bercode.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/bercode/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.bercode.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BercodeController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BercodeController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.bercode.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/bercode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.bercode.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BercodeController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BercodeController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.bercode.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/bercode/{bercode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.bercode.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BercodeController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BercodeController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.bercode.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/bercode/{bercode}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.bercode.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BercodeController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BercodeController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.bercode.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/bercode/{bercode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.bercode.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BercodeController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BercodeController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.bercode.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/bercode/{bercode}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.bercode.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BercodeController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BercodeController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.autocomplete.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/autocompleteproduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\BercodeController@autocompleteproduct',
        'controller' => 'App\\Http\\Controllers\\Admin\\BercodeController@autocompleteproduct',
        'as' => 'madmin.autocomplete.product',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.purchases.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.purchases.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.purchases.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/purchases/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.purchases.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.purchases.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.purchases.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.purchases.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.purchases.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.purchases.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/purchases/{purchase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.purchases.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.purchases.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.purchases.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.purchases.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.purchases.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PurchasesController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.get_sku_item' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/get_sku_item/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchasesController@get_sku_item',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchasesController@get_sku_item',
        'as' => 'madmin.get_sku_item',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.get_price' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/get_price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchasesController@get_price',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchasesController@get_price',
        'as' => 'madmin.get_price',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.get_supplier' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/get_supplier/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PurchasesController@get_supplier',
        'controller' => 'App\\Http\\Controllers\\Admin\\PurchasesController@get_supplier',
        'as' => 'madmin.get_supplier',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.suppliers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/suppliers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.suppliers.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.suppliers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/suppliers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.suppliers.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.suppliers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/suppliers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.suppliers.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.suppliers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/suppliers/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.suppliers.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.suppliers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/suppliers/{supplier}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.suppliers.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.suppliers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/suppliers/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.suppliers.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.suppliers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/suppliers/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.suppliers.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SuppliersController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.stock.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@index',
        'as' => 'madmin.stock.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.stock.low' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/stock/low',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@stock_low',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@stock_low',
        'as' => 'madmin.stock.low',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.stock.sold' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/stock/sold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@stock_sold',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@stock_sold',
        'as' => 'madmin.stock.sold',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.stock.adjustment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adjustment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@adjustment',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@adjustment',
        'as' => 'madmin.stock.adjustment',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adjustment.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adjustment/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@adjustment_add',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@adjustment_add',
        'as' => 'madmin.adjustment.add',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.get_adjustment_sku' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/adjustment/sku',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@get_adjustment_sku',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@get_adjustment_sku',
        'as' => 'madmin.get_adjustment_sku',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.get_adjustment_qty' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/adjustment/qty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@get_adjustment_qty',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@get_adjustment_qty',
        'as' => 'madmin.get_adjustment_qty',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adjustment.Store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/adjustment/Store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@store',
        'as' => 'madmin.adjustment.Store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adjustment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/adjustment/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@edit',
        'as' => 'madmin.adjustment.edit',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.adjustment.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/adjustment/store/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\StockController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\StockController@update',
        'as' => 'madmin.adjustment.update',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.slides.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/slides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.slides.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SlidesController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SlidesController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.slides.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/slides/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.slides.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SlidesController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SlidesController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.slides.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/slides',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.slides.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SlidesController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SlidesController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.slides.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/slides/{slide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.slides.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SlidesController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SlidesController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.slides.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/slides/{slide}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.slides.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SlidesController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SlidesController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.slides.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/slides/{slide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.slides.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SlidesController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SlidesController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.slides.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/slides/{slide}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.slides.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SlidesController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SlidesController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.blogs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.blogs.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BlogsController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BlogsController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.blogs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/blogs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.blogs.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BlogsController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BlogsController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.blogs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.blogs.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BlogsController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BlogsController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.blogs.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BlogsController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BlogsController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.blogs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/blogs/{blog}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.blogs.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BlogsController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BlogsController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.blogs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.blogs.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BlogsController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BlogsController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.blogs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.blogs.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BlogsController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BlogsController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.faqs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.faqs.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FaqsController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FaqsController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.faqs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/faqs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.faqs.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FaqsController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FaqsController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.faqs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.faqs.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FaqsController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FaqsController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.faqs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/faqs/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.faqs.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FaqsController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FaqsController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.faqs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/faqs/{faq}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.faqs.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FaqsController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FaqsController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.faqs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/faqs/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.faqs.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FaqsController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FaqsController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.faqs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/faqs/{faq}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.faqs.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FaqsController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FaqsController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.pages.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PagesController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PagesController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/pages/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.pages.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PagesController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PagesController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.pages.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/pages',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.pages.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PagesController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PagesController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.pages.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.pages.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PagesController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PagesController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/pages/{page}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.pages.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PagesController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PagesController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.pages.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.pages.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PagesController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PagesController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.pages.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/pages/{page}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.pages.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\PagesController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\PagesController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.banners.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/banners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.banners.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BannersController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BannersController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.banners.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/banners/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.banners.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BannersController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BannersController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.banners.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/banners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.banners.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BannersController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BannersController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.banners.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/banners/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.banners.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BannersController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BannersController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.banners.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/banners/{banner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.banners.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BannersController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BannersController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.banners.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/banners/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.banners.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BannersController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BannersController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.banners.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/banners/{banner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.banners.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\BannersController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\BannersController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.vouchers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.vouchers.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\VouchersController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\VouchersController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.vouchers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/vouchers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.vouchers.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\VouchersController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\VouchersController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.vouchers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.vouchers.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\VouchersController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\VouchersController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.vouchers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/vouchers/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.vouchers.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\VouchersController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\VouchersController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.vouchers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/vouchers/{voucher}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.vouchers.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\VouchersController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\VouchersController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.vouchers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/vouchers/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.vouchers.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\VouchersController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\VouchersController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.vouchers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/vouchers/{voucher}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.vouchers.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\VouchersController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\VouchersController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.flashdealadmin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/flashdealadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.flashdealadmin.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.flashdealadmin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/flashdealadmin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.flashdealadmin.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.flashdealadmin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/flashdealadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.flashdealadmin.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.flashdealadmin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/flashdealadmin/{flashdealadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.flashdealadmin.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.flashdealadmin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/flashdealadmin/{flashdealadmin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.flashdealadmin.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.flashdealadmin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/flashdealadmin/{flashdealadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.flashdealadmin.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.flashdealadmin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/flashdealadmin/{flashdealadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.flashdealadmin.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\FlashdealController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.get_product_id' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/get_product_id/id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VouchersController@get_product_id',
        'controller' => 'App\\Http\\Controllers\\Admin\\VouchersController@get_product_id',
        'as' => 'madmin.get_product_id',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.get_voucher_product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/get_voucher_product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VouchersController@get_voucher_product',
        'controller' => 'App\\Http\\Controllers\\Admin\\VouchersController@get_voucher_product',
        'as' => 'madmin.get_voucher_product',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.discounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/discounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.discounts.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.discounts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/discounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.discounts.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.discounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/discounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.discounts.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.discounts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/discounts/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.discounts.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.discounts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/discounts/{discount}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.discounts.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.discounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/discounts/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.discounts.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.discounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/discounts/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.discounts.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\DiscountsController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.get_discount_product_id' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/get_discount_product_id',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DiscountsController@get_discount_product_id',
        'controller' => 'App\\Http\\Controllers\\Admin\\DiscountsController@get_discount_product_id',
        'as' => 'madmin.get_discount_product_id',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.testimonials.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.testimonials.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.testimonials.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/testimonials/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.testimonials.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.testimonials.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.testimonials.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.testimonials.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/testimonials/{testimonial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.testimonials.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.testimonials.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/testimonials/{testimonial}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.testimonials.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.testimonials.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/testimonials/{testimonial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.testimonials.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.testimonials.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/testimonials/{testimonial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.testimonials.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TestimonialsController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.couriers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/couriers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.couriers.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CouriersController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CouriersController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.couriers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/couriers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.couriers.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CouriersController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CouriersController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.couriers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/couriers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.couriers.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CouriersController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CouriersController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.couriers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/couriers/{courier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.couriers.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CouriersController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CouriersController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.couriers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/couriers/{courier}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.couriers.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CouriersController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CouriersController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.couriers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/couriers/{courier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.couriers.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CouriersController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CouriersController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.couriers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/couriers/{courier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.couriers.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CouriersController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CouriersController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentgetway.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/paymentgetway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.paymentgetway.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentgetway.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/paymentgetway/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.paymentgetway.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentgetway.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/paymentgetway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.paymentgetway.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentgetway.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/paymentgetway/{paymentgetway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.paymentgetway.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentgetway.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/paymentgetway/{paymentgetway}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.paymentgetway.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentgetway.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/paymentgetway/{paymentgetway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.paymentgetway.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentgetway.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/paymentgetway/{paymentgetway}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.paymentgetway.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\PaymentController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contactinfo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/contactinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contactinfo.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contactinfo.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/contactinfo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contactinfo.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contactinfo.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/contactinfo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contactinfo.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contactinfo.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/contactinfo/{contactinfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contactinfo.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contactinfo.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/contactinfo/{contactinfo}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contactinfo.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contactinfo.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/contactinfo/{contactinfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contactinfo.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contactinfo.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/contactinfo/{contactinfo}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contactinfo.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.logofavs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/logofavs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.logofavs.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.logofavs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/logofavs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.logofavs.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.logofavs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/logofavs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.logofavs.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.logofavs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/logofavs/{logofav}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.logofavs.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.logofavs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/logofavs/{logofav}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.logofavs.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.logofavs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/logofavs/{logofav}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.logofavs.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.logofavs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/logofavs/{logofav}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.logofavs.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\LogoFavsController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contacts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contacts.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contacts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/contacts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contacts.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contacts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contacts.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contacts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contacts.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contacts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/contacts/{contact}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contacts.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contacts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contacts.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.contacts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/contacts/{contact}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.contacts.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ContactInfoController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.seoconfigs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/seoconfigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.seoconfigs.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.seoconfigs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/seoconfigs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.seoconfigs.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.seoconfigs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/seoconfigs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.seoconfigs.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.seoconfigs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/seoconfigs/{seoconfig}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.seoconfigs.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.seoconfigs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/seoconfigs/{seoconfig}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.seoconfigs.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.seoconfigs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/seoconfigs/{seoconfig}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.seoconfigs.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.seoconfigs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/seoconfigs/{seoconfig}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.seoconfigs.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SeoConfigsController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.socialmedia.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/socialmedia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.socialmedia.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.socialmedia.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/socialmedia/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.socialmedia.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.socialmedia.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/socialmedia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.socialmedia.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.socialmedia.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/socialmedia/{socialmedia}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.socialmedia.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.socialmedia.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/socialmedia/{socialmedia}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.socialmedia.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.socialmedia.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/socialmedia/{socialmedia}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.socialmedia.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.socialmedia.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/socialmedia/{socialmedia}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.socialmedia.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\SocialMediaController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.aboutadmin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/aboutadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.aboutadmin.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AboutController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AboutController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.aboutadmin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/aboutadmin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.aboutadmin.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AboutController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AboutController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.aboutadmin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/aboutadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.aboutadmin.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AboutController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AboutController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.aboutadmin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/aboutadmin/{aboutadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.aboutadmin.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AboutController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AboutController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.aboutadmin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/aboutadmin/{aboutadmin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.aboutadmin.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AboutController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AboutController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.aboutadmin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/aboutadmin/{aboutadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.aboutadmin.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AboutController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AboutController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.aboutadmin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/aboutadmin/{aboutadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.aboutadmin.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\AboutController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\AboutController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.customeradmin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/customeradmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.customeradmin.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CustomerController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CustomerController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.customeradmin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/customeradmin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.customeradmin.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CustomerController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CustomerController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.customeradmin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/customeradmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.customeradmin.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CustomerController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CustomerController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.customeradmin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/customeradmin/{customeradmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.customeradmin.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CustomerController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CustomerController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.customeradmin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/customeradmin/{customeradmin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.customeradmin.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CustomerController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CustomerController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.customeradmin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/customeradmin/{customeradmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.customeradmin.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CustomerController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CustomerController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.customeradmin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/customeradmin/{customeradmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.customeradmin.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\CustomerController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\CustomerController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.newsletteradmin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/newsletteradmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.newsletteradmin.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.newsletteradmin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/newsletteradmin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.newsletteradmin.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.newsletteradmin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/newsletteradmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.newsletteradmin.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.newsletteradmin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/newsletteradmin/{newsletteradmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.newsletteradmin.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.newsletteradmin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/newsletteradmin/{newsletteradmin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.newsletteradmin.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.newsletteradmin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/newsletteradmin/{newsletteradmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.newsletteradmin.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.newsletteradmin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/newsletteradmin/{newsletteradmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.newsletteradmin.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\NewsletterController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.local-sale.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/local-sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.local-sale.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.local-sale.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/local-sale/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.local-sale.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.local-sale.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/local-sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.local-sale.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.local-sale.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/local-sale/{local_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.local-sale.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.local-sale.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/local-sale/{local_sale}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.local-sale.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.local-sale.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/local-sale/{local_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.local-sale.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.local-sale.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/local-sale/{local_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.local-sale.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\LocalSalesController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.review_index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@review_index',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@review_index',
        'as' => 'madmin.review_index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.review_reply' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/reviews/reply/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@review_reply',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@review_reply',
        'as' => 'madmin.review_reply',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.reply_store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/reply-Store/{review_id}/{customer_id}/{admin_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Frontend\\PagesController@reply_store',
        'controller' => 'App\\Http\\Controllers\\Frontend\\PagesController@reply_store',
        'as' => 'madmin.reply_store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderadmin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/orderadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderadmin.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderadmin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/orderadmin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderadmin.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderadmin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/orderadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderadmin.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderadmin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/orderadmin/{orderadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderadmin.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderadmin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/orderadmin/{orderadmin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderadmin.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderadmin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/orderadmin/{orderadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderadmin.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderadmin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/orderadmin/{orderadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderadmin.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.invoicea4.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/invoicea4/{invoice_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@invoicea4',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@invoicea4',
        'as' => 'madmin.invoicea4.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.chalan.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/chalan/{invoice_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@chalan',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@chalan',
        'as' => 'madmin.chalan.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.invoicea4photo.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/invoicea4photo/{invoice_no}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@invoicea4photo',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@invoicea4photo',
        'as' => 'madmin.invoicea4photo.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orders.pending' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@pending',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@pending',
        'as' => 'madmin.orders.pending',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orders.complete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/complete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@complete',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@complete',
        'as' => 'madmin.orders.complete',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orders.due' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/due',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@due',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@due',
        'as' => 'madmin.orders.due',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orders.paid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/paid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrderController@paid',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrderController@paid',
        'as' => 'madmin.orders.paid',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderreturn.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/orderreturn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderreturn.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderreturn.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/orderreturn/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderreturn.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderreturn.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/orderreturn',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderreturn.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderreturn.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/orderreturn/{orderreturn}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderreturn.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderreturn.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/orderreturn/{orderreturn}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderreturn.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderreturn.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/orderreturn/{orderreturn}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderreturn.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.orderreturn.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/orderreturn/{orderreturn}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.orderreturn.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\OrderReturnController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.complainadmin.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/complainadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.complainadmin.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.complainadmin.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/complainadmin/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.complainadmin.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.complainadmin.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/complainadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.complainadmin.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.complainadmin.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/complainadmin/{complainadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.complainadmin.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.complainadmin.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/complainadmin/{complainadmin}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.complainadmin.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.complainadmin.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/complainadmin/{complainadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.complainadmin.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.complainadmin.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/complainadmin/{complainadmin}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.complainadmin.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ComplainBoxController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.complainadmin.pendings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/pendings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComplainBoxController@pending',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComplainBoxController@pending',
        'as' => 'madmin.complainadmin.pendings',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.complainadmin.completes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/completes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ComplainBoxController@complete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ComplainBoxController@complete',
        'as' => 'madmin.complainadmin.completes',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.servicing.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/servicing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.servicing.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ServicingController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ServicingController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.servicing.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/servicing/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.servicing.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ServicingController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ServicingController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.servicing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/servicing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.servicing.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ServicingController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ServicingController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.servicing.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/servicing/{servicing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.servicing.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ServicingController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ServicingController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.servicing.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/servicing/{servicing}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.servicing.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ServicingController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ServicingController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.servicing.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/servicing/{servicing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.servicing.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ServicingController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ServicingController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.servicing.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/servicing/{servicing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.servicing.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\ServicingController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ServicingController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.store.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.store.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\StoreController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\StoreController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.store.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/store/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.store.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\StoreController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\StoreController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.store.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.store.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\StoreController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\StoreController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.store.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.store.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\StoreController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\StoreController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.store.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/store/{store}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.store.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\StoreController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\StoreController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.store.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.store.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\StoreController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\StoreController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.store.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/store/{store}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.store.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\StoreController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\StoreController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.tutorial.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/tutorial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.tutorial.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TutorialController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TutorialController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.tutorial.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/tutorial/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.tutorial.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TutorialController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TutorialController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.tutorial.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/tutorial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.tutorial.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TutorialController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TutorialController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.tutorial.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/tutorial/{tutorial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.tutorial.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TutorialController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TutorialController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.tutorial.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/tutorial/{tutorial}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.tutorial.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TutorialController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TutorialController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.tutorial.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/tutorial/{tutorial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.tutorial.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TutorialController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TutorialController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.tutorial.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/tutorial/{tutorial}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.tutorial.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\TutorialController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\TutorialController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smscampaign.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smscampaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smscampaign.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smscampaign.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smscampaign/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smscampaign.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smscampaign.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/smscampaign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smscampaign.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smscampaign.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smscampaign/{smscampaign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smscampaign.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smscampaign.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smscampaign/{smscampaign}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smscampaign.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smscampaign.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/smscampaign/{smscampaign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smscampaign.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smscampaign.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/smscampaign/{smscampaign}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smscampaign.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSCampaignController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smstemplete.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smstemplete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smstemplete.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smstemplete.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smstemplete/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smstemplete.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smstemplete.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/smstemplete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smstemplete.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smstemplete.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smstemplete/{smstemplete}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smstemplete.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smstemplete.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smstemplete/{smstemplete}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smstemplete.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smstemplete.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/smstemplete/{smstemplete}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smstemplete.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smstemplete.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/smstemplete/{smstemplete}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smstemplete.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSTempleteController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smslog.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smslog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smslog.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smslog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smslog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smslog.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smslog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/smslog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smslog.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smslog.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smslog/{smslog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smslog.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smslog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smslog/{smslog}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smslog.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smslog.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/smslog/{smslog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smslog.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smslog.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/smslog/{smslog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.smslog.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SMSLogController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.generated::aQiF1xCdUE70JKVE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/smssends/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\SMS\\SmsSendController@sendSMS',
        'controller' => '\\App\\Http\\Controllers\\Admin\\SMS\\SmsSendController@sendSMS',
        'as' => 'madmin.generated::aQiF1xCdUE70JKVE',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.sales.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/salesreports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\ReportController@sales',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ReportController@sales',
        'as' => 'madmin.sales.reports',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.stock.reports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/stockreports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => '\\App\\Http\\Controllers\\Admin\\ReportController@stock',
        'controller' => '\\App\\Http\\Controllers\\Admin\\ReportController@stock',
        'as' => 'madmin.stock.reports',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.visitors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/visitors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VisitorController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\VisitorController@index',
        'as' => 'madmin.visitors',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.appsetting.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/app-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@create',
        'as' => 'madmin.appsetting.create',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.appsetting.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/app-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@store',
        'as' => 'madmin.appsetting.store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.currency.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@indexCurrency',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@indexCurrency',
        'as' => 'madmin.currency.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.currency.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/currency/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@createCurrency',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@createCurrency',
        'as' => 'madmin.currency.create',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.currency.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@storeCurrency',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@storeCurrency',
        'as' => 'madmin.currency.store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.currency.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/currency/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@editCurrency',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@editCurrency',
        'as' => 'madmin.currency.edit',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.currency.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/currency/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@updateCurrency',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@updateCurrency',
        'as' => 'madmin.currency.update',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.currency.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/currency/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@destroyCurrency',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@destroyCurrency',
        'as' => 'madmin.currency.destroy',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentmethod.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/payment-method',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@indexPaymentMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@indexPaymentMethod',
        'as' => 'madmin.paymentmethod.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentmethod.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/payment-method/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@createPaymentMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@createPaymentMethod',
        'as' => 'madmin.paymentmethod.create',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentmethod.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/payment-method',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@storePaymentMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@storePaymentMethod',
        'as' => 'madmin.paymentmethod.store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentmethod.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/payment-method/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@editPaymentMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@editPaymentMethod',
        'as' => 'madmin.paymentmethod.edit',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentmethod.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/payment-method/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@updatePaymentMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@updatePaymentMethod',
        'as' => 'madmin.paymentmethod.update',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentmethod.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/payment-method/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@destroyPaymentMethod',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@destroyPaymentMethod',
        'as' => 'madmin.paymentmethod.destroy',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentsetup.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/payment-setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@indexPaymentSetup',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@indexPaymentSetup',
        'as' => 'madmin.paymentsetup.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentsetup.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/payment-setup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@createPaymentSetup',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@createPaymentSetup',
        'as' => 'madmin.paymentsetup.create',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentsetup.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/payment-setup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@storePaymentSetup',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@storePaymentSetup',
        'as' => 'madmin.paymentsetup.store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentsetup.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/payment-setup/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@editPaymentSetup',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@editPaymentSetup',
        'as' => 'madmin.paymentsetup.edit',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentsetup.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/payment-setup/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@updatePaymentSetup',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@updatePaymentSetup',
        'as' => 'madmin.paymentsetup.update',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.paymentsetup.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/payment-setup/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@destroyPaymentSetup',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@destroyPaymentSetup',
        'as' => 'madmin.paymentsetup.destroy',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smsconfig.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/sms-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@smsConfig',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@smsConfig',
        'as' => 'madmin.smsconfig.create',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.smsconfig.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/sms-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@smsConfigStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@smsConfigStore',
        'as' => 'madmin.smsconfig.store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.mailconfig.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/mail-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@mailConfig',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@mailConfig',
        'as' => 'madmin.mailconfig.create',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.mailconfig.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/mail-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@mailConfigStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\SettingController@mailConfigStore',
        'as' => 'madmin.mailconfig.store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.lang.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/lang',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\LangController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\LangController@index',
        'as' => 'madmin.lang.index',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.lang.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/lang/edit/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\LangController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\LangController@edit',
        'as' => 'madmin.lang.edit',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.lang.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/lang/update/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\LangController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\LangController@update',
        'as' => 'madmin.lang.update',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.type.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/coupon-types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeList',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeList',
        'as' => 'madmin.coupon.type.list',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.type.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/coupon-type/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeAddOrEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeAddOrEdit',
        'as' => 'madmin.coupon.type.add',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.type.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/coupon-type/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeAddOrEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeAddOrEdit',
        'as' => 'madmin.coupon.type.edit',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.type.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/coupon-type/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeStoreOrUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeStoreOrUpdate',
        'as' => 'madmin.coupon.type.store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.type.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/coupon-type/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeStoreOrUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeStoreOrUpdate',
        'as' => 'madmin.coupon.type.update',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.type.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/coupon-type/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponTypeDelete',
        'as' => 'madmin.coupon.type.delete',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponList',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponList',
        'as' => 'madmin.coupon.list',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.add' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/coupon/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponAddOrEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponAddOrEdit',
        'as' => 'madmin.coupon.add',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/coupon/edit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponAddOrEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponAddOrEdit',
        'as' => 'madmin.coupon.edit',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/coupon/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponStoreOrUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponStoreOrUpdate',
        'as' => 'madmin.coupon.store',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/coupon/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponStoreOrUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponStoreOrUpdate',
        'as' => 'madmin.coupon.update',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.coupon.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/coupon/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Setting\\CouponController@couponDelete',
        'as' => 'madmin.coupon.delete',
        'namespace' => 'Madmin',
        'prefix' => '/myadminpanel',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.states.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.states.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.states.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/states/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.states.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.states.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.states.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.states.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/states/{state}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.states.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.states.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/states/{state}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.states.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.states.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/states/{state}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.states.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.states.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/states/{state}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.states.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\StateController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.cities.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.cities.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.cities.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/cities/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.cities.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.cities.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.cities.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.cities.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.cities.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.cities.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/cities/{city}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.cities.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.cities.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.cities.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.cities.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/cities/{city}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.cities.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\CityController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zones.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zones.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zones.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-zones/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zones.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zones.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/shipping-zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zones.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zones.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-zones/{shipping_zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zones.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zones.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-zones/{shipping_zone}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zones.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zones.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/shipping-zones/{shipping_zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zones.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zones.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/shipping-zones/{shipping_zone}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zones.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zone-locations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-zone-locations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zone-locations.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zone-locations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-zone-locations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zone-locations.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zone-locations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/shipping-zone-locations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zone-locations.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zone-locations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-zone-locations/{shipping_zone_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zone-locations.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zone-locations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-zone-locations/{shipping_zone_location}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zone-locations.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zone-locations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/shipping-zone-locations/{shipping_zone_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zone-locations.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-zone-locations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/shipping-zone-locations/{shipping_zone_location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-zone-locations.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingZoneLocationController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-methods.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-methods.index',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@index',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@index',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-methods.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-methods/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-methods.create',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@create',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@create',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-methods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'myadminpanel/shipping-methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-methods.store',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@store',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@store',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-methods.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-methods/{shipping_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-methods.show',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@show',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@show',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-methods.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'myadminpanel/shipping-methods/{shipping_method}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-methods.edit',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@edit',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@edit',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-methods.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'myadminpanel/shipping-methods/{shipping_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-methods.update',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@update',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@update',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'madmin.shipping-methods.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'myadminpanel/shipping-methods/{shipping_method}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'madmin',
        ),
        'as' => 'madmin.shipping-methods.destroy',
        'uses' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@destroy',
        'controller' => '\\App\\Http\\Controllers\\Admin\\Setting\\ShippingMethodController@destroy',
        'namespace' => 'Madmin',
        'prefix' => 'myadminpanel/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'applay' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'applay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:276:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"function () {
    return \\view(\'Admin.layoutApp.app\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000ef40000000000000000";}";s:4:"hash";s:44:"HqnUwwDcsK1gagcTI/UaVpJXzAAgVVm5MWbSWZe5SWI=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'applay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'toggle.sidebar' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'toggle-sidebar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:419:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:200:"function (\\Illuminate\\Http\\Request $request) {
    $folded = $request->folded == \'true\' ? 1 : 0;
    \\session([\'sidebar_folded\' => $folded]);
    return \\response()->json([\'status\' => $folded]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000ef50000000000000000";}";s:4:"hash";s:44:"KaH34ZE6Sg7YpwrtvjH6UBjZGSSOYOjkw+JEUvME3mQ=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'toggle.sidebar',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
