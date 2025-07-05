@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Edit City'),
        'parent' => __('Setting'),
        'child' => __('Cities'),        
        'route' => route('madmin.cities.index'),
        'button' => __('Back to List'),
        'button_icon' => 'lni lni-arrow-left',
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('madmin.cities.update', $city->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $city->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="state_id">State</label>
                            <select class="form-control" id="state_id" name="state_id" required>
                                @foreach($states as $state)
                                    <option value="{{ $state->id }}" {{ $city->state_id == $state->id ? 'selected' : '' }}>
                                        {{ $state->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
