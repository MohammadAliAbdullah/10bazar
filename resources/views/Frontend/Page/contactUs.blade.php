@extends('../Frontend.Layout.master')

@section('content')
    <div class="block-map block">
        <div class="block-map__body">
            <iframe
                src="https://maps.google.com/maps?q=Holbrook-Palmer%20Park&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>
        </div>
    </div>

    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home') }}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item"><a href="#">{{ __('Contact') }}</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Contact Us') }}</li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>{{ __('Contact Us') }}</h1>
            </div>
        </div>
    </div>

    <div class="block">
        <div class="container">
            <div class="card mb-0">
                <div class="card-body contact-us">
                    <div class="contact-us__container">
                        <div class="row">
                            <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                <h4 class="contact-us__header card-title">{{ __('Our Address') }}</h4>
                                <div class="contact-us__address">
                                    <p>
                                        {{ __('Phone') }}: {{ $apps->phone }}<br>
                                        {{ __('Email') }}: {{ $apps->email ?? '' }}<br>
                                        {{ __('Address') }}: {{ $apps->address ?? '' }}
                                    </p>
                                    <p>
                                        <strong>{{ __('Opening Hours') }}</strong><br>
                                        {{ __('Monday to Friday') }}: 8am–8pm<br>
                                        {{ __('Saturday') }}: 8am–6pm<br>
                                        {{ __('Sunday') }}: 10am–4pm
                                    </p>
                                    <p>
                                        <strong>{{ __('Comment') }}</strong><br>
                                        {{ __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit suscipit mi, non tempor nulla finibus eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit.') }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="contact-us__header card-title">{{ __('Leave us a Message') }}</h4>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="form-name">{{ __('Your Name') }}</label>
                                            <input type="text" id="form-name" class="form-control" placeholder="{{ __('Your Name') }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="form-email">{{ __('Email') }}</label>
                                            <input type="email" id="form-email" class="form-control" placeholder="{{ __('Email Address') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-subject">{{ __('Subject') }}</label>
                                        <input type="text" id="form-subject" class="form-control" placeholder="{{ __('Subject') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="form-message">{{ __('Message') }}</label>
                                        <textarea id="form-message" class="form-control" rows="4" placeholder="{{ __('Write your message here') }}"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">{{ __('Send Message') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
