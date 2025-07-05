@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Cities'),
        'parent' => __('Setting'),
        'child' => __('Cities'),
        'button' => __('Add City'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.cities.create'),
    ])

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of Cities -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="custom-thead">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>State</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cities as $city)
                                <tr>
                                    <td>{{ $city->id }}</td>
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->state->name }}</td>
                                    <td>
                                        <a href="{{ route('madmin.cities.edit', $city->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('madmin.cities.destroy', $city->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
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
