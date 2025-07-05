@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Create State'),
        'parent' => __('Setting'),
        'child' => __('States'),
        'button' => __('Back to List'),
        'button_icon' => 'lni lni-arrow-left',
        'route' => route('madmin.states.index'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('madmin.states.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
