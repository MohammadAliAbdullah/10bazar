@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit Attribute'),
        'parent' => __('Home'),
        'child' => __('Attribute'),
        'button' => __('Attribute Lists'),
        'button_icon' => 'lni-text-align-justify',
        'route' => route('madmin.attributes.index'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('Admin.include.message')

                        {!! Form::model($attribute, [
                            'method' => 'PATCH',
                            'route' => ['madmin.attributes.update', $attribute->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                        ]) !!}

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('name', 'Attribute Name') !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('value', 'Value') !!}
                                {!! Form::text('value', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('parent_id', 'Parent Attribute') !!}
                                {!! Form::select('parent_id', ['0' => 'Select parent'] + $parents, null, ['class' => 'form-control', 'required']) !!}
                            </div>

                            <div class="form-group col-md-6">
                                {!! Form::label('color_code', 'Color Code') !!}
                                <input type="text" name="color_code" value="{{ $attribute->color_code ?? '' }}" class="form-control my-colorpicker1 colorpicker-element" placeholder="Pick a color">
                            </div>
                        </div>

                        {{-- Optional: If image upload is needed --}}
                        {{-- <div class="row">
                            <div class="form-group col-md-6">
                                {!! Form::label('image', 'Image') !!}
                                {!! Form::file('image', ['class' => 'form-control']) !!}
                                @if($attribute->images)
                                    <img src="{{ asset('storage/admin/images/attributes/'.$attribute->images) }}" width="120" height="90" class="mt-2">
                                @endif
                            </div>
                        </div> --}}

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
    <script type="text/javascript">
        $('.my-colorpicker1').colorpicker();
    </script>
@endsection
