@extends('Admin.layouts.master')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <h3>{{ $coupon ? 'Edit' : 'Add' }} Coupon</h3>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <span>{{ $coupon ? 'Edit' : 'Add' }}</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm">
                @include('Admin.include.message')
                <form action="{{ $coupon ? route('madmin.coupon.update', $coupon->id) : route('madmin.coupon.store') }}"
                    method="POST" class="p-3 form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label>Coupon Code</label>
                        <input type="text" name="coupon_code"
                            value="{{ old('coupon_code', $coupon->coupon_code ?? '') }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Discount Percent</label>
                        <input type="number" name="discount_percent"
                            value="{{ old('discount_percent', $coupon->discount_percent ?? 0) }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" name="qty" value="{{ old('qty', $coupon->qty ?? 0) }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Used Quantity</label>
                        <input type="number" name="usedQty" value="{{ old('usedQty', $coupon->usedQty ?? 0) }}"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Coupon Type</label>
                        <select name="coupon_type_id" class="form-control" required>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}"
                                    {{ old('coupon_type_id', $coupon->coupon_type_id ?? '') == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Date From</label>
                        <input type="date" name="date_from" value="{{ old('date_from', $coupon->date_from ?? '') }}"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Date To</label>
                        <input type="date" name="date_to" value="{{ old('date_to', $coupon->date_to ?? '') }}"
                            class="form-control" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="is_active" class="form-check-input"
                            {{ isset($coupon) && $coupon->is_active ? 'checked' : '' }}>
                        <label class="form-check-label">Active</label>
                    </div>
                    <button type="submit" class="btn btn-success">{{ $coupon ? 'Update' : 'Save' }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
