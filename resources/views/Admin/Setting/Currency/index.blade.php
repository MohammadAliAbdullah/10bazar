@extends('Admin.layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0 text-dark">Manage Currencies</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')

            <div class="card">
                <div class="card-header">{{ isset($currency) ? 'Edit Currency' : 'Add New Currency' }}</div>
                <div class="card-body">
                    <form
                        action="{{ isset($currency) ? route('madmin.currency.update', $currency->id) : route('madmin.currency.store') }}"
                        method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" required
                                value="{{ old('title', $currency->title ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label>Symbol/Icon</label>
                            <input type="text" name="icon" class="form-control" required
                                value="{{ old('icon', $currency->icon ?? '') }}">
                        </div>
                        <div class="form-group">
                            <label>Position</label>
                            <select name="position" class="form-control" required>
                                <option value="1"
                                    {{ old('position', $currency->position ?? '') == 1 ? 'selected' : '' }}>Left</option>
                                <option value="2"
                                    {{ old('position', $currency->position ?? '') == 2 ? 'selected' : '' }}>Right</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Exchange Rate</label>
                            <input type="number" step="0.01" name="rate" class="form-control" required
                                value="{{ old('rate', $currency->rate ?? '') }}">
                        </div>
                        <button class="btn btn-{{ isset($currency) ? 'success' : 'primary' }}" type="submit">
                            {{ isset($currency) ? 'Update' : 'Save' }}
                        </button>
                    </form>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Currency List</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
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
                                                <i class="fa fa-pen"></i>
                                            </a>

                                            <!-- Delete Button -->
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'route' => ['madmin.currency.destroy', $currency->id],
                                                'onsubmit' => 'return confirm("Are you sure to delete this currency?")',
                                            ]) !!}
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
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
