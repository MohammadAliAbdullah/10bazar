@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => 'Edit Shipping Zone Locations',
        'parent' => 'Home',
        'child' => 'Zone Locations',
        'button' => 'back to list',
        'button_icon' => 'lni lni-arrow-left',
        'route' => route('madmin.shipping-zone-locations.index'),
    ])
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Shipping Zone Location</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('madmin.shipping-zone-locations.index') }}">Shipping
                                Zone Locations</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('madmin.shipping-zone-locations.update', $shippingZoneLocation->id) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="shipping_zone_id">Shipping Zone</label>
                            <select class="form-control" id="shipping_zone_id" name="shipping_zone_id" required>
                                @foreach ($shippingZones as $shippingZone)
                                    <option value="{{ $shippingZone->id }}"
                                        {{ $shippingZoneLocation->shipping_zone_id == $shippingZone->id ? 'selected' : '' }}>
                                        {{ $shippingZone->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="state_id">State</label>
                            <select class="form-control" id="state_id" name="state_id">
                                <option value="">Select a State</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}"
                                        {{ $shippingZoneLocation->state_id == $state->id ? 'selected' : '' }}>
                                        {{ $state->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">City</label>
                            <select class="form-control" id="city_id" name="city_id">
                                <option value="">Select a City</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}"
                                        {{ $shippingZoneLocation->city_id == $city->id ? 'selected' : '' }}>
                                        {{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        {{-- is_default --}}
                        <div class="form-group">
                            <label for="city_id">City</label>
                            <select class="form-control" id="is_default" name="is_default">
                                <option value="1" {{ $shippingZoneLocation->is_default == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $shippingZoneLocation->is_default == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
