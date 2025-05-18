@extends('../Frontend.Layout.master')
@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Shop', 'subPage' => $about->title])
    <div class="block">
        <div class="container">
            <div class="document">
                <div class="document__header">
                    <h1 class="document__title">{{  $about->title }}</h1>
                </div>
                @if ($about->images != null)
                    <img src="{{ asset('public/images/page') }}/{{ $about->images }}" alt="" class="img-fluid">
                @endif
                <p>
                    {!! $about->content ?? 'N/A' !!}
                </p>
            </div>
        </div>
    </div>
    <!-- main-section-area-start -->
@endsection
