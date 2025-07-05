@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Add user'),
        'parent' => __('Home'),
        'child' => __('Admin'),
        'button' => __('Back to List'),
        'button_icon' => 'lni lni-arrow-left',
        'route' => route('madmin.adminuser.index'),
    ])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        @include('Admin.include.message')
                        <!-- form start -->
                        {!! Form::open(['method' => 'POST', 'route' => 'madmin.adminuser.store', 'class' => 'form-horizontal']) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {!! Form::label('name', 'Name', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-8">
                                            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('name', 'Email', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-8">
                                            {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        {!! Form::label('name', 'Password', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required']) !!}
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="lni lni-eye toggle-password" style="cursor: pointer;"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('name', 'Status', ['class' => 'col-sm-2']) !!}
                                        <div class="col-sm-8">
                                            {!! Form::select('status', ['Active' => 'Active', 'Deactive' => 'Deactive'], null, [
                                                'class' => 'form-control',
                                                'id' => 'receiver',
                                                'required',
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button onclick="window.history.back()" class="btn btn-default">Cancel</button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();

            // Toggle password visibility
            $(document).on('click', '.toggle-password', function() {
                const input = $('#password');
                const icon = $(this);
                const type = input.attr('type') === 'password' ? 'text' : 'password';
                input.attr('type', type);
                icon.toggleClass('lni lni-eye-slash');
            });
        });
    </script>
@endsection
