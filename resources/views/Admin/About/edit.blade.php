@extends('Admin.layoutApp.app')

@section('content')

    @include('Admin.include.breadcrumb', [
        'page' => __('Edit About Us'),
        'parent' => __('Home'),
        'child' => __('About'),
        'button' => __('About List'),
        'button_icon' => 'lni lni-list',
        'route' => route('madmin.aboutadmin.index'),
    ])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @include('Admin.include.message')

                        <!-- Form start -->
                        {!! Form::model($category, [
                            'method' => 'PATCH',
                            'route' => ['madmin.aboutadmin.update', $category->id],
                            'class' => 'form-horizontal',
                            'files' => true,
                        ]) !!}

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="form-group row">
                                        {!! Form::label('about_title', 'About Title', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::text('about_title', null, ['class' => 'form-control', 'required']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('content', 'About Us', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => 5]) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('mission', 'Mission', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::textarea('mission', null, ['class' => 'form-control', 'rows' => 3]) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('vision', 'Vision', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::textarea('vision', null, ['class' => 'form-control', 'rows' => 3]) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        {!! Form::label('establistmet', 'Establishment', ['class' => 'col-sm-2 col-form-label']) !!}
                                        <div class="col-sm-10">
                                            {!! Form::textarea('establistmet', null, ['class' => 'form-control', 'rows' => 3]) !!}
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="mt-3">
                                <button type="submit" class="btn btn-info">Update</button>
                                <button type="button" onclick="window.history.back()" class="btn btn-default">Cancel</button>
                            </div>
                        </div>

                        {!! Form::close() !!}
                        <!-- Form end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
