@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Login'), 'subPage' => __('My Account')])
    <div class="block">
        <div class="container">
            <div class="row">
                <!-- Login Form -->
                <div class="col-md-6 d-flex">
                    <div class="card flex-grow-1 mb-md-0">
                        <div class="card-body">
                            <h3 class="card-title">{{ __('Login') }}</h3>
                            @include('include.message')
                            <form method="post" action="{{ route('mypanel.loginuser') }}">
                                @csrf
                                <div class="form-group">
                                    <label>{{ __('Email address or Phone') }}</label>
                                    <input type="text" name="login" class="form-control" placeholder="{{ __('Enter email or phone') }}">
                                </div>
                                <div class="form-group">
                                    <label>{{ __('Password') }}</label>
                                    <input type="password" name="password" class="form-control" placeholder="{{ __('Password') }}">
                                    <small class="form-text text-muted">
                                        <a href="#">{{ __('Forgotten Password?') }}</a>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <span class="form-check-input input-check">
                                            <span class="input-check__body">
                                                <input class="input-check__input" name="rememberme" type="checkbox" id="login-remember">
                                                <span class="input-check__box"></span>
                                                <svg class="input-check__icon" width="9px" height="7px">
                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                </svg>
                                            </span>
                                        </span>
                                        <label class="form-check-label" for="login-remember">{{ __('Remember Me') }}</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-4">{{ __('Login') }}</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Register Prompt -->
                <div class="col-md-6 d-flex mt-4 mt-md-0">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">{{ __('Or, Create an Account') }}</h3>
                            <div class="form-group">
                                <div class="social-login">
                                    <a href="{{ route('register.user') }}" class="email">
                                        <i class="fas fa-envelope text-white"></i> {{ __('Sign up with Email') }}
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
