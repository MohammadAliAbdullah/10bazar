@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Manage Currencies'),
        'parent' => __('Setting'),  
        'child' => __('Currencies'),
        'button' => __('Add Currency'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.currency.create'),
    ])    
    
    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <div class="card mb-4">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="dataTable" class="table table-bordered table-striped">
                            <thead class="custom-thead">
                                <tr>
                                    <th>Title</th>
                                    <th>Icon</th>
                                    <th>Position</th>
                                    <th>Rate</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($currencies as $currency)
                                    <tr>
                                        <td>{{ $currency->title }}</td>
                                        <td>{{ $currency->icon }}</td>
                                        <td>{{ $currency->position == 1 ? 'Left' : 'Right' }}</td>
                                        <td>{{ $currency->rate }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <!-- Edit Button -->
                                                <a href="{{ route('madmin.currency.edit', $currency->id) }}"
                                                    class="btn btn-sm btn-success mr-1">
                                                    <i class="lni-pencil-alt"></i>
                                                </a>

                                                <!-- Delete Button -->
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['madmin.currency.destroy', $currency->id],
                                                    'onsubmit' => 'return confirm("Are you sure to delete this currency?")',
                                                ]) !!}
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="lni-trash"></i>
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
    </section>
@endsection
