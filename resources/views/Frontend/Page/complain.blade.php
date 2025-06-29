@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Complain'), 'subPage' => __('Complain Box')])


    <!-- main-section-area-start -->
    <div class="checkout block">
        <div class="container">
            @include('include.message')
            <div class="row">

                <div class="col-lg-12">
                    <div class="card-header">
                        <h3 class="text-center">Complain Box</h3>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['method' => 'POST', 'route' => 'complains.store', 'class' => 'form-horizontal']) !!}
                        <div class="form-group row">
                            <div class="col-sm-6">
                                {!! Form::label('name', 'Name', ['class' => 'col-form-label']) !!}
                                {!! Form::text('name', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Please enter your name...',
                                    'required',
                                ]) !!}
                            </div>

                            <div class="col-sm-6">
                                {!! Form::label('name', 'Phone Number', ['class' => 'col-form-label']) !!}
                                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'i.e:01XXXXXXXX', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                {!! Form::label('name', 'Email', ['class' => 'col-form-label']) !!}
                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'i.e:example@gmail.com', 'required']) !!}
                            </div>

                            <div class="col-sm-6">
                                {!! Form::label('name', 'Subject', ['class' => 'col-form-label']) !!}
                                {!! Form::text('subject', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'i.e: I got some issue',
                                    'required',
                                ]) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8">
                                {!! Form::label('name', 'Complain', ['class' => 'col-form-label']) !!}
                                {!! Form::textarea('complain', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Please enter your complain...',
                                    'required',
                                    'rows' => 3,
                                ]) !!}
                            </div>
                            <div class="col-sm-4">
                                {!! Form::label('name', 'Attachment File', ['class' => 'col-form-label']) !!}
                                {!! Form::file('attachment', null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'i.e: I got some issue',
                                    'required',
                                ]) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success text-right">Submit</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- main-section-area-start -->
@endsection
