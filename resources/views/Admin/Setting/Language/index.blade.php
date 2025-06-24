@extends('Admin.layouts.master')

@section('content')
<div class="container mt-4">
    <h3>Available Languages</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Locale</th>
                <th>File Name</th>
                <th>Size (bytes)</th>
                <th>Last Modified</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($languages as $lang)
                <tr>
                    <td>{{ $lang['locale'] }}</td>
                    <td>{{ $lang['name'] }}</td>
                    <td>{{ $lang['size'] }}</td>
                    <td>{{ date('Y-m-d H:i:s', $lang['last_modified']) }}</td>
                    <td><a href="{{ route('madmin.lang.edit', $lang['locale']) }}" class="btn btn-sm btn-primary">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
