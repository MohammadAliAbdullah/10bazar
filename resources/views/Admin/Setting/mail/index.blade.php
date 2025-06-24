@extends('Admin.layouts.master')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-info text-white">
            <strong>Mail Configuration</strong>
        </div>
        <div class="card-body">
            <form action="{{ route('madmin.mailconfig.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label>Protocol *</label>
                    <input type="text" name="protocol" class="form-control" value="{{ old('protocol', $mail->protocol ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label>SMTP Host *</label>
                    <input type="text" name="smtp_host" class="form-control" value="{{ old('smtp_host', $mail->smtp_host ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label>SMTP Port *</label>
                    <input type="text" name="smtp_port" class="form-control" value="{{ old('smtp_port', $mail->smtp_port ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label>SMTP User *</label>
                    <input type="text" name="smtp_user" class="form-control" value="{{ old('smtp_user', $mail->smtp_user ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label>SMTP Password *</label>
                    <input type="password" name="smtp_pass" class="form-control" value="{{ old('smtp_pass', $mail->smtp_pass ?? '') }}" required>
                </div>

                <div class="form-group">
                    <label>Mail Type *</label>
                    <input type="text" name="mail_type" class="form-control" value="{{ old('mail_type', $mail->mail_type ?? '') }}" required>
                </div>

                @php
                    $yesNoOptions = [
                        'is_invoice' => 'Invoice Mail',
                        'is_purchase' => 'Purchase Mail',
                        'is_receive' => 'Receive Mail',
                        'is_payment' => 'Payment Mail',
                        'is_active' => 'Active Status',
                    ];
                @endphp

                @foreach($yesNoOptions as $field => $label)
                <div class="form-group">
                    <label>{{ $label }}</label>
                    <div>
                        <label class="btn btn-secondary">
                            <input type="radio" name="{{ $field }}" value="1" {{ old($field, $mail->$field ?? 0) == 1 ? 'checked' : '' }}> Yes
                        </label>
                        <label class="btn btn-success">
                            <input type="radio" name="{{ $field }}" value="0" {{ old($field, $mail->$field ?? 0) == 0 ? 'checked' : '' }}> No
                        </label>
                    </div>
                </div>
                @endforeach

                <button type="submit" class="btn btn-primary mt-3">Save Configuration</button>
            </form>
        </div>
    </div>
</div>
@endsection
