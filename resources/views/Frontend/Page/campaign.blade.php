@extends('Frontend.Layout.master')
@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Campaign'), 'subPage' => __('Campaign')])
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h3 class="text-center">{{ __('Campaign') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="accordion">
                                <h3 class="accordion-header">{{ __('Campaign') }}</h3>
                                <div class="accordion-body">
                                    <p>{{ __('Campaigns are special events or promotions that a business runs to attract customers and boost sales. They can include discounts, limited-time offers, or themed events that encourage customers to engage with the brand. Campaigns are often used to promote new products, clear out inventory, or celebrate holidays and special occasions. They can be communicated through various channels such as social media, email marketing, and in-store displays. The goal of a campaign is to create excitement and urgency among customers, leading to increased foot traffic, online visits, and ultimately, sales.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-header">
                                <h3 class="text-center">{{ __('Campaign List') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if ($campaigns->isEmpty())
                            <div class="col-lg-12">
                                <div class="alert alert-warning text-center">
                                    <strong>{{ __('No Campaigns Found') }}</strong>
                                </div>
                            </div>
                        @endif
                        {{-- Display campaigns --}}
                        @foreach ($campaigns as $campaign)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="campaign-area">
                                    <a href="{{ route('campaign.slug', $campaign->slug) }}">
                                        <img src="{{ asset('public/images/campaign') }}/{{ $campaign->banner }}"
                                            alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            {{ $campaigns->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection