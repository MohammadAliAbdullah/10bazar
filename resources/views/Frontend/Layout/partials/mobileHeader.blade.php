<header class="site__header d-lg-none">
    <div class="mobile-header mobile-header--sticky mobile-header--stuck">
        <div class="mobile-header__panel">
            <div class="container">
                <div class="mobile-header__body">
                    <button class="mobile-header__menu-button">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    <a class="mobile-header__logo" href="{{ url('/') }}">
                        <img src="{{ asset('public') }}/assets/10_bazar_logo.jpg" alt="logo">
                    </a>
                    <div class="mobile-header__search">

                        {!! Form::open(['method' => 'POST', 'route' => 'search', 'class' => 'mobile-header__search-form']) !!}
                        <input class="mobile-header__search-input" name="search"
                            placeholder="Search for products, brands and more" aria-label="Site search" type="text"
                            autocomplete="off">
                        <button class="mobile-header__search-button mobile-header__search-button--submit"
                            type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                        <button class="mobile-header__search-button mobile-header__search-button--close" type="button">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        <div class="mobile-header__search-body"></div>
                        {!! Form::close() !!}
                    </div>
                    <div class="mobile-header__indicators">
                        <div class="indicator indicator--mobile-search indicator--mobile d-sm-none"><button
                                class="indicator__button">
                                <span class="indicator__area">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </button>
                        </div>
                        <div class="indicator indicator--mobile d-sm-flex d-none">
                            <a href="wishlist.html" class="indicator__button">
                                <span class="indicator__area">
                                    <i class="far fa-heart"></i>
                                    <span class="indicator__value">0</span>
                                </span>
                            </a>
                        </div>
                        <div class="indicator indicator--mobile">
                            <a href="{{ route('cart.list') }}" class="indicator__button">
                                <span class="indicator__area">
                                    <i class="fas fa-shopping-cart"></i>
                                    <span class="indicator__value" id="cartCountMobileHeader">{{ $cartCount }}</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
