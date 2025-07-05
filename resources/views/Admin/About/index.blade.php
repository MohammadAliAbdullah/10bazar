@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('About Us'),
        'parent' => __('Home'),
        'child' => __('About'),
        'button' => __('Add About'),
        'button_icon' => 'lni lni-plus',
        'route' => '#',
    ])
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        @include('Admin.include.message')
                        <div class="card-body p-0">
                            <table class="table table-bordered">
                                <thead class="custom-thead">
                                    <tr>
                                        <th>about_title</th>
                                        <th>content</th>
                                        <th>mission</th>
                                        <th>vision</th>
                                        <th>establistmet</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $value)
                                        <tr>
                                            <td>{{ $value->about_title }}</td>
                                            <td>
                                                {{ $value->content }}
                                            </td>
                                            <td>{{ $value->mission }}</td>
                                            <td>{{ $value->vision }}</td>
                                            <td>{{ $value->establistmet }}</td>
                                            <td>{{ $value->created_at->diffForHumans() }} </td>

                                            <td>
                                                <div class="row">
                                                    <a href="{{ route('madmin.aboutadmin.edit', $value->id) }}"
                                                        class="btn btn-success m-1"><i class="lni-pencil-alt"></i> </a>
                                                    {{--                                                    {!! Form::open(['method'=>'DELETE','route'=>['madmin.categories.destroy',$value->id]]) !!} --}}
                                                    {{--                                                    <button type="submit" value="Delete" class="btn btn-danger m-1" onclick="return confirm('Do you want to Delete, Delete with product')"><i class="lni-trash"></i></button> --}}
                                                    {{--                                                    {!! Form::close() !!} --}}

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                            <div class="float-right">
                                {{ $categories->render() }}
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
