@extends('Admin.layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">Payment Setup</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')

            <!-- Form to Add/Edit Payment Setup -->
            <div class="card mb-4">
                <div class="card-header">{{ isset($edit) ? 'Edit' : 'Add' }} Payment Setup</div>
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
                            <select name="paymentid" class="form-control" required>
                                @foreach ($methods as $method)
                                    <option value="{{ $method->id }}"
                                        {{ isset($edit) && $edit->paymentid == $method->id ? 'selected' : '' }}>
                                        {{ $method->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Merchant ID</label>
                            <input type="text" name="marchantid" class="form-control"
                                value="{{ old('marchantid', $edit->marchantid ?? '') }}">
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
                            <input type="number" name="currency_id" class="form-control"
                                value="{{ old('currency_id', $edit->currency_id ?? '') }}">
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

            <!-- List of Payment Setups -->
            <div class="card">
                <div class="card-header">Existing Payment Setups</div>
                <div class="card-body p-0">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Method</th>
                                <th>Email</th>
                                <th>Live</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($setups as $setup)
                                <tr>
                                    <td>{{ $setup->paymentMethod->title ?? 'N/A' }}</td>
                                    <td>{{ $setup->email }}</td>
                                    <td>{{ $setup->is_live == 1 ? 'Live' : 'Sandbox' }}</td>
                                    <td>{{ $setup->is_active == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ $setup->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('madmin.paymentsetup.edit', $setup->id) }}"
                                                class="btn btn-sm btn-info mr-1">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'route' => ['madmin.paymentsetup.destroy', $setup->id],
                                                'onsubmit' => 'return confirm("Delete this setup?")',
                                            ]) !!}
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            @if ($setups->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">No payment setups found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection
