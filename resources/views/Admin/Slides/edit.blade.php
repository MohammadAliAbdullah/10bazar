@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit Slide'),
        'parent' => __('Home'),
        'child' => __('Slide'),
        'button' => __('Slide List'),
        'button_icon' => 'lni lni-list',
        'route' => route('madmin.slides.index'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('Admin.include.message')

                        {!! Form::model($slide, [
                            'method' => 'PATCH',
                            'route' => ['madmin.slides.update', $slide->id],
                            'class' => 'needs-validation',
                            'novalidate',
                            'files' => true,
                        ]) !!}

                        <div class="form-group">
                            {!! Form::label('title', 'Slide Title', ['class' => 'font-weight-bold']) !!}
                            {!! Form::text('title', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Enter slide title',
                                'required',
                            ]) !!}
                            <div class="invalid-feedback">Please enter a slide title.</div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('image', 'Image', ['class' => 'font-weight-bold']) !!}
                            <br>
                            @if($slide->images)
                                <img src="{{ asset($slide->images) }}" alt="Current Slide Image" style="max-width: 150px; margin-bottom: 15px;">
                            @endif
                            {!! Form::file('image', [
                                'class' => 'form-control',
                                'accept' => 'image/*',
                            ]) !!}
                            <small class="form-text text-muted">Leave blank if you don't want to change the image.</small>
                            <div class="invalid-feedback">Please select a valid image.</div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('url', 'URL', ['class' => 'font-weight-bold']) !!}
                            {!! Form::text('url', null, [
                                'class' => 'form-control',
                                'placeholder' => 'Enter URL (optional)',
                            ]) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('orders', 'Orders', ['class' => 'font-weight-bold']) !!}
                            {!! Form::number('orders', null, [
                                'class' => 'form-control',
                                'min' => 1,
                                'required',
                                'placeholder' => 'Display order',
                            ]) !!}
                            <div class="invalid-feedback">Please enter a valid order number.</div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('status', 'Status', ['class' => 'font-weight-bold']) !!}
                            {!! Form::select('status', ['Active' => 'Active', 'Pending' => 'Pending'], null, [
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
    // Bootstrap form validation
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.forEach.call(forms, function(form) {
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
</script>
@endsection
