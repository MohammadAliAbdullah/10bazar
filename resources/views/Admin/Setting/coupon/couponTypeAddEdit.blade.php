@extends('Admin.layouts.master')
@section('content')
<div class="container-fluid mt-3">
    <h3>{{ $couponType ? 'Edit' : 'Add' }} Coupon Type</h3>
    @include('Admin.include.message')
    <form action="{{ $couponType ? route('admin.coupon.type.update', $couponType->id) : route('admin.coupon.type.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Type Name</label>
            <input type="text" name="name" value="{{ old('name', $couponType->name ?? '') }}" class="form-control" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="is_active" class="form-check-input" {{ (isset($couponType) && $couponType->is_active) ? 'checked' : '' }}>
            <label class="form-check-label">Active</label>
        </div>
        <button type="submit" class="btn btn-success">{{ $couponType ? 'Update' : 'Save' }}</button>
    </form>
</div>
@endsection
