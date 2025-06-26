@extends('Frontend.Layout.master')

@section('content')
    <!-- main-section-area-start -->
    @include('Frontend.components.breadcrumb', ['page' => __('Brand'), 'subPage' => __('All Brand')])

    <section>
        <div class="main-section-area">
            <div class="container">

                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="{{ __('Close') }}">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="{{ __('Close') }}">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-header">
                            <h2 class="text-center">{{ __('All Brand') }}</h2>
                        </div>
                        <div class="card-body bg-white">
                            <div class="row">
                                @foreach ($brands as $value)
                                    <div class="col-md-2">
                                        <div class="brand">
                                            <img src="{{ asset('public/images/brand/' . $value->images) }}"
                                                 alt="{{ $value->title }}" class="img-fluid">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- main-section-area-end -->
@endsection
