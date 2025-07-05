@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Available Languages'),
        'parent' => __('Setting'),
        'child' => __('Languages'),
        'button' => null,
        'button_icon' => null,
        'route' => '#',
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('Admin.include.message')

                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped mb-0">
                                <thead class="custom-thead">
                                    <tr>
                                        <th>Locale</th>
                                        <th>File Name</th>
                                        <th>Size (bytes)</th>
                                        <th>Last Modified</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($languages as $lang)
                                        <tr>
                                            <td>{{ $lang['locale'] }}</td>
                                            <td>{{ $lang['name'] }}</td>
                                            <td>{{ $lang['size'] }}</td>
                                            <td>{{ date('Y-m-d H:i:s', $lang['last_modified']) }}</td>
                                            <td>
                                                <a href="{{ route('madmin.lang.edit', $lang['locale']) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No language files found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div> <!-- /.table-responsive -->
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
