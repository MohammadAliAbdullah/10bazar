@extends('Admin.layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Language: {{ $locale }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="#" class="text-primary mr-2">Setting</a>
                        <a href="#" class="text-success btn-sm mr-2">/Edit Languages</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @include('Admin.include.message')
                    <form method="POST" action="{{ route('madmin.lang.update', $locale) }}">
                        @csrf
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>Translation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($translations as $key => $value)
                                        <tr>
                                            <td style="width: 40%"><input type="text" name="keys[]"
                                                    value="{{ $key }}" class="form-control" readonly></td>
                                            <td><input type="text" name="translations[{{ $key }}]"
                                                    value="{{ $value }}" class="form-control"></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button class="btn btn-success">Save Changes</button>
                        <a href="{{ route('madmin.lang.index') }}" class="btn btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
