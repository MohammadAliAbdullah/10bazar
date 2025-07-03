@extends('Admin.layoutApp.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <h3>{{ $couponType ? 'Edit' : 'Add' }} Coupon Type</h3>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <span>{{ $couponType ? 'Edit' : 'Add' }}</span>
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
                <form
                    action="{{ $couponType ? route('madmin.coupon.type.update', $couponType->id) : route('madmin.coupon.type.store') }}"
                    method="POST" class="p-3 form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label>Type Name</label>
                        <input type="text" name="name" value="{{ old('name', $couponType->name ?? '') }}"
                            class="form-control" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="is_active" class="form-check-input"
                            {{ isset($couponType) && $couponType->is_active ? 'checked' : '' }}>
                        <label class="form-check-label">Active</label>
                    </div>
                    <button type="submit" class="btn btn-success">{{ $couponType ? 'Update' : 'Save' }}</button>
                </form>
            </div>
        </div>
    </section>
@endsection
