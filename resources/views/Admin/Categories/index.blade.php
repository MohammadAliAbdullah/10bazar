@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Category List'),
        'parent' => __('Home'),
        'child' => __('Sale'),
        'button' => __('All Orders'),
        'button_icon' => 'lni lni-cart',
        'route' => '#',
        'multipleBtn' => [
            ['name' => 'Category', 'class' => 'btn-info', 'icon' => 'lni-plus', 'route' => route('madmin.categories.create')],
            ['name' => 'Regular', 'class' => 'btn-dark', 'icon' => 'lni-text-align-justify', 'route' => route('madmin.regular.index')],
            ['name' => 'Special', 'class' => 'btn-success', 'icon' => 'lni-text-align-justify', 'route' => route('madmin.spacial.index')],
        ],
    ])

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @include('Admin.include.message')

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead class="custom-thead">
                                <tr>
                                    <th>SI</th>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Thumb</th>
                                    <th>Parent ID</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->title }}</td>
                                        <td>{{ $value->slug }}</td>
                                        <td>
                                            <img src="{{ $value->thumb ? asset('public/images/category/' . $value->thumb) : asset('public/admin/notfind.png') }}"
                                                width="50" height="30">
                                        </td>
                                        <td>{{ $value->parent->title ?? 'N/A' }}</td>
                                        <td>{{ $value->status }}</td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('madmin.categories.edit', $value->id) }}"
                                                    class="btn btn-success btn-sm mr-1">
                                                    <i class="lni-pencil-alt"></i>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.categories.destroy', $value->id]]) !!}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this?')"><i class="lni-trash"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
