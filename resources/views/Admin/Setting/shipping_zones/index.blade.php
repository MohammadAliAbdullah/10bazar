@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Shipping Zones'),
        'parent' => __('Setting'),
        'child' => __('Shipping Zones'),
        'button' => __('Add Shipping Zone'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.shipping-zones.create'),
    ])

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of Shipping Zones -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="custom-thead">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Default</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shippingZones as $shippingZone)
                                <tr>
                                    <td>{{ request('page') ? (request('page') - 1) * 10 + $loop->iteration : $loop->iteration }}
                                    </td>
                                    <td>{{ $shippingZone->name }}</td>
                                    <td>{{ $shippingZone->description }}</td>
                                    <td>{{ $shippingZone->is_default ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <a href="{{ route('madmin.shipping-zones.edit', $shippingZone->id) }}"
                                            class="btn btn-info btn-sm"><i class="lni lni-pencil-alt"></i></a>
                                        <form action="{{ route('madmin.shipping-zones.destroy', $shippingZone->id) }}"
                                            method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="lni lni-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
