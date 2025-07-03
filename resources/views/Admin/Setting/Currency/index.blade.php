@extends('Admin.layoutApp.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Currencies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.currency.create') }}" class="btn btn-primary btn-sm mr-2"><i
                                class="fa fa-plus"></i> Add Currency</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <div class="card mb-4">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead class="custom-thead">
                                <tr>
                                    <th>Title</th>
                                    <th>Icon</th>
                                    <th>Position</th>
                                    <th>Rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($currencies as $currency)
                                    <tr>
                                        <td>{{ $currency->title }}</td>
                                        <td>{{ $currency->icon }}</td>
                                        <td>{{ $currency->position == 1 ? 'Left' : 'Right' }}</td>
                                        <td>{{ $currency->rate }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <!-- Edit Button -->
                                                <a href="{{ route('madmin.currency.edit', $currency->id) }}"
                                                    class="btn btn-sm btn-success mr-1">
                                                    <i class="fa fa-pen"></i>
                                                </a>

                                                <!-- Delete Button -->
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['madmin.currency.destroy', $currency->id],
                                                    'onsubmit' => 'return confirm("Are you sure to delete this currency?")',
                                                ]) !!}
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
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
    </section>
@endsection
