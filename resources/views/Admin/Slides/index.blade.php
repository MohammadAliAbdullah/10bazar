@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Slides'),
        'parent' => __('Home'),
        'child' => __('Slides'),
        'button' => __('Slides Add'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.slides.create'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        @include('Admin.include.message')

                        <div class="card-body p-0 table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <thead class="custom-thead">
                                    <tr>
                                        <th>SI</th>
                                        <th>Title</th>
                                        <th>URL</th>
                                        <th>Image</th>
                                        <th>Orders</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th width="150">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($slides as $slide)
                                        <tr>
                                            <td>{{ $slide->id }}</td>
                                            <td>{{ $slide->title }}</td>
                                            <td>{{ $slide->url }}</td>
                                            <td>
                                                @if ($slide->images)
                                                    <img src="{{ asset($slide->images) }}"
                                                        alt="Slide Image" width="80" height="60"
                                                        class="img-thumbnail">
                                                @else
                                                    <span class="text-muted">No Image</span>
                                                @endif
                                            </td>
                                            <td>{{ $slide->orders }}</td>
                                            <td>{{ ucfirst($slide->status) }}</td>
                                            <td>{{ $slide->created_at->diffForHumans() }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('madmin.slides.edit', $slide->id) }}"
                                                        class="btn btn-success btn-sm mr-1" title="Edit">
                                                        <i class="lni lni-pencil-alt"></i>
                                                    </a>
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['madmin.slides.destroy', $slide->id],
                                                        'onsubmit' => 'return confirm("Are you sure you want to delete this slide?")',
                                                    ]) !!}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                        <i class="lni lni-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center text-muted">No slides found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer clearfix">
                            {{ $slides->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
