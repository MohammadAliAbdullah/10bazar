@extends('Frontend.Layout.master')
@if (!empty($page->meta_title))
    @section('meta_title', $page->meta_title)
@else
    @section('meta_title', $seo->meta_title)
@endif
@if (!empty($page->meta_keyword))
    @section('meta_keywords', $page->meta_keyword)
@else
    @section('meta_keywords', $seo->meta_keyword)
@endif
@if (!empty($page->meta_description))
    @section('meta_description', $page->meta_description)
@else
    @section('meta_description', $seo->meta_description)
@endif
@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Shop', 'subPage' => 'abdullah'])

    <div class="block">
        <div class="container">
            <p>
                {!! $page->content !!}
            </p>
        </div>
    </div>
    <!-- main-section-area-start -->

@endsection
