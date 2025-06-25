@php
    $hotline = $apps->phone ?? '';
    $cleanHotline = preg_replace('/\D/', '', $hotline);
    $whatsappNumber = '880' . ltrim($cleanHotline, '0');
    $categoryBrandData = Cache::get('category_brand_data', []);
@endphp
<header class="site__header d-lg-block d-none">
    <div class="site-header">
        <div class="site-header__topbar topbar">
            <div class="topbar__container container">
                <div class="topbar__row">
                    <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="{{ route('track') }}">
                            {{ __('Track Order') }}
                        </a>
                    </div>
                    <div class="topbar__item topbar__item--link">
                        <a class="topbar-link" href="{{ route('blog.index') }}">{{ __('Blog') }}</a>
                    </div>
                    <div class="topbar__spring"></div>
                    <div class="topbar__item">
                        <div class="topbar-dropdown">
                            <button class="topbar-dropdown__btn" type="button">{{ __('Currency') }}:
                                <span class="topbar__item-value">BDT</span>
                            </button>
                        </div>
                    </div>
                    <div class="topbar__item">
                        @php
                            $languages = [
                                'en' => ['name' => 'English', 'icon' => 'flag-1'],
                                'bn' => ['name' => 'বাংলা', 'icon' => 'flag-2'],
                                'ar' => ['name' => 'العربية', 'icon' => 'flag-4'],
                                'ur' => ['name' => 'اردو', 'icon' => 'flag-3'],
                                'hi' => ['name' => 'हिंदी', 'icon' => 'flag-5'],
                                'fr' => ['name' => 'Français', 'icon' => 'flag-11'],
                                'zh' => ['name' => '中文', 'icon' => 'flag-7'],
                                'ru' => ['name' => 'Русский', 'icon' => 'flag-10'],
                                'id' => ['name' => 'Bahasa', 'icon' => 'flag-12'],
                                'fa' => ['name' => 'فارسی', 'icon' => 'flag-6'],
                                'es' => ['name' => 'Español', 'icon' => 'flag-9'],
                            ];
                        @endphp

                        <div class="topbar-dropdown">
                            <button class="topbar-dropdown__btn" type="button">
                                {{ __('Language') }}:
                                <span class="topbar__item-value">{{ strtoupper(app()->getLocale()) }}</span>
                            </button>

                            <div class="topbar-dropdown__body">
                                <ul class="menu menu--layout--topbar menu--with-icons">
                                    @foreach ($languages as $key => $lang)
                                        <li>
                                            <a href="{{ route('lang.switch', ['lang' => $key]) }}">
                                                <div class="menu__icon">
                                                    <img srcset="{{ asset('public/coot_assets/icons/' . $lang['icon'] . '.png') }} 1x, {{ asset('public/coot_assets/icons/' . $lang['icon'] . '@2x.png') }} 2x"
                                                        src="{{ asset('public/coot_assets/icons/' . $lang['icon'] . '.png') }}"
                                                        alt="{{ $lang['name'] }}" width="20" height="20">
                                                </div>
                                                {{ $lang['name'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        {{-- <div class="topbar-dropdown">
                            <button class="topbar-dropdown__btn" type="button">{{ __('Language') }}:
                                 <span class="topbar__item-value">{{ strtoupper(app()->getLocale()) }}</span> <svg width="7px" height="5px"><use xlink:href="images/sprite.svg#arrow-rounded-down-7x5"></use></svg>
                                </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="site-header__middle container">
            <div class="site-header__logo">
                <a href="{{ url('/') }}" class="site-header__logo-link">
                    <img src="{{ isset($apps->logo) ? asset($apps->logo) : '' }}">
                </a>
            </div>
            <div class="site-header__search">
                <div class="search">
                    {!! Form::open(['method' => 'POST', 'route' => 'search', 'class' => 'search__form']) !!}
                    <input class="search__input" name="search"
                        placeholder="{{ __('Search for products, brands and more') }}" aria-label="Site search"
                        type="text" autocomplete="off">
                    <button class="search__button" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                    <div class="search__border"></div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="site-header__phone">
                <div class="site-header__phone-title">{{ __('Hot Line') }}</div>
                <div class="site-header__phone-number">{{ $apps->phone ?? '' }}</div>
            </div>
        </div>
        <div class="site-header__nav-panel">
            <div class="nav-panel">
                <div class="nav-panel__container container">
                    <div class="nav-panel__row">
                        <div class="nav-panel__departments">
                            <div class="departments {{ request()->is('/') ? 'departments--opened departments--fixed' : '' }}"
                                data-departments-fixed-by="{{ request()->is('/') ? '.block-slideshow' : '' }}">
                                <div class="departments__body">
                                    <div class="departments__links-wrapper">
                                        <ul class="departments__links">
                                            @if (is_array($categoryBrandData) && count($categoryBrandData) > 0)
                                                @foreach ($categoryBrandData as $category)
                                                    <li class="departments__item">
                                                        <a href="{{ url('category') }}/{{ $category['category_slug'] }}">{{ $category['category_name'] }}</a>
                                                        <div class="departments__megamenu departments__megamenu--xl">
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
                                                                                                    href="{{ url('shops') }}/{{ $category['category_slug'] }}/{{ $brand['brand_slug'] ?? '#' }}">{{ $brand['brand_name'] ?? 'N/A' }}</a>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @else
                                                <p>{{ __('No category brand data available.') }}</p>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <button class="departments__button">
                                    <svg class="departments__button-icon" width="18px" height="14px">
                                        <use xlink:href="images/sprite.svg#menu-18x14"></use>
                                    </svg>
                                    {{ __('Shop By Category') }}
                                    <svg class="departments__button-arrow" width="9px" height="6px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="nav-panel__nav-links nav-links">
                            <ul class="nav-links__list">
                                <li class="nav-links__item">
                                    <a class="nav-link" href="{{ route('home.index') }}">
                                        <span>{{ __('Home') }}</span>
                                    </a>
                                </li>
                                <li class="nav-links__item">
                                    <a class="nav-link" href="{{ route('shop') }}">
                                        <span>{{ __('Shop') }}</span>
                                    </a>
                                </li>
                                <li class="nav-links__item nav-links__item--with-submenu">
                                    <a href="#">
                                        <span>{{ __('Pages') }}<svg class="nav-links__arrow" width="9px"
                                                height="6px">
                                                <use xlink:href="images/sprite.svg#arrow-rounded-down-9x6"></use>
                                            </svg></span>
                                    </a>
                                    <div class="nav-links__menu">
                                        <ul class="menu menu--layout--classic">
                                            <li><a
                                                    href="{{ url('page/terms-conditions') }}">{{ __('Terms & Conditions') }}</a>
                                            </li>
                                            <li><a
                                                    href="{{ url('page/payment-options') }}">{{ __('Payment options') }}</a>
                                            </li>
                                            <li><a
                                                    href="{{ url('page/refund-return-policy') }}">{{ __('Refund & Return Policy') }}</a>
                                            </li>
                                            <li><a
                                                    href="{{ url('page/terms-of-services') }}">{{ __('Terms of Service') }}</a>
                                            </li>
                                            <li><a
                                                    href="{{ url('page/privacy-policy') }}">{{ __('Privacy Policy') }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-links__item">
                                    <a href="{{ route('about.us') }}">
                                        <span>{{ __('About Us') }}</span>
                                    </a>
                                </li>
                                <li class="nav-links__item">
                                    <a href="{{ route('contact.us') }}">
                                        <span>{{ __('Contact Us') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-panel__indicators">
                            <div class="indicator indicator--trigger--click">
                                <a class="indicator__button">
                                    <span class="indicator__area"><i class="fas fa-user"></i></span>
                                </a>
                                <div class="indicator__dropdown">
                                    <div class="dropcart">
                                        <div class="dropcart__buttons">
                                            @if (Auth::guard('mypanel')->user())
                                                <a class="btn btn-secondary"
                                                    href="{{ route('mypanel.users') }}">{{ __('Profile') }}</a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('mypanel.elogout') }}">{{ __('Logout') }}</a>
                                            @else
                                                <a class="btn btn-secondary"
                                                    href="{{ route('login') }}">{{ __('Login') }}</a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('register.user') }}">{{ __('Register') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="indicator indicator--trigger--click"
                                id="{{ !request()->is('cart') ? 'cartViewButton' : '' }}">
                                <a class="indicator__button">
                                    <span class="indicator__area">
                                        <i class="fas fa-shopping-cart"></i>
                                        <span class="indicator__value"
                                            id="cartCountHeader">{{ $cartCount }}</span>
                                    </span>
                                </a>
                                <div class="indicator__dropdown">
                                    @if (!request()->is('cart'))
                                        <div class="dropcart">
                                            <div id="headerCartList"></div>
                                            <div class="dropcart__buttons">
                                                <a class="btn btn-secondary"
                                                    href="{{ route('cart.list') }}">{{ __('View Cart') }}</a>
                                                <a class="btn btn-primary"
                                                    href="{{ route('checkout') }}">{{ __('Checkout') }}</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
