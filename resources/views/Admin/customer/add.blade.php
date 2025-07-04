@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Add Customer'),
        'parent' => __('Home'),
        'child' => __('Customer'),
        'button' => __('Customer List'),
        'button_icon' => 'lni-text-align-justify',
        'route' => route('madmin.customeradmin.index'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('Admin.include.message')

                <div class="card">
                    <div class="card-body">
                        {!! Form::open([
                            'method' => 'POST',
                            'route' => 'madmin.customeradmin.store',
                            'class' => 'form-horizontal',
                        ]) !!}

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name', 'Name') !!}
                                {!! Form::text('name', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter name',
                                    'required',
                                ]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('phone', 'Phone') !!}
                                {!! Form::number('phone', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter phone number',
                                    'required',
                                ]) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('email', 'Email') !!}
                                {!! Form::email('email', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter email address',
                                ]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('password', 'Password') !!}
                                {!! Form::text('password', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter password',
                                    'required',
                                ]) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                {!! Form::label('address', 'Address') !!}
                                {!! Form::textarea('address', null, [
                                    'class' => 'form-control',
                                    'rows' => 3,
                                    'placeholder' => 'Enter address',
                                    'required',
                                ]) !!}
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button onclick="window.history.back()" class="btn btn-default">Cancel</button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
