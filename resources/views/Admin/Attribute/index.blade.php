@extends('Admin.layoutApp.app')
@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Attributes'),
        'parent' => __('Home'),
        'child' => __('Attribute'),
        'button' => __('Add Attribute'),
        'button_icon' => 'lni-plus',
        'route' => route('madmin.brands.index'),
        'route' => route('madmin.attributes.create'),
    ])
    <!-- Content Header -->
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
                                    <th>Name</th>
                                    <th>Value</th>
                                    <th>Parent</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($attributes as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->value }}</td>
                                        <td>{{ $value->parent_id != 0 ? $value->attribute_parent->name ?? 'N/A' : 'N/A' }}
                                        </td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('madmin.attributes.edit', $value->id) }}"
                                                    class="btn btn-success btn-sm mr-1">
                                                    <i class="lni-pencil-alt"></i>
                                                </a>
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.attributes.destroy', $value->id]]) !!}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure you want to delete this?')"><i
                                                        class="lni-trash"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- Optional: Pagination --}}
                    {{-- <div class="row">
                        <div class="col-md-6 offset-md-2 m-0 float-right">
                            {{ $attributes->render() }}
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </section>
@endsection
