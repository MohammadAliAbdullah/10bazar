@extends('Admin.layouts.master')

@section('content')
<div class="container mt-4">
    <h3>Edit Language: {{ $locale }}</h3>
    <form method="POST" action="{{ route('madmin.lang.update', $locale) }}">
        @csrf
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Translation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($translations as $key => $value)
                <tr>
                    <td style="width: 40%"><input type="text" name="keys[]" value="{{ $key }}" class="form-control" readonly></td>
                    <td><input type="text" name="translations[{{ $key }}]" value="{{ $value }}" class="form-control"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-success">Save Changes</button>
        <a href="{{ route('madmin.lang.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
