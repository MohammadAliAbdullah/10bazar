@extends('Admin.layoutApp.app')

@section('content')

    @include('Admin.include.breadcrumb', [
        'page' => __($type == 'about' ? 'About Us' : 'Page List'),
        'parent' => __('Home'),
        'child' => __($type == 'about' ? 'About' : 'Pages'),
        'button' => __($type == 'about' ? 'Add About' : 'Add Page'),
        'button_icon' => 'lni lni-plus',
        'route' => $type == 'about' ? route('madmin.aboutadmin.create') : route('madmin.pages.create'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        @include('Admin.include.message')

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover mb-0">
                                    <thead class="custom-thead">
                                        <tr>
                                            @if($type == 'about')
                                                <th>About Title</th>
                                                <th>Content</th>
                                                <th>Mission</th>
                                                <th>Vision</th>
                                                <th>Establishment</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            @else
                                                <th>SI</th>
                                                <th>Title</th>
                                                <th>Slug</th>
                                                <th class="d-none d-md-table-cell">Thumb</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $value)
                                            <tr>
                                                @if($type == 'about')
                                                    <td>{{ $value->about_title }}</td>
                                                    <td>{{ Str::limit(strip_tags($value->content), 60) }}</td>
                                                    <td>{{ $value->mission }}</td>
                                                    <td>{{ $value->vision }}</td>
                                                    <td>{{ $value->establistmet }}</td>
                                                    <td>{{ $value->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <div class="d-flex flex-wrap">
                                                            <a href="{{ route('madmin.aboutadmin.edit', $value->id) }}" class="btn btn-success btn-sm m-1">
                                                                <i class="lni-pencil-alt"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                @else
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $value->title }}</td>
                                                    <td>{{ $value->slug }}</td>
                                                    <td class="d-none d-md-table-cell">
                                                        @if ($value->thumb == null)
                                                            <img src="{{ asset('public/asset/notfind.png') }}" width="80" height="60" class="img-fluid">
                                                        @else
                                                            <img src="{{ asset('public/images/pages/' . $value->thumb) }}" width="80" height="60" class="img-fluid">
                                                        @endif
                                                    </td>
                                                    <td>{{ $value->status }}</td>
                                                    <td>{{ $value->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <div class="d-flex flex-wrap">
                                                            <a href="{{ route('madmin.pages.edit', $value->id) }}" class="btn btn-success btn-sm m-1">
                                                                <i class="lni-pencil-alt"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer clearfix">
                            <div class="float-right">
                                {{ $data->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
