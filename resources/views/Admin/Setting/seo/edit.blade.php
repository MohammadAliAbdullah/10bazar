@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('SEO Config'),
        'parent' => __('Home'),
        'child' => __('SEO Config'),
        'button' => __('Back'),
        'button_icon' => 'lni lni-arrow-left',
        'route' => '#',
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('Admin.include.message')

                        {!! Form::model($config, [
                            'method' => 'PATCH',
                            'route' => ['madmin.seoconfigs.update', $config->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                        ]) !!}

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('meta_title', 'Meta Title') !!}
                                {!! Form::text('meta_title', null, ['class' => 'form-control', 'rows' => 2, 'required']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('meta_description', 'Meta Description') !!}
                                {!! Form::text('meta_description', null, ['class' => 'form-control', 'rows' => 2]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('meta_keyword', 'Meta Keyword') !!}
                                {!! Form::text('meta_keyword', null, ['class' => 'form-control', 'rows' => 2]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('google_webmaster', 'Google Webmaster') !!}
                                {!! Form::text('google_webmaster', null, ['class' => 'form-control', 'rows' => 2]) !!}
                                <p class="text-muted">Get it from <a href="https://search.google.com/search-console/about" target="_blank">Google Search Console</a></p>
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('bing_webmaster', 'Bing Webmaster') !!}
                                {!! Form::text('bing_webmaster', null, ['class' => 'form-control', 'rows' => 2]) !!}
                                <p class="text-muted">Get it from <a href="https://www.bing.com/webmasters/about" target="_blank">Bing Webmaster Tools</a></p>
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('yindex_webmaster', 'Yandex Webmaster') !!}
                                {!! Form::text('yindex_webmaster', null, ['class' => 'form-control', 'rows' => 2]) !!}
                                <p class="text-muted">Get it from <a href="https://webmaster.yandex.com/welcome/" target="_blank">Yandex Webmaster</a></p>
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('google_analytics', 'Google Analytics') !!}
                                {!! Form::text('google_analytics', null, ['class' => 'form-control', 'rows' => 2]) !!}
                                <p class="text-muted">Get it from <a href="https://analytics.google.com/analytics/web/" target="_blank">Google Analytics</a></p>
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('facebook_id', 'Facebook ID') !!}
                                {!! Form::text('facebook_id', null, ['class' => 'form-control', 'rows' => 2]) !!}
                                <p class="text-muted">Get it from <a href="https://www.facebook.com/" target="_blank">Facebook</a></p>
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('facebook_pixel', 'Facebook Pixel') !!}
                                {!! Form::text('facebook_pixel', null, ['class' => 'form-control', 'rows' => 2]) !!}
                                <p class="text-muted">Get it from <a href="https://developers.facebook.com/docs/facebook-pixel/" target="_blank">Facebook Pixel Docs</a></p>
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('tawk', 'Tawk') !!}
                                {!! Form::text('tawk', null, ['class' => 'form-control', 'rows' => 2]) !!}
                                <p class="text-muted">Get it from <a href="https://www.tawk.to/" target="_blank">Tawk.to</a></p>
                            </div>

                            <div class="form-group col-md-12">
                                {!! Form::label('other_code', 'Others') !!}
                                {!! Form::text('other_code', null, ['class' => 'form-control', 'rows' => 2]) !!}
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-info">Update</button>
                            <button type="button" onclick="window.history.back()" class="btn btn-default">Cancel</button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
