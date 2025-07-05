@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => $couponType ? __('Edit Coupon Type') : __('Add Coupon Type'),
        'parent' => __('Setting'),
        'child' => __('Coupon Types'),
        'button' => $couponType ? __('List Coupon Types') : __('Add Coupon Type'),
        'button_icon' => 'lni lni-list',
        'route' => route('madmin.coupon.type.list'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm">
                @include('Admin.include.message')

                <form
                    action="{{ $couponType ? route('madmin.coupon.type.update', $couponType->id) : route('madmin.coupon.type.store') }}"
                    method="POST" class="p-3 form-horizontal">
                    @csrf
                    @if($couponType)
                        @method('POST')
                    @endif

                    <div class="form-group">
                        <label for="name">Type Name <span class="text-danger">*</span></label>
                        <input id="name" type="text" name="name" value="{{ old('name', $couponType->name ?? '') }}"
                            class="form-control" required>
                    </div>

                    <div class="form-group form-check">
                        <input id="is_active" type="checkbox" name="is_active" class="form-check-input"
                            {{ old('is_active', $couponType->is_active ?? false) ? 'checked' : '' }}>
                        <label for="is_active" class="form-check-label">Active</label>
                    </div>

                    <button type="submit" class="btn btn-{{ $couponType ? 'success' : 'primary' }}">
                        {{ $couponType ? __('Update') : __('Save') }}
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
