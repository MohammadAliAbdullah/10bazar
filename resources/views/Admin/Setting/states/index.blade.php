@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('States'),
        'parent' => __('Setting'),  
        'child' => __('States'),
        'button' => __('Add State'),
        'button_icon' => 'lni lni-plus',
        'route' => route('madmin.states.create'),
    ])

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of States -->
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="custom-thead">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($states as $state)
                                <tr>
                                    <td>{{ $state->id }}</td>
                                    <td>{{ $state->name }}</td>
                                    <td>
                                        <a href="{{ route('madmin.states.edit', $state->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('madmin.states.destroy', $state->id) }}" method="POST" style="display: inline-block;">
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
