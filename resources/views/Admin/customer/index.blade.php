@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Customer'),
        'parent' => __('Home'),
        'child' => __('Customer'),
        'button' => __('Add Customer'),
        'button_icon' => 'lni-plus',
        'route' => route('madmin.customeradmin.create'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('Admin.include.message')

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead class="custom-thead">
                                    <tr class="">
                                        <th>SI</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Contact Info</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $value)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>
                                                <img src="{{ $value->images }}" class="img-thumbnail" style="width: 60px; height: 60px;" alt="Customer Image">
                                            </td>
                                            <td>
                                               {{ $value->phone }}
                                            </td>
                                            <td>
                                               {{ $value->email }}
                                            </td>
                                            <td>{{ $value->address }}</td>
                                            <td>{{ $value->created_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="d-flex flex-wrap justify-content-center">
                                                    <a href="{{ route('madmin.customeradmin.edit', $value->id) }}"
                                                        class="btn btn-sm btn-success m-1">
                                                        <i class="lni-pencil-alt"></i>
                                                    </a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.customeradmin.destroy', $value->id]]) !!}
                                                    <button type="submit" class="btn btn-sm btn-danger m-1"
                                                        onclick="return confirm('Do you want to delete?')">
                                                        <i class="lni-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @if ($customers->isEmpty())
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">No customers found.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            {{ $customers->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
