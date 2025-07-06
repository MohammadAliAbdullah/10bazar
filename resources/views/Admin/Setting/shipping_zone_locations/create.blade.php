@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => 'Add Shipping Zone Locations',
        'parent' => 'Home',
        'child' => 'Zone Locations',
        'button' => 'back to list',
        'button_icon' => 'lni lni-arrow-left',
        'route' => route('madmin.shipping-zone-locations.index'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('madmin.shipping-zone-locations.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="shipping_zone_id">Shipping Zone</label>
                            <select class="form-control" id="shipping_zone_id" name="shipping_zone_id" required>
                                <option value="">Select a Shipping Zone</option>
                                @foreach ($shippingZones as $shippingZone)
                                    <option value="{{ $shippingZone->id }}">{{ $shippingZone->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state_id">State</label>
                            <select class="form-control" id="state_id" name="state_id">
                                <option value="">Select a State</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">City</label>
                            <select class="form-control" id="city_id" name="city_id">
                                <option value="">Select a City</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
