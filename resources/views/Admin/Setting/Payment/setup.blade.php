@extends('Admin.layoutApp.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Payment Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.paymentsetup.create') }}" class="btn btn-primary btn-sm mr-2"><i
                                class="fa fa-plus"></i> Add Payment Setup</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @include('Admin.include.message')

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead class="custom-thead">
                                <tr>
                                    <th>Method</th>
                                    <th>Email</th>
                                    <th>Live</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($setups as $setup)
                                    <tr>
                                        <td>{{ $setup->paymentMethod->title ?? 'N/A' }}</td>
                                        <td>{{ $setup->email }}</td>
                                        <td>{{ $setup->is_live == 1 ? 'Live' : 'Sandbox' }}</td>
                                        <td>{{ $setup->is_active == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ $setup->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('madmin.paymentsetup.edit', $setup->id) }}"
                                                    class="btn btn-sm btn-info mr-1">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['madmin.paymentsetup.destroy', $setup->id],
                                                    'onsubmit' => 'return confirm("Delete this setup?")',
                                                ]) !!}
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                @if ($setups->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">No payment setups found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>



                        {{-- <div class="float-right mt-3">
                            {{ $configs->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
