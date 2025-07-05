@extends('Admin.layoutApp.app')

@section('content')

@include('Admin.include.breadcrumb', [
    'page' => __('Blog List'),
    'parent' => __('Home'),
    'child' => __('Blogs'),
    'button' => __('Add Blog'),
    'button_icon' => 'lni lni-plus',
    'route' => route('madmin.blogs.create'),
])

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    @include('Admin.include.message')

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <thead class="custom-thead">
                                    <tr>
                                        <th>SI</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Thumb</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($blogs as $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->slug }}</td>
                                        <td>
                                            <img src="{{ asset('public/images/blogs/thumb/' . $value->thumb) }}" class="img-fluid" style="max-width: 80px; max-height: 60px;" alt="thumb">
                                        </td>
                                        <td>{{ $value->status }}</td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td class="text-nowrap">
                                            <a href="{{ route('madmin.blogs.edit', $value->id) }}" class="btn btn-success btn-sm">
                                                <i class="lni-pencil-alt"></i>
                                            </a>
                                            {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.blogs.destroy', $value->id], 'style' => 'display:inline']) !!}
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to Delete?')">
                                                <i class="lni-trash"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- /.table-responsive -->
                    </div> <!-- /.card-body -->

                    <div class="card-footer clearfix">
                        <div class="float-right">
                            {{ $blogs->links() }}
                        </div>
                    </div>

                </div> <!-- /.card -->
            </div>
        </div>
    </div>
</section>

@endsection
