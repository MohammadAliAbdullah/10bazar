@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Menu List'),
        'parent' => __('Home'),
        'child' => __('Menu'),
        'button' => __('Menu Add'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.adminmenu.create'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @include('Admin.include.message')

                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead class="custom-thead">
                                    <tr>
                                        <th scope="col">SI</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Parent</th>
                                        <th scope="col">URL</th>
                                        <th scope="col">Icon</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Date</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($packages as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->parent_id ?? 'N/A' }}</td>
                                            <td>{{ $value->url }}</td>
                                            <td><i class="{{ $value->icon }}"></i></td>
                                            <td>{{ $value->orders }}</td>
                                            <td>
                                                <span
                                                    class="badge badge-{{ $value->status == 'Pending' ? 'danger' : 'success' }}">
                                                    {{ $value->status }}
                                                </span>
                                            </td>
                                            <td>{{ $value->created_at->diffForHumans() }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="{{ route('madmin.adminmenu.edit', $value->id) }}"
                                                        class="btn btn-sm btn-success" title="Edit">
                                                        <i class="lni lni-pencil-alt"></i>
                                                    </a>
                                                    &nbsp;
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['madmin.adminmenu.destroy', $value->id],
                                                        'style' => 'display:inline',
                                                    ]) !!}
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Do you want to delete this item?')"
                                                        title="Delete">
                                                        <i class="lni lni-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center text-muted">No menu items found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @if ($packages->hasPages())
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                {{ $packages->links() }}
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
