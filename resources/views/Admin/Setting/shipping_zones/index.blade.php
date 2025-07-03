@extends('Admin.layoutApp.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Shipping Zones</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.shipping-zones.create') }}" class="btn btn-primary btn-sm mr-2">
                            <i class="fa fa-plus"></i> Add Shipping Zone
                        </a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of Shipping Zones -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($shippingZones as $shippingZone)
                                <tr>
                                    <td>{{ $shippingZone->id }}</td>
                                    <td>{{ $shippingZone->name }}</td>
                                    <td>{{ $shippingZone->description }}</td>
                                    <td>
                                        <a href="{{ route('madmin.shipping-zones.edit', $shippingZone->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('madmin.shipping-zones.destroy', $shippingZone->id) }}" method="POST" style="display: inline-block;">
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
