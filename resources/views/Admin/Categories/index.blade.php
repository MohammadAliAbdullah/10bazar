@extends('Admin.layoutApp.app')

@section('content')
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        category
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.categories.create') }}" class="btn btn-primary btn-sm mr-2"><i
                                class="fa fa-plus"></i> &nbsp; Category</a>
                        <a href="{{ route('madmin.regular.index') }}" class="btn btn-success btn-sm mr-2"><i
                                class="fa fa-list"></i> &nbsp; Regular</a>
                        <a href="{{ route('madmin.spacial.index') }}" class="btn btn-warning btn-sm"><i
                                class="fa fa-list"></i> &nbsp; Special</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @include('Admin.include.message')

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead class="custom-thead">
                                <tr>
                                    <th>SI</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Thumb</th>
                                    <th>Parent ID</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->slug }}</td>
                                        <td>
                                            <img src="{{ $value->thumb ? asset('public/images/category/' . $value->thumb) : asset('public/admin/notfind.png') }}"
                                                width="50" height="30">
                                        </td>
                                        <td>{{ $value->parent->title ?? 'N/A' }}</td>
                                        <td>{{ $value->status }}</td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('madmin.categories.edit', $value->id) }}"
                                                    class="btn btn-success btn-sm mr-1">
                                                    <i class="lni-pencil-alt"></i>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.categories.destroy', $value->id]]) !!}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this?')"><i class="lni-trash"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
