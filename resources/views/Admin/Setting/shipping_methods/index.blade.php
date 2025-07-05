@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => 'Shipping Methods',
        'parent' => 'Home',
        'child' => 'Shipping Methods',
        'button' => 'Add Shipping Method',
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.shipping-methods.create'),
    ])

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of Shipping Methods -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="custom-thead">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Shipping Zone</th>
                                <th>Base Fee</th>
                                <th>Per Kg Fee</th>
                                <th>Estimated Days</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shippingMethods as $shippingMethod)
                                <tr>
                                    <td>{{ $shippingMethod->id }}</td>
                                    <td>{{ $shippingMethod->name }}</td>
                                    <td>{{ $shippingMethod->shippingZone->name }}</td>
                                    <td>{{ $shippingMethod->base_fee }}</td>
                                    <td>{{ $shippingMethod->per_kg_fee }}</td>
                                    <td>{{ $shippingMethod->estimated_days }}</td>
                                    <td>{{ $shippingMethod->is_active ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ route('madmin.shipping-methods.edit', $shippingMethod->id) }}" class="btn btn-info btn-sm"><i class="lni lni-pencil-alt"></i></a>
                                        <form action="{{ route('madmin.shipping-methods.destroy', $shippingMethod->id) }}" method="POST" style="display: inline-block;">
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
