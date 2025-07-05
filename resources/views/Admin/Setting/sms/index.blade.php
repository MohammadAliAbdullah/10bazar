@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('SMS Configuration'),
        'parent' => __('Home'),
        'child' => __('SMS'),
        'button' => __('Back'),
        'button_icon' => 'lni lni-arrow-left',
        'route' => '#', // change route if needed
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('Admin.include.message')

                        {!! Form::open([
                            'method' => 'POST',
                            'route' => 'madmin.smsconfig.store',
                            'class' => 'form-horizontal',
                        ]) !!}
                        @csrf

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('provider', 'Provider Name') !!} <span class="text-danger">*</span>
                                {!! Form::text('provider', old('provider', $sms->provider ?? ''), ['class' => 'form-control', 'required']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('username', 'User Name (API Key)') !!} <span class="text-danger">*</span>
                                {!! Form::text('username', old('username', $sms->username ?? ''), ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('password', 'Password (API Secret)') !!} <span class="text-danger">*</span>
                                {!! Form::text('password', old('password', $sms->password ?? ''), ['class' => 'form-control', 'required']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('phone', 'Phone') !!}
                                {!! Form::text('phone', old('phone', $sms->phone ?? ''), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('sender_name', 'Sender Name') !!}
                                {!! Form::text('sender_name', old('sender_name', $sms->sender_name ?? ''), ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('is_invoice', 'Sell') !!}
                                <div class="d-flex gap-3">
                                    <label class="btn btn-outline-secondary">
                                        {!! Form::radio('is_invoice', 1, old('is_invoice', $sms->is_invoice ?? 0) == 1) !!} Yes
                                    </label>
                                    <label class="btn btn-outline-success">
                                        {!! Form::radio('is_invoice', 0, old('is_invoice', $sms->is_invoice ?? 0) == 0) !!} No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('is_receive', 'Customer Receive') !!}
                                <div class="d-flex gap-3">
                                    <label class="btn btn-outline-secondary">
                                        {!! Form::radio('is_receive', 1, old('is_receive', $sms->is_receive ?? 0) == 1) !!} Yes
                                    </label>
                                    <label class="btn btn-outline-success">
                                        {!! Form::radio('is_receive', 0, old('is_receive', $sms->is_receive ?? 0) == 0) !!} No
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                            <button onclick="window.history.back()" type="button" class="btn btn-default">Cancel</button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
