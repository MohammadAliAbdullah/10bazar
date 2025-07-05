@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => isset($currency) ? __('Edit Currencies') : __('Add Currencies'),
        'parent' => __('Home'),
        'child' => __('Currencies'),
        'button' => isset($currency) ? __('List Currency') : __('Add Currency'),
        'button_icon' => 'lni lni-list',
        'route' =>  route('madmin.currency.index'),
    ])

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <div class="card">
                <div class="card-body">
                    <form
                        action="{{ isset($currency) ? route('madmin.currency.update', $currency->id) : route('madmin.currency.store') }}"
                        method="POST">
                        @csrf
                        @if(isset($currency))
                            @method('POST')
                        @endif

                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input id="title" type="text" name="title" class="form-control" required
                                value="{{ old('title', $currency->title ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="icon">Symbol/Icon <span class="text-danger">*</span></label>
                            <input id="icon" type="text" name="icon" class="form-control" required
                                value="{{ old('icon', $currency->icon ?? '') }}">
                        </div>

                        <div class="form-group">
                            <label for="position">Position <span class="text-danger">*</span></label>
                            <select id="position" name="position" class="form-control" required>
                                <option value="1" {{ old('position', $currency->position ?? '') == 1 ? 'selected' : '' }}>
                                    Left
                                </option>
                                <option value="2" {{ old('position', $currency->position ?? '') == 2 ? 'selected' : '' }}>
                                    Right
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="rate">Exchange Rate <span class="text-danger">*</span></label>
                            <input id="rate" type="number" step="0.01" name="rate" class="form-control" required
                                value="{{ old('rate', $currency->rate ?? '') }}">
                        </div>

                        <button class="btn btn-{{ isset($currency) ? 'success' : 'primary' }}" type="submit">
                            {{ isset($currency) ? __('Update') : __('Save') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
