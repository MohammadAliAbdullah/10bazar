@extends('Admin.layouts.master')

@section('content')
    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Payment Gateway</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.paymentgetway.create') }}" class="btn btn-primary btn-sm mr-2">
                            <i class="fa fa-plus"></i> &nbsp; Add Payment Gateway
                        </a>
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
                            <thead class="thead-dark">
                                <tr>
                                    <th>SI</th>
                                    <th>Method</th>
                                    <th>Account No</th>
                                    <th>Logo</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($values as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->name ?? 'N/A' }}</td>
                                        <td>{{ $value->account_no ?? 'N/A' }}</td>
                                        <td>
                                            <img src="{{ $value->images ? asset('public/payment/' . $value->images) : asset('public/admin/notfind.png') }}"
                                                 width="80" height="60">
                                        </td>
                                        <td>{{ $value->type ?? 'N/A' }}</td>
                                        <td>{{ $value->status }}</td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('madmin.paymentgetway.edit', $value->id) }}" class="btn btn-success btn-sm mr-1">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.paymentgetway.destroy', $value->id]]) !!}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Do you want to Delete this item?')">
                                                    X
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="float-right mt-3">
                            {{ $values->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
