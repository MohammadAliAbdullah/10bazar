@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit Shipping Zone'),
        'parent' => __('Setting'),
        'child' => __('Shipping Zones'),
        'button' => __('Back to List'),
        'button_icon' => 'lni lni-arrow-left',
        'route' => route('madmin.shipping-zones.index'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('madmin.shipping-zones.update', $shippingZone->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $shippingZone->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3">{{ $shippingZone->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="is_default">Default</label>
                            <select class="form-control" id="is_default" name="is_default">
                                <option value="1" {{ $shippingZones->is_default == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $shippingZones->is_default == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
