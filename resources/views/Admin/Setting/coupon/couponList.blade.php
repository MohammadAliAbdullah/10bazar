@extends('Admin.layouts.master')
@section('content')
<div class="content-header">
    <div class="container-fluid d-flex justify-content-between">
        <h1 class="m-0">Coupons</h1>
        <a href="{{ route('admin.coupon.add') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Coupon</a>
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
                            <th>Code</th>
                            <th>Discount %</th>
                            <th>Qty</th>
                            <th>Used</th>
                            <th>Date From</th>
                            <th>Date To</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($coupons as $i => $row)
                        <tr>
                            <td>{{ $i+1 }}</td>
                            <td>{{ $row->coupon_code }}</td>
                            <td>{{ $row->discount_percent }}</td>
                            <td>{{ $row->qty }}</td>
                            <td>{{ $row->usedQty }}</td>
                            <td>{{ $row->date_from }}</td>
                            <td>{{ $row->date_to }}</td>
                            <td>{{ $row->type_name }}</td>
                            <td>{{ $row->is_active ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('admin.coupon.edit', $row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <form action="{{ route('admin.coupon.delete') }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this coupon?')">
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
