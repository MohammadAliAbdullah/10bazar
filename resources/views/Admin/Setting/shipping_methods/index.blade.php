@extends('Admin.layoutApp.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Shipping Methods</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.shipping-methods.create') }}" class="btn btn-primary btn-sm mr-2">
                            <i class="fa fa-plus"></i> Add Shipping Method
                        </a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of Shipping Methods -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
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
                                        <a href="{{ route('madmin.shipping-methods.edit', $shippingMethod->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('madmin.shipping-methods.destroy', $shippingMethod->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
