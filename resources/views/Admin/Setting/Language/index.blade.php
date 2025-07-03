@extends('Admin.layoutApp.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Available Languages</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                            <a href="#" class="text-primary mr-2">Setting</a>
                            <a href="#" class="text-success btn-sm mr-2">/Languages</a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card">

                <div class="card-body">
                    @include('Admin.include.message')

                    <div class="table-responsive">
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
                                @foreach ($languages as $lang)
                                    <tr>
                                        <td>{{ $lang['locale'] }}</td>
                                        <td>{{ $lang['name'] }}</td>
                                        <td>{{ $lang['size'] }}</td>
                                        <td>{{ date('Y-m-d H:i:s', $lang['last_modified']) }}</td>
                                        <td><a href="{{ route('madmin.lang.edit', $lang['locale']) }}"
                                                class="btn btn-sm btn-primary">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


{{-- @extends('Admin.layoutApp.app')

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
            @foreach ($languages as $lang)
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
@endsection --}}
