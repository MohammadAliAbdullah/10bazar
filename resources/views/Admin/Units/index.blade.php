@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Add Unit'),
        'parent' => __('Home'),
        'child' => __('Unit'),
        'route' => route('madmin.units.create'),
    ])
    <!-- Content Header -->
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Unit</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('madmin.units.create') }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Add Unit
                    </a>
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
                            <thead class="custom-thead">
                                <tr>
                                    <th>SI</th>
                                    <th>Name</th>
                                    <th>Value</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th width="180">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($units as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->value }}</td>
                                        <td>
                                            @if($value->status == 'Pending')
                                                <span class="badge badge-danger">{{ $value->status }}</span>
                                            @else
                                                <span class="badge badge-success">{{ $value->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('madmin.units.edit', $value->id) }}" class="btn btn-success btn-sm mr-1">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.units.destroy', $value->id]]) !!}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Do you want to delete this unit?')">
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

                    <!-- Pagination -->
                    {{-- <div class="row mt-3">
                        <div class="col-md-6 offset-md-3">
                            {{ $units->render() }}
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>
@endsection

