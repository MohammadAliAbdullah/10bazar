@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit Faq'),
        'parent' => __('Home'),
        'child' => __('Faq'),
        'button' => __('Faq List'),
        'button_icon' => 'lni lni-list',
        'route' => route('madmin.faqs.index'),
    ])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        {{--                <div class="card-header"> --}}
                        {{--                    <h3 class="card-title">Horizontal Form</h3> --}}
                        {{--                </div> --}}
                        <!-- /.card-header -->
                        @include('Admin.include.message')
                        <!-- form start -->
                        {!! Form::model($faq, [
                            'method' => 'PATCH',
                            'route' => ['madmin.faqs.update', $faq->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                        ]) !!}
                        <div class="card-body">


                            <div class="form-group row">
                                {!! Form::label('name', 'Title', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
                                </div>
                            </div>


                            <div class="form-group row">
                                {!! Form::label('name', 'Content', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('name', 'Orders', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::number('orders', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
                                </div>
                            </div>

                            <div class="form-group row">
                                {!! Form::label('name', 'Status', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-10">
                                    {!! Form::select('status', ['Active' => 'Active', 'Pending' => 'Pending'], null, [
                                        'class' => 'form-control',
                                        'id' => 'receiver',
                                        'required',
                                    ]) !!}
                                </div>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button onclick="window.history.back()" class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <!-- /.card-footer -->
                        {!! Form::close() !!}

                    </div>
                </div>

            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection