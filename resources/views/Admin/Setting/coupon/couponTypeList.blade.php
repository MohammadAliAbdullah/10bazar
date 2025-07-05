@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Coupon Types'),
        'parent' => __('Setting'),
        'child' => __('Coupon Types'),
        'button' => __('Add Coupon Type'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.coupon.type.add'),
    ])
    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="dataTable">
                            <thead class="custom-thead">
                                <tr>
                                    <th style="width: 5%;">#</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th style="width: 140px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($couponTypes as $i => $row)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>
                                            <span class="badge badge-{{ $row->is_active ? 'success' : 'secondary' }}">
                                                {{ $row->is_active ? 'Active' : 'Inactive' }}
                                            </span>
                                        </td>
                                        <td>{{ $row->created_at }}</td>
                                        <td>
                                            <a href="{{ route('madmin.coupon.type.edit', $row->id) }}"
                                                class="btn btn-sm btn-info" title="Edit">
                                                <i class="lni-pencil-alt"></i>
                                            </a>

                                            <form action="{{ route('madmin.coupon.type.delete') }}" method="POST"
                                                class="d-inline" onsubmit="return confirm('Are you sure to delete this coupon type?')">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                                <button class="btn btn-sm btn-danger" title="Delete">
                                                    <i class="lni-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                @if ($couponTypes->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center">No Coupon Types found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    {{-- Pagination (if applicable) --}}
                    {{-- {{ $couponTypes->links() }} --}}
                </div>
            </div>
        </div>
    </section>
@endsection
