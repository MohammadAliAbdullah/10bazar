@extends('Admin.layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Payment Methods</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.paymentmethod.create') }}" class="btn btn-primary btn-sm mr-2"><i
                                class="fa fa-plus"></i> Add Payment Method</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of Methods -->
            <div class="card">
                <div class="card-body p-0">
                    
                    
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Code</th>
                                <th>Is Web</th>
                                <th>COA ID</th>
                                <th>Status</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($methods as $method)
                                <tr>
                                    <td>{{ $method->title }}</td>
                                    <td>{{ $method->code }}</td>
                                    <td>{{ $method->is_web == 1 ? 'Yes' : 'No' }}</td>
                                    <td>{{ $method->acc_coa_id ?? 'N/A' }}</td>
                                    <td>{{ $method->is_active == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td>{{ $method->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('madmin.paymentmethod.edit', $method->id) }}"
                                                class="btn btn-sm btn-info mr-1">
                                                <i class="fa fa-pen"></i>
                                            </a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'route' => ['madmin.paymentmethod.destroy', $method->id],
                                                'onsubmit' => 'return confirm("Delete this method?")',
                                            ]) !!}
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            @if ($methods->isEmpty())
                                <tr>
                                    <td colspan="5" class="text-center">No payment methods found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>


                    
                </div>
            </div>
        </div>
    </section>
@endsection
