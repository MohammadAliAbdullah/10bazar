@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit SMS Campaign'),
        'parent' => __('Home'),
        'child' => __('SMS Campaign'),
        'button' => __('Campaign List'),
        'button_icon' => 'lni lni-list',
        'route' => route('madmin.smscampaign.index'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('Admin.include.message')

                        {!! Form::model($value, [
                            'method' => 'PATCH',
                            'route' => ['madmin.smscampaign.update', $value->id],
                            'class' => 'needs-validation',
                            'novalidate',
                        ]) !!}

                        <div class="form-group">
                            {!! Form::label('subject', 'Subject', ['class' => 'font-weight-bold']) !!}
                            {!! Form::text('subject', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Enter subject here',
                                'required',
                            ]) !!}
                            <div class="invalid-feedback">Please enter a subject.</div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('content', 'Message', ['class' => 'font-weight-bold']) !!}
                            {!! Form::textarea('content', null, [
                                'class' => 'form-control',
                                'id' => 'message',
                                'rows' => 5,
                                'placeholder' => 'Write your SMS message here...',
                                'maxlength' => 320,
                                'required',
                            ]) !!}
                            <small id="counter" class="form-text text-muted mt-1">0 Char / 0 SMS</small>
                            <div class="invalid-feedback">Please enter a message.</div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('status', 'Status', ['class' => 'font-weight-bold']) !!}
                            {!! Form::select('status', ['Pending' => 'Pending'], null, [
                                'class' => 'form-control',
                                'required',
                            ]) !!}
                            <div class="invalid-feedback">Please select a status.</div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary px-4">Update</button>
                            <button type="button" onclick="window.history.back()" class="btn btn-secondary">Cancel</button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Bootstrap validation
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        // SMS Character counter
        const messageEle = document.getElementById('message');
        const counterEle = document.getElementById('counter');

        // Initialize counter with existing content length on page load
        window.addEventListener('load', () => {
            if (messageEle.value.length) {
                const len = messageEle.value.length;
                const smsCount = Math.ceil(len / 160);
                counterEle.textContent = `${len} Char / ${smsCount} SMS`;
            }
        });

        messageEle.addEventListener('input', function(e) {
            const currentLength = e.target.value.length;
            const smsCount = Math.ceil(currentLength / 160) || 0;
            counterEle.textContent = `${currentLength} Char / ${smsCount} SMS`;
        });
    </script>
@endsection
