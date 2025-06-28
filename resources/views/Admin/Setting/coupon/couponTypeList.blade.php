@extends('Admin.layouts.master')
@section('content')
<div class="content-header">
    <div class="container-fluid d-flex justify-content-between">
        <h1 class="m-0">Coupon Types</h1>
        <a href="{{ route('admin.coupon.type.add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Type</a>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        @include('Admin.include.message')
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($couponTypes as $i => $row)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->is_active ? 'Active' : 'Inactive' }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td>
                                <a href="{{ route('admin.coupon.type.edit', $row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('admin.coupon.type.delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $row->id }}">
                                    <button class="btn btn-sm btn-danger">Delete</button>
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
