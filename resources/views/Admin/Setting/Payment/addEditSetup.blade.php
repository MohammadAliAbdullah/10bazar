@extends('Admin.layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Payment Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.paymentsetup.index') }}" class="btn btn-primary btn-sm mr-2"><i
                                class="fa fa-bars"></i> List Payment Setup</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <div class="card mb-4">
                <div class="card-body">
                    <form
                        action="{{ isset($edit) ? route('madmin.paymentsetup.update', $edit->id) : route('madmin.paymentsetup.store') }}"
                        method="POST">
                        @csrf
                        @if (isset($edit))
                            @method('POST')
                        @endif

                        <div class="form-group">
                            <label>Payment Method <span class="text-danger">*</span></label>
                            <select name="payment_method_id" class="form-control" required>
                                <option value="">Select Payment Method</option>
                                @foreach ($methods as $method)
                                    <option value="{{ $method->id }}"
                                        {{ isset($edit) && $edit->payment_method_id == $method->id ? 'selected' : '' }}>
                                        {{ $method->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Merchant ID</label>
                            <input type="text" name="marchant_id" class="form-control"
                                value="{{ old('marchant_id', $edit->marchant_id ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label>Password <span class="text-danger">*</span></label>
                            <input type="text" name="password" class="form-control"
                                value="{{ old('password', $edit->password ?? '') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $edit->email ?? '') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Currency ID</label>
                            <select name="currency_id" class="form-control">
                                <option value="">Select Currency</option>
                                @foreach ($currencies as $currency)
                                    <option value="{{ $currency->id }}" {{ (old('currency_id', $edit->currency_id ?? '') == $currency->id) ? 'selected' : '' }}>
                                        {{ $currency->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>API Code</label>
                            <input type="text" name="api_code" class="form-control"
                                value="{{ old('api_code', $edit->api_code ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label>API Key</label>
                            <input type="text" name="api_key" class="form-control"
                                value="{{ old('api_key', $edit->api_key ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label>API Endpoint</label>
                            <input type="text" name="api_endpoint" class="form-control"
                                value="{{ old('api_endpoint', $edit->api_endpoint ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label>API User Secret</label>
                            <input type="text" name="api_user_scret" class="form-control"
                                value="{{ old('api_user_scret', $edit->api_user_scret ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label>Live Mode</label>
                            <select name="is_live" class="form-control">
                                <option value="1" {{ isset($edit) && $edit->is_live == 1 ? 'selected' : '' }}>Live
                                </option>
                                <option value="0" {{ isset($edit) && $edit->is_live == 0 ? 'selected' : '' }}>
                                    Sandbox</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="is_active" class="form-control">
                                <option value="1" {{ isset($edit) && $edit->is_active == 1 ? 'selected' : '' }}>
                                    Active
                                </option>
                                <option value="2" {{ isset($edit) && $edit->is_active == 2 ? 'selected' : '' }}>
                                    Inactive
                                </option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-{{ isset($edit) ? 'warning' : 'primary' }}">
                            {{ isset($edit) ? 'Update' : 'Save' }}
                        </button>

                        @if (isset($edit))
                            <a href="{{ route('madmin.paymentsetup.create') }}" class="btn btn-secondary">Cancel</a>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
