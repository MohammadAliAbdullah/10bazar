@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Brand List'),
        'parent' => __('Home'),
        'child' => __('Brand'),
        'button' => __('Add Brand'),
        'button_icon' => 'lni-plus',
        'route' => route('madmin.brands.create'),
    ])
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
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brands as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->slug }}</td>
                                        <td>
                                            <img src="{{ asset($value->thumb) }}" width="50" height="30">
                                        </td>
                                        <td>{{ $value->status }}</td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('madmin.brands.edit', $value->id) }}"
                                                    class="btn btn-success btn-sm mr-1">
                                                    <i class="lni-pencil-alt"></i>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.brands.destroy', $value->id]]) !!}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this?')">
                                                    X
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
