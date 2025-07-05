@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => isset($edit) ? __('Edit Payment Method') : __('Add Payment Method'),
        'parent' => __('Home'),
        'child' => __('Payment Method'),
        'button' => __('List Payment Method'),
        'button_icon' => 'lni lni-list',
        'route' => route('madmin.paymentmethod.index'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('Admin.include.message')

                <div class="card">
                    <div class="card-body">
                        <form
                            action="{{ isset($edit) ? route('madmin.paymentmethod.update', $edit->id) : route('madmin.paymentmethod.store') }}"
                            method="POST">
                            @csrf
                            @if (isset($edit))
                                @method('POST') {{-- You might want to use PATCH --}}
                            @endif

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title" class="form-control"
                                        value="{{ old('title', $edit->title ?? '') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Show on Website</label>
                                    <select name="is_web" class="form-control">
                                        <option value="1" {{ isset($edit) && $edit->is_web == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="2" {{ isset($edit) && $edit->is_web == 2 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Account COA ID</label>
                                    <input type="number" name="acc_coa_id" class="form-control"
                                        value="{{ old('acc_coa_id', $edit->acc_coa_id ?? '') }}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Status</label>
                                    <select name="is_active" class="form-control">
                                        <option value="1" {{ isset($edit) && $edit->is_active == 1 ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="2" {{ isset($edit) && $edit->is_active == 2 ? 'selected' : '' }}>
                                            Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-{{ isset($edit) ? 'warning' : 'primary' }}">
                                    {{ isset($edit) ? 'Update' : 'Save' }}
                                </button>

                                @if (isset($edit))
                                    <a href="{{ route('madmin.paymentmethod.create') }}" class="btn btn-secondary">Cancel</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
