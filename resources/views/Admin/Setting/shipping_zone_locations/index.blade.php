@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => 'Shipping Zone Locations',
        'parent' => 'Home',
        'child' => 'Zone Locations',
        'button' => 'Add Locations',
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.shipping-zone-locations.create'),
    ])

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of Shipping Zone Locations -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="custom-thead">
                            <tr>
                                <th>ID</th>
                                <th>Shipping Zone</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Defult</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shippingZoneLocations as $location)
                                <tr>
                                    <td>{{ request('page') ? (request('page') - 1) * 10 + $loop->iteration : $loop->iteration }}</td>
                                    <td>{{ $location->shippingZone->name ?? 'N/A' }}</td>
                                    <td>{{ $location->state->name ?? 'N/A' }}</td>
                                    <td>{{ $location->city->name ?? 'N/A' }}</td>
                                    <td>{{ $location->is_default == 1 ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <a href="{{ route('madmin.shipping-zone-locations.edit', $location->id) }}"
                                            class="btn btn-info btn-sm"><i class="lni lni-pencil-alt"></i></a>
                                        <form action="{{ route('madmin.shipping-zone-locations.destroy', $location->id) }}"
                                            method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="lni lni-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        {{ $shippingZoneLocations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
