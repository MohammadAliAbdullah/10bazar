@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => 'Edit Blog',
        'parent' => 'Blog',
        'child' => 'Edit Blog',
        'button' => 'Blog List',
        'button_icon' => 'lni lni-list',
        'route' => route('madmin.blogs.index'),
    ])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('Admin.include.message')
                        <!-- form start -->
                        {!! Form::model($blog, [
                            'method' => 'PATCH',
                            'route' => ['madmin.blogs.update', $blog->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                        ]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        {!! Form::label('name', 'Blog Title', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('name', 'Image', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::file('images', ['class' => 'form-control', 'id' => 'receiver']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('name', 'Content', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'summernote', 'required']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('name', 'Blog Writer', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('writer', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
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

                                    <div class="form-group row">
                                        {!! Form::label('name', 'Meta Title', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('meta_title', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('name', 'Meta Keyword', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('meta_keyword', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('name', 'Meta Description', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('meta_description', null, ['class' => 'form-control', 'id' => 'receiver', 'required']) !!}
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
