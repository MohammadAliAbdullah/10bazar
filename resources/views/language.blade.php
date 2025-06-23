<!DOCTYPE html>
@php
    $rtlLocales = ['ar', 'ur'];
    $isRtl = in_array(app()->getLocale(), $rtlLocales);
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ $isRtl ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Welcome Page') }}</title>

    <!-- Bootstrap -->
    @if ($isRtl)
        <link href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" rel="stylesheet">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @endif

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Optional custom RTL tweaks -->
    @if ($isRtl)
        <style>
            body { direction: rtl; text-align: right; }
            .text-left { text-align: right !important; }
            .text-right { text-align: left !important; }
        </style>
    @endif
</head>

<body class="bg-light">
    <div class="container py-5">
        <!-- Language Switcher -->
        <div class="d-flex justify-content-end mb-3">
            <form method="GET" action="{{ route('lang.switch') }}">
                <label class="mr-2">{{ __('Select Language') }}:</label>
                <select name="lang" onchange="this.form.submit()" class="form-control form-control-sm d-inline w-auto">
                    @foreach (['en'=>'🇬🇧 English','fr'=>'🇫🇷 Français','ru'=>'🇷🇺 Русский','es'=>'🇪🇸 Español','de'=>'🇩🇪 Deutsch','bn'=>'🇧🇩 বাংলা','hi'=>'🇮🇳 हिंदी','ur'=>'🇵🇰 اردو','ar'=>'🇸🇦 العربية'] as $key => $label)
                        <option value="{{ $key }}" {{ app()->getLocale() == $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </form>
        </div>

        <!-- Main Content -->
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">{{ __('Welcome Page') }}</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ __('We are glad to have you here!') }}</h5>
                <p class="card-text">
                    {{ __('Welcome to our website, :Name', ['name' => 'Amanda']) }}
                </p>

                <p class="card-text">
                    <strong>{{ __('Apple Count Example') }}:</strong><br>
                    {{ trans_choice('{0} There :form no apples|{1} There :form just :count apple|[2,19] There :form :count apples', 5, ['form' => $isRtl ? 'هي' : 'are']) }}
                </p>

                <p class="card-text">
                    <strong>{{ __('Today\'s Date Message') }}:</strong><br>
                    {{ $date_message ?? now()->format('Y-m-d') }}
                </p>

                <hr>

                <h5>{{ __('Why Choose Us?') }}</h5>
                <ul>
                    <li>{{ __('High-quality services tailored to your needs.') }}</li>
                    <li>{{ __('24/7 customer support in multiple languages.') }}</li>
                    <li>{{ __('Secure and reliable platform.') }}</li>
                    <li>{{ __('Trusted by thousands of users worldwide.') }}</li>
                </ul>

                <h5 class="mt-4">{{ __('Contact Us') }}</h5>
                <p>{{ __('Have questions? Reach out via our contact page or email us anytime.') }}</p>

                <a href="#" class="btn btn-success">{{ __('Explore Now') }}</a>
            </div>
        </div>

        <footer class="mt-4 text-center text-muted">
            &copy; {{ date('Y') }} {{ __('All rights reserved.') }}
        </footer>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
