@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => $coupon ? 'Edit Coupon' : 'Add Coupon',
        'parent' => 'Home',
        'child' => 'Coupon',
        'button' => 'Back to List',
        'button_icon' => 'lni lni-arrow-left',
        'route' => route('madmin.coupon.list'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm">
                <div class="card-body">
                    @include('Admin.include.message')

                    <form action="{{ $coupon ? route('madmin.coupon.update', $coupon->id) : route('madmin.coupon.store') }}" method="POST" class="p-3">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Coupon Code <span class="text-danger">*</span></label>
                                    <input type="text" name="coupon_code" value="{{ old('coupon_code', $coupon->coupon_code ?? '') }}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Discount Percent</label>
                                    <input type="number" name="discount_percent" value="{{ old('discount_percent', $coupon->discount_percent ?? 0) }}" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quantity</label>
                                    <input type="number" name="qty" value="{{ old('qty', $coupon->qty ?? 0) }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Coupon Type <span class="text-danger">*</span></label>
                                    <select name="coupon_type_id" class="form-control" required>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}" {{ old('coupon_type_id', $coupon->coupon_type_id ?? '') == $type->id ? 'selected' : '' }}>
                                                {{ $type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date From <span class="text-danger">*</span></label>
                                    <input type="date" name="date_from" value="{{ old('date_from', $coupon->date_from ?? '') }}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date To <span class="text-danger">*</span></label>
                                    <input type="date" name="date_to" value="{{ old('date_to', $coupon->date_to ?? '') }}" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex align-items-center">
                                <div class="form-group form-check mb-0 mt-3">
                                    <input type="checkbox" name="is_active" class="form-check-input" {{ isset($coupon) && $coupon->is_active ? 'checked' : '' }}>
                                    <label class="form-check-label">Active</label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-{{ $coupon ? 'warning' : 'primary' }}">
                                {{ $coupon ? 'Update' : 'Save' }}
                            </button>
                            @if ($coupon)
                                <a href="{{ route('madmin.coupon.list') }}" class="btn btn-secondary ml-2">Cancel</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
