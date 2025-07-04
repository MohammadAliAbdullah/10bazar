@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Add Menu'),
        'parent' => __('Home'),
        'child' => __('Menu'),
        'button' => __('Menu List'),
        'button_icon' => 'lni-text-align-justify',
        'route' => route('madmin.adminmenu.index'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('Admin.include.message')

                        {!! Form::open([
                            'method' => 'POST',
                            'route' => 'madmin.adminmenu.store',
                            'class' => 'form-horizontal',
                            'files' => true,
                        ]) !!}

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name', 'Title') !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Menu title', 'required']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('parent_id', 'Parent') !!}
                                {!! Form::select('parent_id', ['0' => 'Select parent'] + $menus, null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('url', 'URL') !!}
                                {!! Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'Page URL', 'required']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('icon', 'Icon') !!}
                                {!! Form::text('icon', 'fas fa-angle-right', ['class' => 'form-control', 'placeholder' => 'e.g. fas fa-home']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('orders', 'Order') !!}
                                {!! Form::number('orders', null, ['class' => 'form-control', 'placeholder' => 'Display order', 'required']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('status', 'Status') !!}
                                {!! Form::select('status', ['Active' => 'Active', 'Pending' => 'Pending'], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button onclick="window.history.back()" class="btn btn-default">Cancel</button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                    {{-- No pagination needed for form --}}
                </div>
            </div>
        </div>
    </div>
@endsection
