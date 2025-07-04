@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Add Attribute'),
        'parent' => __('Home'),
        'child' => __('Attribute'),
        'button' => __('Attribute Lists'),
        'button_icon' => 'lni-text-align-justify',
        'route' => route('madmin.attributes.index'),
    ])

    <!-- Main content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('Admin.include.message')

                        {!! Form::open([
                            'method' => 'POST',
                            'route' => 'madmin.attributes.store',
                            'class' => 'form-horizontal',
                            'files' => true,
                        ]) !!}

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name', 'Attribute Name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter attribute name', 'required']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('value', 'Value') !!}
                                {!! Form::text('value', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'e.g. #cccccc',
                                    'required',
                                ]) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('parent_id', 'Parent') !!}
                                {!! Form::select('parent_id', ['0' => 'Select parent'] + $attributes, null, [
                                    'class' => 'form-control',
                                    'required',
                                ]) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('color_code', 'Color Code') !!}
                                <input type="text" class="form-control my-colorpicker1 colorpicker-element"
                                    name="color_code" placeholder="Pick a color">
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

    <!-- /.content -->
@endsection
@section('script')
    <script type="text/javascript">
        //Colorpicker
        $('.my-colorpicker1').colorpicker();
    </script>
@endsection
