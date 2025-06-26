@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Register'), 'subPage' => __('My Account')])
    <div class="block">
        <div class="container">
            <div class="row">
                <!-- Registration Form -->
                <div class="col-md-6 d-flex">
                    <div class="card flex-grow-1 mb-md-0">
                        <div class="card-body">
                            <h3 class="card-title">{{ __('Register') }}</h3>
                            @include('include.message')
                            <form method="post" action="{{ route('mypanel.register_user') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="name">{{ __('Full Name') }}*</label>
                                    <input type="text" id="name" class="form-control" name="name" required placeholder="{{ __('Please Enter Your Name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="phone">{{ __('Phone Number') }}*</label>
                                    <input type="number" id="phone" class="form-control" name="phone" required placeholder="{{ __('Please Enter Your Phone') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">{{ __('Email Address') }}*</label>
                                    <input type="email" id="email" class="form-control" name="email" required placeholder="{{ __('Please Enter Your Email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">{{ __('Password') }}*</label>
                                    <input type="password" id="password" name="password" required class="form-control" placeholder="{{ __('Please Enter Your Password') }}">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="rememberme" class="form-check-input" id="termsCheck" checked>
                                    <label class="form-check-label" for="termsCheck">
                                        {{ __('I agree to 10 Bazar Ltd') }}
                                        <a href="#">{{ __('Terms of Use') }}</a> {{ __('and') }}
                                        <a href="#">{{ __('Privacy Policy') }}</a>
                                    </label>
                                </div>
                                <button class="btn btn-primary mt-4" type="submit">{{ __('Registration') }}</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Login Link -->
                <div class="col-md-6 d-flex mt-4 mt-md-0">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">{{ __('Or, Login to your account') }}</h3>
                            <div class="form-group">
                                <div class="social-login">
                                    <a href="{{ route('login') }}" class="email">
                                        <i class="fas fa-envelope text-white"></i> {{ __('Login with Email') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
