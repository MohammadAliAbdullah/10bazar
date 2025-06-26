@extends('Frontend.Layout.master')

@section('meta_title', !empty($page->meta_title) ? $page->meta_title : $seo->meta_title)
@section('meta_keywords', !empty($page->meta_keyword) ? $page->meta_keyword : $seo->meta_keyword)
@section('meta_description', !empty($page->meta_description) ? $page->meta_description : $seo->meta_description)

@section('content')
    @include('Frontend.components.breadcrumb', [
        'page' => __('home'),
        'subPage' => __('warranty_policy')
    ])
    <div class="block">
        <div class="container">
            <p>{!! $page->content !!}</p>
        </div>
    </div>
@endsection
