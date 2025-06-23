<footer class="site__footer">
    <div class="site-footer">
        <div class="container">
            <div class="site-footer__widgets">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="site-footer__widget footer-contacts">
                            <h5 class="footer-contacts__title">{{ __('Contact Us') }}</h5>
                            <ul class="footer-contacts__contacts">
                                <li><i class="footer-contacts__icon fas fa-globe-americas"></i>{{ $apps->address ?? '' }}</li>
                                <li><i class="footer-contacts__icon far fa-envelope"></i> {{ $apps->email ?? '' }}</li>
                                <li><i class="footer-contacts__icon fas fa-mobile-alt"></i> {{ $apps->phone ?? '' }}</li>
                                <li><i class="footer-contacts__icon far fa-clock"></i> {{ __('Sat-Thu 09:00am - 7:00pm') }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">{{ __('Information') }}</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="{{ route('faq') }}" class="footer-links__link">{{ __('FAQ') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('Delivery Information') }}</a></li>
                                <li class="footer-links__item"><a href="{{ url('page/privacy-policy') }}" class="footer-links__link">{{ __('Privacy Policy') }}</a></li>
                                <li class="footer-links__item"><a href="{{ route('warranty_policy') }}" class="footer-links__link">{{ __('Warranty Policy') }}</a></li>
                                <li class="footer-links__item"><a href="{{ route('brand') }}" class="footer-links__link">{{ __('Brands') }}</a></li>
                                <li class="footer-links__item"><a href="{{ route('contact.us') }}" class="footer-links__link">{{ __('Contact Us') }}</a></li>
                                <li class="footer-links__item"><a href="{{ url('page/refund-return-policy') }}" class="footer-links__link">{{ __('Returns') }}</a></li>
                                <li class="footer-links__item"><a href="{{ route('contact.us') }}" class="footer-links__link">{{ __('Site Map') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-6 col-md-3 col-lg-2">
                        <div class="site-footer__widget footer-links">
                            <h5 class="footer-links__title">{{ __('My Account') }}</h5>
                            <ul class="footer-links__list">
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('Store Location') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('Order History') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('Wish List') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('Newsletter') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('Specials') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('Gift Certificates') }}</a></li>
                                <li class="footer-links__item"><a href="#" class="footer-links__link">{{ __('Affiliate') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="site-footer__widget footer-newsletter">
                            <h5 class="footer-newsletter__title">{{ __('Newsletter') }}</h5>
                            <div class="footer-newsletter__text">
                                {{ __('Praesent pellentesque volutpat ex, vitae auctor lorem pulvinar mollis felis at lacinia.') }}
                            </div>

                            {!! Form::open(['method' => 'POST', 'route' => 'newsletter.store', 'class' => 'footer-newsletter__form']) !!}
                                <label class="sr-only" for="footer-newsletter-address">{{ __('Email Address') }}</label>
                                <input type="email" name="email" class="footer-newsletter__form-input form-control"
                                    id="footer-newsletter-address" placeholder="{{ __('Email Address...') }}">
                                <button type="submit" class="footer-newsletter__form-button btn btn-primary">
                                    {{ __('Subscribe') }}
                                </button>
                            {!! Form::close() !!}

                            <div class="footer-newsletter__text footer-newsletter__text--social">
                                {{ __('Follow us on social networks') }}
                            </div>
                            <ul class="footer-newsletter__social-links">
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--facebook">
                                    <a href="{{ socialh()->facebook ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--twitter">
                                    <a href="{{ socialh()->twitter ?? '#' }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--youtube">
                                    <a href="{{ socialh()->youtube ?? '#' }}" target="_blank"><i class="fab fa-youtube"></i></a>
                                </li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--instagram">
                                    <a href="{{ socialh()->instagram ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="footer-newsletter__social-link footer-newsletter__social-link--rss">
                                    <a href="{{ socialh()->linkedin ?? '#' }}" target="_blank"><i class="fab fa-linkedin-in text-white"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-footer__bottom">
                <div class="site-footer__copyright">
                    <a target="_blank" href="https://cootsoft.vercel.app">COOTSOFT</a>
                </div>
                <div class="site-footer__payments">
                    <img src="{{ asset('public/coot_assets/images/payments.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</footer>
