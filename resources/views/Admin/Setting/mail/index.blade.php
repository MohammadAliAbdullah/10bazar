@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Mail Configuration'),
        'parent' => __('Home'),
        'child' => __('Mail'),
        'button' => __('Back to List'),
        'button_icon' => 'lni lni-arrow-left',
        'route' => '#',
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('Admin.include.message')

                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('madmin.mailconfig.store') }}" method="POST" class="form-horizontal">
                            @csrf

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Protocol <span class="text-danger">*</span></label>
                                    <input type="text" name="protocol" class="form-control"
                                        value="{{ old('protocol', $mail->protocol ?? '') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>SMTP Host <span class="text-danger">*</span></label>
                                    <input type="text" name="smtp_host" class="form-control"
                                        value="{{ old('smtp_host', $mail->smtp_host ?? '') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>SMTP Port <span class="text-danger">*</span></label>
                                    <input type="text" name="smtp_port" class="form-control"
                                        value="{{ old('smtp_port', $mail->smtp_port ?? '') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>SMTP User <span class="text-danger">*</span></label>
                                    <input type="text" name="smtp_user" class="form-control"
                                        value="{{ old('smtp_user', $mail->smtp_user ?? '') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>SMTP Password <span class="text-danger">*</span></label>
                                    <input type="password" name="smtp_pass" class="form-control"
                                        value="{{ old('smtp_pass', $mail->smtp_pass ?? '') }}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Mail Type <span class="text-danger">*</span></label>
                                    <input type="text" name="mail_type" class="form-control"
                                        value="{{ old('mail_type', $mail->mail_type ?? '') }}" required>
                                </div>
                                {{-- cc and bcc --}}
                                <div class="form-group col-md-6">
                                    <label>CC</label>
                                    <input type="text" name="cc" class="form-control"
                                        value="{{ old('cc', $mail->cc ?? '') }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>BCC</label>
                                    <input type="text" name="bcc" class="form-control"
                                        value="{{ old('bcc', $mail->bcc ?? '') }}" required>
                                </div>
                            </div>

                            <div class="row">
                                @php
                                    $yesNoOptions = [
                                        'is_invoice' => 'Invoice Mail',
                                        'is_purchase' => 'Purchase Mail',
                                        'is_receive' => 'Receive Mail',
                                        'is_payment' => 'Payment Mail',
                                        'is_active' => 'Active Status',
                                    ];
                                @endphp

                                @foreach ($yesNoOptions as $field => $label)
                                    <div class="form-group col-md-6">
                                        <label>{{ $label }}</label>
                                        <div>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="{{ $field }}" value="1"
                                                    {{ old($field, $mail->$field ?? 0) == 1 ? 'checked' : '' }}> Yes
                                            </label>
                                            <label class="btn btn-success">
                                                <input type="radio" name="{{ $field }}" value="0"
                                                    {{ old($field, $mail->$field ?? 0) == 0 ? 'checked' : '' }}> No
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-primary">Save Configuration</button>
                                <button type="button" onclick="window.history.back()" class="btn btn-default">Cancel</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
