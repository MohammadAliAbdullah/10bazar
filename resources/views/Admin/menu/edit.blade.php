@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit Menu'),
        'parent' => __('Home'),
        'child' => __('Menu'),
        'button' => __('Menu List'),
        'button_icon' => 'lni-text-align-justify',
        'route' => route('madmin.adminmenu.index'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        @include('Admin.include.message')

                        {!! Form::model($edits, [
                            'method' => 'PATCH',
                            'route' => ['madmin.adminmenu.update', $edits->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                        ]) !!}

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name', 'Title') !!}
                                {!! Form::text('name', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Menu title',
                                    'required'
                                ]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('parent_id', 'Parent') !!}
                                {!! Form::select('parent_id', ['0' => 'Select parent'] + $menus, null, [
                                    'class' => 'form-control',
                                    'required'
                                ]) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('url', 'URL') !!}
                                {!! Form::text('url', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Page URL',
                                    'required'
                                ]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('icon', 'Icon') !!}
                                {!! Form::text('icon', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'e.g. fas fa-home'
                                ]) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('orders', 'Order') !!}
                                {!! Form::number('orders', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Display order',
                                    'required'
                                ]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('status', 'Status') !!}
                                {!! Form::select('status', ['Active' => 'Active', 'Pending' => 'Pending'], null, [
                                    'class' => 'form-control'
                                ]) !!}
                            </div>
                        </div>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-info">Update</button>
                            <button onclick="window.history.back()" type="button" class="btn btn-secondary">Cancel</button>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
