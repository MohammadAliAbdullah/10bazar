@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit Unit'),
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

                        {!! Form::model($unit, [
                            'method' => 'PATCH',
                            'route' => ['madmin.units.update', $unit->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                        ]) !!}

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name', 'Title') !!}
                                {!! Form::text('name', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter unit title',
                                    'required',
                                ]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('value', 'Value') !!}
                                {!! Form::text('value', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Enter value',
                                    'required',
                                ]) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('status', 'Status') !!}
                                {!! Form::select(
                                    'status',
                                    [
                                        'Active' => 'Active',
                                        'Pending' => 'Pending',
                                    ],
                                    null,
                                    [
                                        'class' => 'form-control',
                                        'required',
                                    ],
                                ) !!}
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
