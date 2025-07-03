@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Menu List'),
        'parent' => __('Home'),
        'child' => __('Menu'),
        'route' => route('madmin.adminmenu.create'),
    ])
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Menu
                        <a href="{{ route('madmin.adminmenu.create') }}" class="btn btn-primary">Menu Add</a>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Menu</a></li>
                        <li class="breadcrumb-item active">Menu add</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div> --}}
    <!-- /.content-header -->

    <div class="container-fluid">
        <div class="row">
         
            <!-- Table Section -->
            <div class="col-12">
                <div class="card shadow-sm">
                    {{-- <div class="card-header">
                        <h5 class="mb-0">Menu List</h5>
                    </div> --}}
                    <div class="card-body p-0">
                        @include('Admin.include.message')

                        <table class="table table-bordered table-hover mb-0">
                            <thead class="thead-light">
                                <tr>
                                    <th>SI</th>
                                    <th>Title</th>
                                    <th>Parent</th>
                                    <th>URL</th>
                                    <th>Icon</th>
                                    <th>OrderBy</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th width="250">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($packages as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->parent_id }}</td>
                                        <td>{{ $value->url }}</td>
                                        <td><i class="{{ $value->icon }}"></i></td>
                                        <td>{{ $value->orders }}</td>
                                        <td>
                                            @if ($value->status == 'Pending')
                                                <span class="badge badge-danger">{{ $value->status }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $value->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex flex-wrap">
                                                <a href="{{ route('madmin.adminmenu.edit', $value->id) }}"
                                                    class="btn btn-sm btn-success mr-2"><i class="lni-pencil-alt"></i></a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.adminmenu.destroy', $value->id]]) !!}
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Do you want to Delete?')">
                                                    <i class="lni-trash"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            {{ $packages->render() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Main content -->

    <!-- /.content -->
@endsection
