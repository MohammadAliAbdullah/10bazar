<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/bootstrap-4.2.1/css/bootstrap.min.css">
    <style>
        html,
        body {
            height: 100%;
        }

        .global-container {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f5f5f5;
        }

        form {
            padding-top: 10px;
            font-size: 14px;
            margin-top: 30px;
        }

        .card-title {
            font-weight: 300;
        }

        .btn {
            font-size: 14px;
            margin-top: 20px;
        }


        .login-form {
            width: 330px;
            margin: 20px;
        }

        .sign-up {
            text-align: center;
            padding: 20px 0 0;
        }

        .alert {
            margin-bottom: -30px;
            font-size: 13px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h3 class="card-title text-center">Log in</h3>
                <div class="text-center font-weight-bold text-danger">10 BAZAR</div>
                <div class="card-text">

                    <form method="POST" action="{{ url('myadminpanel/login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" placeholder="Enter your email address..."
                                class="form-control form-control-sm" id="email" name="email"
                                value="{{ old('email') }}" required autofocus autocomplete="off">
                            @if ($errors->has('email'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">password address</label>
                            <input type="password" placeholder="Enter your password..."
                                class="form-control form-control-sm" id="password" name="password"
                                value="{{ old('password') }}" required autofocus autocomplete="off">
                            @if ($errors->has('password'))
                                <span class="text-danger" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                        {{-- <div class="sign-up">
                            Don't have an account? <a href="#">Create One</a>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
