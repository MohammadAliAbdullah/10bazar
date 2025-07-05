@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Payment Methods'),
        'parent' => __('Home'),
        'child' => __('Payment Methods'),
        'button' => __('Add Payment Method'),
        'button_icon' => 'lni lni-plus',
        'route' => '#',
    ])

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of Methods -->
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-bordered mb-0">
                        <thead class="custom-thead">
                            <tr>
                                <th>Title</th>
                                <th>Code</th>
                                <th class="d-none d-md-table-cell">Is Web</th>
                                <th class="d-none d-md-table-cell">COA ID</th>
                                <th>Status</th>
                                <th class="d-none d-md-table-cell">Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($methods as $method)
                                <tr>
                                    <td>{{ $method->title }}</td>
                                    <td>{{ $method->code }}</td>
                                    <td class="d-none d-md-table-cell">{{ $method->is_web == 1 ? 'Yes' : 'No' }}</td>
                                    <td class="d-none d-md-table-cell">{{ $method->acc_coa_id ?? 'N/A' }}</td>
                                    <td>{{ $method->is_active == 1 ? 'Active' : 'Inactive' }}</td>
                                    <td class="d-none d-md-table-cell">{{ $method->created_at->diffForHumans() }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('madmin.paymentmethod.edit', $method->id) }}"
                                                class="btn btn-sm btn-info mr-1">
                                                <i class="lni-pencil-alt"></i>
                                            </a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'route' => ['madmin.paymentmethod.destroy', $method->id],
                                                'onsubmit' => 'return confirm("Delete this method?")',
                                            ]) !!}
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="lni-trash"></i>
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
