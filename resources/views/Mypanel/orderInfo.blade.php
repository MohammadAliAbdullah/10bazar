<div class="table-responsive">
    <table class="table table-striped table-bordered align-middle text-nowrap">
        <thead class="table-dark">
            <tr>
                <th><span class="nibor">Order</span></th>
                <th><span class="nibor">Date</span></th>
                <th><span class="nibor">Payment</span></th>
                <th><span class="nibor">Status</span></th>
                <th><span class="nibor">Action</span></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $value)
                <tr>
                    <td>#{{ $value->invoice_no }}</td>
                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y') }}</td>
                    <td>{{ $value->payment_status }}</td>
                    <td>
                        @php
                            $statusColors = [
                                'Pending' => 'danger',
                                'Processing' => 'warning',
                                'Shipped' => 'info',
                                'Complete' => 'success'
                            ];
                            $color = $statusColors[$value->status] ?? 'dark';
                        @endphp
                        <span class="badge bg-{{ $color }} p-2">{{ $value->status }}</span>
                    </td>
                    <td>
                        <a href="{{ route('mypanel.morder.show', $value->invoice_no) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-eye"></i> View
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Pagination -->
<div class="mt-3">
    {{ $orders->links() }}
</div>
