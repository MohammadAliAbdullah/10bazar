@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Login', 'subPage' => 'My Account'])
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card flex-grow-1 mb-md-0">
                        <div class="card-body">
                            <h3 class="card-title">Login</h3>
                            @include('include.message')
                            <form method="post" action="{{ route('mypanel.loginuser') }}">
                                @csrf
                                <div class="form-group"><label>Email address</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <small class="form-text text-muted">
                                        <a href="#">Forgotten Password</a>
                                    </small>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <span class="form-check-input input-check">
                                            <span class="input-check__body">
                                                <input class="input-check__input" name="rememberme" type="checkbox"
                                                    id="login-remember">
                                                <span class="input-check__box"></span>
                                                <svg class="input-check__icon" width="9px" height="7px">
                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                </svg>
                                            </span>
                                        </span>
                                        <label class="form-check-label" for="login-remember">Remember Me</label>
                                    </div>
                                </div><button type="submit" class="btn btn-primary mt-4">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex mt-4 mt-md-0">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Or, Create a account</h3>
                            <div class="form-group">
                                <div class="social-login">
                                    <a href="{{ route('register.user') }}" class="email"><i
                                            class="fas fa-envelope text-white"></i>Sign up with Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
