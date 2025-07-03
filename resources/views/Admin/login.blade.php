<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{__('Login')}} - {{ $apps->site_title }}</title>
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/bootstrap-4.2.1/css/bootstrap.min.css') }}" />
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container-center {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            width: 100%;
            max-width: 360px;
            padding: 2rem;
            border: none;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-title {
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .brand {
            font-size: 1.25rem;
            color: #dc3545;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
        }

        .form-group label {
            font-weight: 500;
        }

        .alert {
            font-size: 0.875rem;
        }
    </style>
</head>

<body>
    <main class="container-center">
        <section class="login-card">
            <h2 class="login-title text-center">{{ __('Log in') }}</h2>
            <div class="brand">{{ $apps->site_title }}</div>
            <form method="POST" action="{{ url('myadminpanel/login') }}" novalidate>
                @csrf
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" id="email" name="email" class="form-control form-control-sm"
                        placeholder="Enter your email..." value="{{ old('email') }}" required autofocus autocomplete="off" />
                    @if ($errors->has('email'))
                        <div class="text-danger small mt-1">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control form-control-sm"
                        placeholder="Enter your password..." required autocomplete="off" />
                    @if ($errors->has('password'))
                        <div class="text-danger small mt-1">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" id="remember" class="form-check-input" />
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </form>

            <!-- Optional sign-up link -->
            <!-- <div class="text-center mt-3">
                <small>Don't have an account? <a href="#">Create One</a></small>
            </div> -->
        </section>
    </main>
</body>
</html>
