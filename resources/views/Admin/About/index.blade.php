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
                                        <th>About Title</th>
                                        <th>Content</th>
                                        <th>Mission</th>
                                        <th>Vision</th>
                                        <th>Establishment</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $value)
                                        <tr>
                                            <td>{{ $value->about_title }}</td>
                                            <td>{{ $value->content }}</td>
                                            <td>{{ $value->mission }}</td>
                                            <td>{{ $value->vision }}</td>
                                            <td>{{ $value->establistmet }}</td>
                                            <td>{{ $value->created_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="d-flex flex-wrap">
                                                    <a href="{{ route('madmin.aboutadmin.edit', $value->id) }}"
                                                       class="btn btn-success m-1">
                                                        <i class="lni-pencil-alt"></i>
                                                    </a>
                                                    {{-- Uncomment if you want to enable delete --}}
                                                    {{--
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.categories.destroy', $value->id]]) !!}
                                                        <button type="submit" class="btn btn-danger m-1"
                                                                onclick="return confirm('Do you want to delete this item? This will also delete associated products.')">
                                                            <i class="lni-trash"></i>
                                                        </button>
                                                    {!! Form::close() !!}
                                                    --}}
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

                    </div> <!-- /.card -->
                </div> <!-- /.col-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
