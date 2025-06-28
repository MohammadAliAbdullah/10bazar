@extends('Admin.layouts.master')
@section('content')
<div class="container-fluid mt-3">
    <h3>{{ $coupon ? 'Edit' : 'Add' }} Coupon</h3>
    @include('Admin.include.message')
    <form action="{{ $coupon ? route('admin.coupon.update', $coupon->id) : route('admin.coupon.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Coupon Code</label>
            <input type="text" name="coupon_code" value="{{ old('coupon_code', $coupon->coupon_code ?? '') }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Discount Percent</label>
            <input type="number" name="discount_percent" value="{{ old('discount_percent', $coupon->discount_percent ?? 0) }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="qty" value="{{ old('qty', $coupon->qty ?? 0) }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Used Quantity</label>
            <input type="number" name="usedQty" value="{{ old('usedQty', $coupon->usedQty ?? 0) }}" class="form-control">
        </div>
        <div class="form-group">
            <label>Coupon Type</label>
            <select name="coupon_type_id" class="form-control" required>
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ old('coupon_type_id', $coupon->coupon_type_id ?? '') == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Date From</label>
            <input type="date" name="date_from" value="{{ old('date_from', $coupon->date_from ?? '') }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Date To</label>
            <input type="date" name="date_to" value="{{ old('date_to', $coupon->date_to ?? '') }}" class="form-control" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="is_active" class="form-check-input" {{ (isset($coupon) && $coupon->is_active) ? 'checked' : '' }}>
            <label class="form-check-label">Active</label>
        </div>
        <button type="submit" class="btn btn-success">{{ $coupon ? 'Update' : 'Save' }}</button>
    </form>
</div>
@endsection
