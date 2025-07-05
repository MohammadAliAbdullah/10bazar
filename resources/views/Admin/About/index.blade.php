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
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <thead class="custom-thead">
                                        <tr>
                                            <th>About Title</th>
                                            <th>Content</th>
                                            <th class="d-none d-md-table-cell">Mission</th>
                                            <th class="d-none d-md-table-cell">Vision</th>
                                            <th class="d-none d-md-table-cell">Establishment</th>
                                            <th>Date</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $value)
                                            <tr>
                                                <td>{{ $value->about_title }}</td>
                                                <td>{{ Str::limit(strip_tags($value->content), 100) }}</td>
                                                <td class="d-none d-md-table-cell">{{ $value->mission }}</td>
                                                <td class="d-none d-md-table-cell">{{ $value->vision }}</td>
                                                <td class="d-none d-md-table-cell">{{ $value->establistmet }}</td>
                                                <td>{{ $value->created_at->diffForHumans() }}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{ route('madmin.aboutadmin.edit', $value->id) }}"
                                                       class="btn btn-success btn-sm m-1">
                                                        <i class="lni-pencil-alt"></i>
                                                    </a>
                                                    {{-- Uncomment if you want to enable delete --}}
                                                    {{--
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.categories.destroy', $value->id], 'style' => 'display:inline']) !!}
                                                        <button type="submit" class="btn btn-danger btn-sm m-1"
                                                                onclick="return confirm('Do you want to delete this item? This will also delete associated products.')">
                                                            <i class="lni-trash"></i>
                                                        </button>
                                                    {!! Form::close() !!}
                                                    --}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer clearfix">
                            <div class="float-right">
                                {{ $categories->links() }}
                            </div>
                        </div>

                    </div> <!-- /.card -->
                </div> <!-- /.col-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
