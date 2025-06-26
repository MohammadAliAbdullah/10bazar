@extends('Frontend.Layout.master')

@section('content')
    <!-- Breadcrumb Start -->
    @include('Frontend.components.breadcrumb', ['page' => __('Blog'), 'subPage' => __('Blog')])
    <!-- Breadcrumb End -->

    <!-- Blog Detail Section Start -->
    <section class="cartbg">
        <div class="container blogbg">
            <div class="row">
                <div class="col-lg-9">
                    <div class="blogdetails pb-3">
                        <h2>{{ $value->title }}</h2>
                        <img src="{{ asset('public/images/blogs/' . $value->images) }}" class="img-fluid" alt="{{ $value->title }}">
                        <p class="text-justify">{!! $value->content !!}</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="block-sidebar__item">
                        <div class="widget-posts widget">
                            <h4 class="widget__title">{{ __('Latest Posts') }}</h4>
                            <div class="widget-posts__list">
                                @foreach ($recents as $recent)
                                    <div class="widget-posts__item">
                                        <div class="widget-posts__image">
                                            <a href="{{ url('blogs/' . $recent->slug) }}">
                                                <img src="{{ asset('public/images/blogs/' . $recent->images) }}"
                                                     alt="{{ $recent->title }}">
                                            </a>
                                        </div>
                                        <div class="widget-posts__info">
                                            <div class="widget-posts__name">
                                                <a href="{{ url('blogs/' . $recent->slug) }}">
                                                    {{ Str::limit($recent->title, 50) }}
                                                </a>
                                            </div>
                                            <div class="widget-posts__date">
                                                {{ \Carbon\Carbon::parse($recent->created_at)->format('F d, Y') }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- You can add payment or CTA section here if needed -->

            </div>
        </div>
    </section>
    <!-- Blog Detail Section End -->
@endsection

@section('style')
    <link href="{{ asset('public/asset/css/blog.css') }}" rel="stylesheet">
@endsection
