@extends('Admin.layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">SMS Configuration</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">SMS</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card shadow-sm">
                @include('Admin.include.message')
                <form action="{{ route('madmin.smsconfig.store') }}" method="POST" class="p-3 form-horizontal">
                    @csrf

                    <div class="form-group">
                        <label>Provider Name <span class="text-danger">*</span></label>
                        <input type="text" name="provider" class="form-control"
                            value="{{ old('provider', $sms->provider ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label>User Name (API Key) <span class="text-danger">*</span></label>
                        <input type="text" name="username" class="form-control"
                            value="{{ old('username', $sms->username ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label>Password (API Secret) <span class="text-danger">*</span></label>
                        <input type="text" name="password" class="form-control"
                            value="{{ old('password', $sms->password ?? '') }}" required>
                    </div>

                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control"
                            value="{{ old('phone', $sms->phone ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label>Sender Name</label>
                        <input type="text" name="sender_name" class="form-control"
                            value="{{ old('sender_name', $sms->sender_name ?? '') }}">
                    </div>

                    <div class="form-group">
                        <label>Sell</label>
                        <div>
                            <label class="btn btn-secondary">
                                <input type="radio" name="is_invoice" value="1"
                                    {{ old('is_invoice', $sms->is_invoice ?? 0) == 1 ? 'checked' : '' }}> Yes
                            </label>
                            <label class="btn btn-success">
                                <input type="radio" name="is_invoice" value="0"
                                    {{ old('is_invoice', $sms->is_invoice ?? 0) == 0 ? 'checked' : '' }}> No
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Customer Receive</label>
                        <div>
                            <label class="btn btn-secondary">
                                <input type="radio" name="is_receive" value="1"
                                    {{ old('is_receive', $sms->is_receive ?? 0) == 1 ? 'checked' : '' }}> Yes
                            </label>
                            <label class="btn btn-success">
                                <input type="radio" name="is_receive" value="0"
                                    {{ old('is_receive', $sms->is_receive ?? 0) == 0 ? 'checked' : '' }}> No
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Save Settings</button>
                </form>
            </div>
        </div>
    </section>
@endsection
