@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Add Unit'),
        'parent' => __('Home'),
        'child' => __('Unit'),
        'button' => __('Unit List'),
        'button_icon' => 'lni-text-align-justify',
        'route' => route('madmin.units.index'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('Admin.include.message')

                        {!! Form::open([
                            'method' => 'POST',
                            'route' => 'madmin.units.store',
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name', 'Unit') !!}
                                {!! Form::text('name', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter unit name',
                                    'required'
                                ]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('value', 'Value') !!}
                                {!! Form::text('value', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter unit value',
                                    'required'
                                ]) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('status', 'Status') !!}
                                {!! Form::select('status', [
                                    'Active' => 'Active',
                                    'Pending' => 'Pending'
                                ], null, [
                                    'class' => 'form-control',
                                    'required'
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

@section('script')
@endsection
