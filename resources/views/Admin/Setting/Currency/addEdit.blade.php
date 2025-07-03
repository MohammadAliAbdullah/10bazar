@extends('Admin.layoutApp.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Currencies</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.currency.index') }}" class="btn btn-primary btn-sm mr-2"><i
                                class="fa fa-bars"></i> List Currency</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <div class="card mb-4">
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

        </div>
    </section>
@endsection
