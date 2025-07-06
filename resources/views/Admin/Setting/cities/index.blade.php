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
                            @foreach ($cities as $city)
                                <tr>
                                    <td>{{ request('page') ? (request('page') - 1) * 10 + $loop->iteration : $loop->iteration }}
                                    </td>
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->state->name }}</td>
                                    <td>
                                        <a href="{{ route('madmin.cities.edit', $city->id) }}" class="btn btn-info btn-sm"><i
                                                class="lni lni-pencil-alt"></i></a>
                                        <form action="{{ route('madmin.cities.destroy', $city->id) }}" method="POST"
                                            style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="lni lni-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                        {{ $cities->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
