@extends('Admin.layouts.master')
@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Attributes'),
        'parent' => __('Home'),
        'child' => __('Attribute'),
        'route' => route('madmin.attributes.create'),
    ])
    <!-- Content Header -->
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Attributes
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.attributes.create') }}" class="btn btn-primary btn-sm mr-2"><i class="fa fa-plus"></i> &nbsp; Add Attribute</a>
                    </ol>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @include('Admin.include.message')

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th>SI</th>
                                    <th>Name</th>
                                    <th>Value</th>
                                    <th>Parent</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attributes as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->value }}</td>
                                        <td>{{ $value->parent_id != 0 ? ($value->attribute_parent->name ?? 'N/A') : 'N/A' }}</td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('madmin.attributes.edit', $value->id) }}"
                                                    class="btn btn-success btn-sm mr-1">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.attributes.destroy', $value->id]]) !!}
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

                    {{-- Optional: Pagination --}}
                    {{-- <div class="row">
                        <div class="col-md-6 offset-md-2 m-0 float-right">
                            {{ $attributes->render() }}
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>
@endsection
