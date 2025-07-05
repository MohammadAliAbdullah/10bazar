@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Faqs'),
        'parent' => __('Home'),
        'child' => __('Faqs'),
        'button' => __('Add Faq'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.faqs.create'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        @include('Admin.include.message')

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <thead class="custom-thead">
                                        <tr>
                                            <th>SI</th>
                                            <th>Title</th>
                                            <th class="d-none d-md-table-cell">Content</th> <!-- Hide on mobile -->
                                            <th>Orders</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th class="text-nowrap" width="130">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($faqs as $value)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td class="d-none d-md-table-cell">
                                                    {{ Str::limit(strip_tags($value->content), 200) }}</td>
                                                <!-- Hide on mobile -->
                                                <td>{{ $value->orders }}</td>
                                                <td>
                                                    @if ($value->status == 'Pending')
                                                        <span
                                                            class="bg-danger text-white px-2 py-1 rounded">{{ $value->status }}</span>
                                                    @else
                                                        <span
                                                            class="bg-success text-white px-2 py-1 rounded">{{ $value->status }}</span>
                                                    @endif
                                                </td>
                                                <td>{{ $value->created_at->diffForHumans() }}</td>
                                                <td class="text-nowrap">
                                                    <a href="{{ route('madmin.faqs.edit', $value->id) }}"
                                                        class="btn btn-success btn-sm m-1">
                                                        <i class="lni-pencil-alt"></i>
                                                    </a>
                                                    {!! Form::open([
                                                        'method' => 'DELETE',
                                                        'route' => ['madmin.faqs.destroy', $value->id],
                                                        'style' => 'display:inline',
                                                    ]) !!}
                                                    <button type="submit" class="btn btn-danger btn-sm m-1"
                                                        onclick="return confirm('Do you want to Delete?')">
                                                        <i class="lni-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer clearfix">
                            <div class="float-right">
                                {{ $faqs->links() }}
                            </div>
                        </div>

                    </div> <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
