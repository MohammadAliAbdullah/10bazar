@php
    $hotline = contacth()->hotline;
    // Remove any non-digit characters and convert to international format
    $cleanHotline = preg_replace('/\D/', '', $hotline);
    $whatsappNumber = '880' . ltrim($cleanHotline, '0');
    $categoryBrandData = Cache::get('category_brand_data', []);
    // dd($categoryBrandData);
@endphp
<header class="site__header d-lg-block d-none">
    <div class="site-header">
        <!-- .topbar -->
        <div class="site-header__topbar topbar">
            <div class="topbar__container container">
                <div class="topbar__row">
                    {{-- <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="about-us.html">
                            About Us
                        </a>
                    </div>
                    <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="contact-us.html">Contacts</a>
                    </div> --}}
                    <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Store
                            Location</a></div>
                    <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="{{ route('track') }}">Track
                            Order</a>
                    </div>
                    <div class="topbar__item topbar__item--link"><a class="topbar-link"
                            href="blog-classic.html">Blog</a></div>
                    <div class="topbar__spring"></div>
                    <div class="topbar__item">
                        <div class="topbar-dropdown"><button class="topbar-dropdown__btn" type="button">My
                                Account <svg width="7px" height="5px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                </svg></button>
                            <div class="topbar-dropdown__body"><!-- .menu -->
                                <ul class="menu menu--layout--topbar">
                                    <li><a href="account.html">Login</a></li>
                                    <li><a href="account.html">Register</a></li>
                                    <li><a href="#">Orders</a></li>
                                    <li><a href="#">Addresses</a></li>
                                </ul><!-- .menu / end -->
                            </div>
                        </div>
                    </div>
                    <div class="topbar__item">
                        <div class="topbar-dropdown">
                            <button class="topbar-dropdown__btn" type="button">Currency: <span
                                    class="topbar__item-value">BDT</span> <svg width="7px" height="5px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="topbar__item">
                        <div class="topbar-dropdown">
                            <button class="topbar-dropdown__btn" type="button">Language: <span
                                    class="topbar__item-value">EN</span> <svg width="7px" height="5px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .topbar / end -->
        <div class="site-header__middle container">
            <div class="site-header__logo">
                <a href="index.html">
                    <img src="{{ asset('public') }}/coot_assets/10_bazar_logo.jpg">
                </a>
            </div>
            <div class="site-header__search">
                <div class="search">
                    <form class="search__form" action="#"><input class="search__input" name="search"
                            placeholder="Search over 10,000 products" aria-label="Site search" type="text"
                            autocomplete="off"> <button class="search__button" type="submit"><svg width="20px"
                                height="20px">
                                <use xlink:href="images/sprite.svg#search-20"></use>
                            </svg></button>
                        <div class="search__border"></div>
                    </form>
                </div>
            </div>
            <div class="site-header__phone">
                <div class="site-header__phone-title">Hot Line</div>
                <div class="site-header__phone-number">+880 17 200 85127</div>
            </div>
        </div>
        <div class="site-header__nav-panel">
            <div class="nav-panel">
                <div class="nav-panel__container container">
                    <div class="nav-panel__row">
                        <div class="nav-panel__departments">
                            <!-- .departments -->
                            <div class="departments {{ request()->is('/') ? 'departments--opened departments--fixed' : '' }}"
                                data-departments-fixed-by="{{ request()->is('/') ? '.block-slideshow' : '' }}">
                                <div class="departments__body">
                                    <div class="departments__links-wrapper">
                                        <ul class="departments__links">

                                            @if (is_array($categoryBrandData) && count($categoryBrandData) > 0)
                                                @foreach ($categoryBrandData as $category)
                                                    <li class="departments__item">
                                                        <a
                                                            href="{{ url('category') }}/{{ $category['category_slug'] }}">{{ $category['category_name'] }}
                                                            <svg class="departments__link-arrow" width="6px"
                                                                height="9px">
                                                                <use
                                                                    xlink:href="images/sprite.svg#arrow-rounded-right-6x9">
                                                                </use>
                                                            </svg>
                                                        </a>
                                                        <div class="departments__megamenu departments__megamenu--xl">
                                                            <!-- .megamenu -->
                                                            <div class="megamenu megamenu--departments"
                                                                style="background-image: url('images/megamenu/megamenu-1.jpg');">
                                                                <div class="row">
                                                                    @if (is_array($category['brand']) && count($category['brand']) > 0)
                                                                        <div class="col-3">
                                                                            <ul
                                                                                class="megamenu__links megamenu__links--level--0">
                                                                                <li
                                                                                    class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">BRAND</a>
                                                                                    <ul
                                                                                        class="megamenu__links megamenu__links--level--1">
                                                                                        @foreach ($category['brand'] as $brand)
                                                                                            <li class="megamenu__item">
                                                                                                <a
                                                                                                    href="{{ url('shops') }}/{{ $category['category_slug'] }}/{{ $brand['brand_slug'] ?? '#' }}">{{ $brand['brand_name'] ?? 'N/A' }}
                                                                                                </a>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <!-- .megamenu / end -->
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @else
                                                <p>No category brand data available.</p>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <button class="departments__button"><svg class="departments__button-icon" width="18px"
                                        height="14px">
                                        <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                    </svg> Shop By Category <svg class="departments__button-arrow" width="9px"
                                        height="6px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                    </svg>
                                </button>
                            </div>
                            <!-- .departments / end -->
                        </div>
                        <!-- .nav-links -->
                        <div class="nav-panel__nav-links nav-links">
                            <ul class="nav-links__list">
                                <li class="nav-links__item">
                                    <a class="nav-link" href="{{ route('home.index') }}">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="nav-links__item">
                                    <a class="nav-link" href="{{ route('shop') }}"><span>Shop</span>
                                    </a>
                                </li>
                                <li class="nav-links__item nav-links__item--with-submenu">
                                    <a href="#">
                                        <span>Pages
                                            <svg class="nav-links__arrow" width="9px" height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6">
                                                </use>
                                            </svg>
                                        </span>
                                    </a>
                                    <div class="nav-links__menu"><!-- .menu -->
                                        <ul class="menu menu--layout--classic">
                                            <li>
                                                <a href="{{ url('page') }}/terms-conditions">Terms & Conditions</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('page') }}/payment-options	">Payment options</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('page') }}/refund-return-policy	">Refund & Return
                                                    Policy</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('page') }}/terms-of-services">Termes of Service</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('page') }}/privacy-policy">Pivacy Policy</a>
                                            </li>
                                        </ul>
                                        <!-- .menu / end -->
                                    </div>
                                </li>
                                <li class="nav-links__item">
                                    <a href="{{ route('about.us') }}">
                                        <span>About Us</span>
                                    </a>
                                </li>
                                <li class="nav-links__item">
                                    <a href="{{ route('contact.us') }}">
                                        <span>Contact Us</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- .nav-links / end -->
                        <div class="nav-panel__indicators">
                            <div class="indicator">
                                <a href="wishlist.html" class="indicator__button">
                                    <span class="indicator__area">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="images/sprite.svg#heart-20"></use>
                                        </svg>
                                        <span class="indicator__value">0</span>
                                    </span>
                                </a>
                            </div>
                            <div class="indicator indicator--trigger--click" id="{{ !request()->is('cart') ? 'cartViewButton' : '' }}">
                                <a class="indicator__button">
                                    <span class="indicator__area">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="indicator__value" id="cartCount">{{ $cartCount }}</span>
                                    </span>
                                </a>
                                <div class="indicator__dropdown">
                                    <!-- .dropcart -->
                                    @if ($cartCount > 0 && !request()->is('cart'))
                                        <div class="dropcart">
                                            <div id="headerCartList">
                                                {{-- <div class="dropcart__products-list">
                                                    <div class="dropcart__product">
                                                        <div class="dropcart__product-image"><a
                                                                href="product.html"><img
                                                                    src="{{ asset('public') }}/coot_assets/images/products/product-1.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name"><a
                                                                    href="product.html">Electric Planer Brandix
                                                                    KL370090G 300 Watts</a></div>
                                                            <ul class="dropcart__product-options">
                                                                <li>Color: Yellow</li>
                                                                <li>Material: Aluminium</li>
                                                            </ul>
                                                            <div class="dropcart__product-meta"><span
                                                                    class="dropcart__product-quantity">2</span> x <span
                                                                    class="dropcart__product-price">$699.00</span>
                                                            </div>
                                                        </div><button type="button"
                                                            class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"><svg
                                                                width="10px" height="10px">
                                                                <use xlink:href="images/sprite.svg#cross-10"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="dropcart__product">
                                                        <div class="dropcart__product-image"><a
                                                                href="product.html"><img
                                                                    src="{{ asset('public') }}/coot_assets/images/products/product-2.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name"><a
                                                                    href="product.html">Undefined Tool IRadix DPS3000SY
                                                                    2700 watts</a></div>
                                                            <div class="dropcart__product-meta"><span
                                                                    class="dropcart__product-quantity">1</span> x <span
                                                                    class="dropcart__product-price">$849.00</span>
                                                            </div>
                                                        </div><button type="button"
                                                            class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"><svg
                                                                width="10px" height="10px">
                                                                <use xlink:href="images/sprite.svg#cross-10"></use>
                                                            </svg></button>
                                                    </div>
                                                    <div class="dropcart__product">
                                                        <div class="dropcart__product-image"><a
                                                                href="product.html"><img
                                                                    src="{{ asset('public') }}/coot_assets/images/products/product-5.jpg"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="dropcart__product-info">
                                                            <div class="dropcart__product-name"><a
                                                                    href="product.html">Brandix
                                                                    Router Power Tool
                                                                    2017ERXPK</a></div>
                                                            <ul class="dropcart__product-options">
                                                                <li>Color: True Red</li>
                                                            </ul>
                                                            <div class="dropcart__product-meta"><span
                                                                    class="dropcart__product-quantity">3</span> x <span
                                                                    class="dropcart__product-price">$1,210.00</span>
                                                            </div>
                                                        </div><button type="button"
                                                            class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon"><svg
                                                                width="10px" height="10px">
                                                                <use xlink:href="images/sprite.svg#cross-10"></use>
                                                            </svg></button>
                                                    </div>
                                                </div>

                                                <div class="dropcart__totals">
                                                    <table>
                                                        <tr>
                                                            <th>Subtotal</th>
                                                            <td>$5,877.00</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Shipping</th>
                                                            <td>$25.00</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Tax</th>
                                                            <td>$0.00</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Total</th>
                                                            <td>$5,902.00</td>
                                                        </tr>
                                                    </table>
                                                </div> --}}
                                            </div>

                                            <div class="dropcart__buttons">
                                                <a class="btn btn-secondary" href="{{ route('cart.list') }}">View Cart</a>
                                                <a class="btn btn-primary" href="{{ route('checkout') }}">Checkout</a>
                                            </div>
                                        </div>
                                    @endif
                                    <!-- .dropcart / end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
