@extends('Admin.layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">Payment Methods</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- Form to Add/Edit Payment Method -->
            <div class="card mb-4">
                <div class="card-header">{{ isset($edit) ? 'Edit' : 'Add' }} Payment Method</div>
                <div class="card-body">
                    <form
                        action="{{ isset($edit) ? route('madmin.paymentmethod.update', $edit->id) : route('madmin.paymentmethod.store') }}"
                        method="POST">
                        @csrf
                        @if (isset($edit))
                            <!-- Method spoofing for update -->
                            @method('POST')
                        @endif

                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control"
                                value="{{ old('title', $edit->title ?? '') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Show on Website</label>
                            <select name="is_web" class="form-control">
                                <option value="1" {{ isset($edit) && $edit->is_web == 1 ? 'selected' : '' }}>Yes
                                </option>
                                <option value="2" {{ isset($edit) && $edit->is_web == 2 ? 'selected' : '' }}>No
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Account COA ID</label>
                            <input type="number" name="acc_coa_id" class="form-control"
                                value="{{ old('acc_coa_id', $edit->acc_coa_id ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1" {{ isset($edit) && $edit->is_active == 1 ? 'selected' : '' }}>
                                    Active</option>
                                <option value="2" {{ isset($edit) && $edit->is_active == 2 ? 'selected' : '' }}>
                                    Inactive</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-{{ isset($edit) ? 'warning' : 'primary' }}">
                            {{ isset($edit) ? 'Update' : 'Save' }}
                        </button>

                        @if (isset($edit))
                            <a href="{{ route('madmin.paymentmethod.create') }}" class="btn btn-secondary">Cancel</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
