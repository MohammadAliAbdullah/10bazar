@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Visitor'),
        'parent' => __('Home'),
        'child' => __('Visitor'),
        'route' => '#',
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover mb-0">
                                    <thead class="custom-thead">
                                        <tr>
                                            <th>#</th>
                                            <th>IP Address</th>
                                            <th class="d-none d-md-table-cell">Country</th>
                                            <th class="d-none d-md-table-cell">City</th>
                                            <th>Browser</th>
                                            <th class="d-none d-md-table-cell">Platform</th>
                                            <th>Device</th>
                                            <th class="d-none d-md-table-cell">Referer</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($visitors as $key => $visitor)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $visitor->ip }}</td>
                                                <td class="d-none d-md-table-cell">{{ $visitor->country }}</td>
                                                <td class="d-none d-md-table-cell">{{ $visitor->city }}</td>
                                                <td>{{ $visitor->browser }}</td>
                                                <td class="d-none d-md-table-cell">{{ $visitor->platform }}</td>
                                                <td>{{ $visitor->device }}</td>
                                                <td class="d-none d-md-table-cell">{{ $visitor->referer }}</td>
                                                <td>{{ $visitor->created_at->format('Y-m-d') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- /.card-body -->

                        <div class="card-footer">
                            <div class="d-flex justify-content-center justify-content-md-end">
                                {{ $visitors->links() }}
                            </div>
                        </div> <!-- /.card-footer -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
