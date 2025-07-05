@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => 'Edit Shipping Method',
        'parent' => 'Home',
        'child' => 'Shipping Methods',
        'button' => 'Back to List',
        'button_icon' => 'lni lni-arrow-left',
        'route' => route('madmin.shipping-methods.index'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('madmin.shipping-methods.update', $shippingMethod->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $shippingMethod->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="shipping_zone_id">Shipping Zone</label>
                            <select class="form-control" id="shipping_zone_id" name="shipping_zone_id" required>
                                @foreach($shippingZones as $shippingZone)
                                    <option value="{{ $shippingZone->id }}" {{ $shippingMethod->shipping_zone_id == $shippingZone->id ? 'selected' : '' }}>
                                        {{ $shippingZone->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="base_fee">Base Fee</label>
                            <input type="number" step="0.01" class="form-control" id="base_fee" name="base_fee" value="{{ $shippingMethod->base_fee }}" required>
                        </div>
                        <div class="form-group">
                            <label for="per_kg_fee">Per Kg Fee</label>
                            <input type="number" step="0.01" class="form-control" id="per_kg_fee" name="per_kg_fee" value="{{ $shippingMethod->per_kg_fee }}" required>
                        </div>
                        <div class="form-group">
                            <label for="estimated_days">Estimated Days</label>
                            <input type="text" class="form-control" id="estimated_days" name="estimated_days" value="{{ $shippingMethod->estimated_days }}" required>
                        </div>
                        <div class="form-group">
                            <label for="is_active">Status</label>
                            <select class="form-control" id="is_active" name="is_active" required>
                                <option value="1" {{ $shippingMethod->is_active ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ !$shippingMethod->is_active ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
