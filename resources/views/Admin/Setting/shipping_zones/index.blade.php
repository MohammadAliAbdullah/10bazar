@extends('layouts.app')
@section('content')
<div class="container">
    <h1>ShippingZone - Index</h1>
    @if(session('success'))
        <div class="alert alert-success">{ session('success') }</div>
    @endif
</div>
@endsection
