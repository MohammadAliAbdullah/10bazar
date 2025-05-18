@extends('../Frontend.Layout.master')
@section('content')
    @include('Frontend.components.breadcrumb', [
        'page' => 'Shop',
        'subPage' => 'Frequently Asked Questions',
    ])
    <div class="block faq">
        <div class="container">
            @foreach ($values as $key => $value)
                <div class="faq__section">
                    <div class="faq__section-title">
                        <h3> {{ $key + 1 }}. {{ $value->title }}</h3>
                    </div>
                    <div class="faq__section-body">
                        <div class="row">
                            <div class="faq__section-column col-12 col-lg-12">
                                <div class="typography">
                                    {!! $value->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
