@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('User List'),
        'parent' => __('Home'),
        'child' => __('Admin'),
        'button' => __('Add User'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.adminuser.create'),
    ])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('Admin.include.message')
                        <div class="card-body p-0">
                            <table class="table table-bordered">
                                <thead class="custom-thead">
                                    <tr>
                                        <th>SI</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($values as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>
                                                {{ $value->email }}
                                            </td>
                                            <td>
                                                {{ $value->role_id == 1 ? 'Super Admin' : 'Admin' }}
                                            </td>
                                            <td>{{ $value->status }}</td>
                                            <td>{{ date('d-m-Y', strtotime($value->created_at)) }}</td>

                                            <td>
                                                <div class="row">
                                                    <a href="{{ route('madmin.adminuser.edit', $value->id) }}"
                                                        class="btn btn-success m-1"><i class="lni-pencil-alt"></i> </a>
                                                    @if ($value->id != 1)
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.adminuser.destroy', $value->id]]) !!}
                                                        <button type="submit" value="Delete" class="btn btn-danger m-1"
                                                            onclick="return confirm('Do you want to Delete, Delete with product')"><i
                                                                class="lni-trash"></i></button>
                                                        {!! Form::close() !!}
                                                    @endif

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

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
