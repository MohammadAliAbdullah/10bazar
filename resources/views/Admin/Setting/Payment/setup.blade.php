@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Payment Setup'),
        'parent' => __('Setting'),
        'child' => __('Payment'),
        'button' => __('Add New Setup'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.paymentsetup.create'),
    ])

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
                                                    <i class="lni-pencil-alt"></i>
                                                </a>
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['madmin.paymentsetup.destroy', $setup->id],
                                                    'onsubmit' => 'return confirm("Delete this setup?")',
                                                ]) !!}
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="lni-trash"></i>
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
