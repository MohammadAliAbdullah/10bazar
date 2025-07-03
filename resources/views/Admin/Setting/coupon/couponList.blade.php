@extends('Admin.layoutApp.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Coupon List</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.coupon.add') }}" class="btn btn-primary btn-sm">
                            <i class="fa fa-plus"></i> Add Coupon
                        </a>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @include('Admin.include.message')

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable">
                            <thead class="custom-thead">
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
                                @foreach ($coupons as $i => $row)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $row->coupon_code }}</td>
                                        <td>{{ $row->discount_percent }}</td>
                                        <td>{{ $row->qty }}</td>
                                        <td>{{ $row->usedQty }}</td>
                                        <td>{{ $row->date_from }}</td>
                                        <td>{{ $row->date_to }}</td>
                                        <td>{{ $row->type_name }}</td>
                                        <td>{{ $row->is_active ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('madmin.coupon.edit', $row->id) }}"
                                                class="btn btn-sm btn-info"><i class="fa fa-edit"></i> Edit</a>
                                            <form action="{{ route('madmin.coupon.delete') }}" method="POST"
                                                class="d-inline" onsubmit="return confirm('Delete this coupon?')">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                                <button class="btn btn-sm btn-danger"><i class="lni-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
