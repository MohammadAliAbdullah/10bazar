@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('SMS Log Add'),
        'parent' => __('SMS Log'),
        'child' => __('Add'),
        'button' => __('Back to List'),
        'button_icon' => 'lni lni-list',
        'route' => '#',  // adjust this route as needed  route('madmin.smslog.index')
    ])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Log table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        @include('Admin.include.message')

                        <div class="card-body p-0 table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <thead class="custom-thead">
                                    <tr>
                                        <th>SI</th>
                                        <th>Message ID</th>
                                        <th>Subject</th>
                                        <th>Content</th>
                                        <th>Phone</th>
                                        <th>Delivery</th>
                                        <th>Status</th>
                                        <th>Date / Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($values as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->message_id }}</td>
                                        <td>{{ $value->subject }}</td>
                                        <td>{{ $value->content }}</td>
                                        <td>{{ $value->phone }}</td>
                                        <td>
                                            @if(in_array($value->delivary, ['DELIVRD', 'SENT']))
                                                <span class="badge badge-success">Delivered</span>
                                            @elseif($value->delivary === 'ACCEPTD')
                                                <span class="badge badge-warning">Pending</span>
                                            @else
                                                <span class="badge badge-secondary">{{ $value->delivary }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            @switch($value->status)
                                                @case(0)
                                                    <span class="badge badge-info">Request Successful (Accepted)</span>
                                                    @break
                                                @case(1)
                                                    <span class="badge badge-danger">Request Failed (Rejected)</span>
                                                    @break
                                                @case(101)
                                                    <span class="badge badge-danger">Internal Server Error (Rejected)</span>
                                                    @break
                                                @case(114)
                                                    <span class="badge badge-danger">Content Not Provided (Rejected)</span>
                                                    @break
                                                @case(108)
                                                    <span class="badge badge-danger">Wrong Password / Not Provided (Rejected)</span>
                                                    @break
                                                @case(109)
                                                    <span class="badge badge-danger">User Not Provided / Deleted (Rejected)</span>
                                                    @break
                                                @default
                                                    <span class="badge badge-danger">Rejected</span>
                                            @endswitch
                                        </td>
                                        <td>
                                            {{ $value->created_at->format('d-m-Y / H:i:s') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No SMS logs found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer clearfix">
                            {{ $values->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
