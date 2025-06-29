@extends('Frontend.Layout.master')

@section('content')
    <section class="cart-banner-add">
        <div class="container-fluid box">
            <h6>Home ➞&ensp;</h6>
            <h6>Product ➞&ensp;</h6>
            <h6>VRF</h6>
        </div>
    </section>

    <section class="vrf-page-sec">
        <div class="container-fluid">
            <div class="mb-4">
                <h1 class="title text-center">Welcome to the 1st & best VRF AC provider in Bangladesh</h1>
                <p>{!! $value->content !!}</p>
            </div>

            <div class="vrf-quote mb-4">
                <h6 class="title title-center p-4">All VRF Product</h6>
                <div class="row">
                    @foreach($values as $valuess)
                    <div class="each-item col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route('product_details', ['id' => $valuess->slug]) }}">
                            <div class="each-item-wraper">
                                <div class="item-image">
                                    <img src="{{ asset($valuess->images) }}" class="img-fluid" alt="">
                                </div>
                                <div class="item-title">
                                    <h3>{{ $valuess->title }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection