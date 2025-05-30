@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Register', 'subPage' => 'My Account'])
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex">
                    <div class="card flex-grow-1 mb-md-0">
                        <div class="card-body">
                            <h3 class="card-title">Register</h3>
                            @include('include.message')
                            <form method="post" action="{{ route('mypanel.register_user') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="">Full Name*</label>
                                    <input type="text" class="form-control" name="name" required
                                        placeholder="Please Enter Your Name">
                                </div>
                                <div class="form-group">
                                    <label for="">Phone Number*</label>
                                    <input type="number" class="form-control" name="phone" required
                                        placeholder="Please Enter Your Phone">
                                </div>
                                <div class="form-group">
                                    <label for="">Email Address*</label>
                                    <input type="email" class="form-control" name="email" required
                                        placeholder="Please Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <label for="">Password*</label>
                                    <input type="password" name="password" required class="form-control"
                                        placeholder="Please Enter Your Password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" name="rememberme" class="form-check-input" id="exampleCheck1"
                                        checked>
                                    <label class="form-check-label" for="exampleCheck1">I agree to 10 Bazar Ltd
                                        <a href="">Terms of Use</a> and <a href="">Privacy Policy</a>
                                    </label>
                                </div>
                                <button class="btn btn-primary mt-4" type="submit">Registration</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex mt-4 mt-md-0">
                    <div class="card flex-grow-1 mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Or, Login your account</h3>
                            <div class="form-group">
                                <div class="social-login">
                                    <a href="{{ route('login') }}" class="email"><i
                                            class="fas fa-envelope text-white"></i>Login with Email</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
