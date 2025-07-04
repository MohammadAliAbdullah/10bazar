@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Banner'),
        'parent' => __('Home'),
        'child' => __('Banner'),
        'button' => __('Add Banner'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.banners.create'),
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @include('Admin.include.message')

                    <div class="card-body p-0">
                        <table class="table table-bordered table-hover mb-0">
                            <thead class="custom-thead">
                                <tr>
                                    <th>SI</th>
                                    <th>Position</th>
                                    <th>URL</th>
                                    <th>Image</th>
                                    <th>Code</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th width="130">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($banners as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->position }}</td>
                                        <td>{{ $value->url }}</td>
                                        <td>
                                            <img src="{{ asset('public/images/banners/'.$value->images) }}" 
                                                 alt="Banner {{ $value->id }}" width="80" height="60">
                                        </td>
                                        <td>{{ $value->code }}</td>
                                        <td>{{ $value->type }}</td>
                                        <td>
                                            @if($value->status == 'Active')
                                                <span class="badge badge-success">Active</span>
                                            @elseif($value->status == 'Pending')
                                                <span class="badge badge-warning">Pending</span>
                                            @else
                                                <span class="badge badge-secondary">{{ $value->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Actions">
                                                <a href="{{ route('madmin.banners.edit', $value->id) }}" 
                                                   class="btn btn-sm btn-success" title="Edit">
                                                    <i class="lni-pencil-alt"></i>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.banners.destroy', $value->id], 'style' => 'display:inline']) !!}
                                                    <button type="submit" 
                                                            class="btn btn-sm btn-danger" 
                                                            onclick="return confirm('Are you sure to delete this banner?')"
                                                            title="Delete">
                                                        <i class="lni-trash"></i>
                                                    </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No banners found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        <div class="float-right">
                            {{ $banners->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
