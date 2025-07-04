@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Newsletter'),
        'parent' => __('Home'),
        'child' => __('Newsletter'),
        'button' => __(''),
        'button_icon' => '',
        'route' => '#',
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('Admin.include.message')

                <div class="card">
                    <div class="card-body p-0">
                        <table class="table table-bordered mb-0">
                            <thead class="custom-thead">
                                <tr>
                                    <th style="width: 50px">SI</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th style="width: 120px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($values as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->email }}</td>
                                        <td>{{ $value->status }}</td>
                                        <td>{{ $value->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="d-flex">
                                                {{-- Uncomment this if you later implement edit --}}
                                                {{-- <a href="{{ route('madmin.newsletteradmin.edit', $value->id) }}" class="btn btn-success btn-sm mr-1">
                                                    <i class="lni-pencil-alt"></i>
                                                </a> --}}
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.newsletteradmin.destroy', $value->id]]) !!}
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Do you want to delete this newsletter?')">
                                                    <i class="lni-trash"></i>
                                                </button>
                                                {!! Form::close() !!}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                @if ($values->isEmpty())
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-3">
                                            No newsletter records found.
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            {{ $values->links() }}
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
