<table class="table table-striped">
    <tr>
        <th><span class="nibor"><b>Order</b></span></th>
        <th><span class="nibor"><b>Date</b></span></th>
        <th><span class="nibor"><b>Payment</b></span></th>
        <th><span class="nibor"><b>Status</b></span></th>

        <th><span class="nibor"><b>Action</b></span></th>
    </tr>
    @foreach ($orders as $value)
        <tr>
            <td>
                #{{ $value->invoice_no }}
            </td>
            <td>
                {{ date('d/m/Y', strtotime($value->created_at)) }}
            </td>
            <td>
                {{ $value->payment_status }}
            </td>
            <td>
                @if ($value->status == 'Pending')
                    <span class="bg bg-danger p-2 text-white">
                        {{ $value->status }}
                    </span>
                @elseif($value->status == 'Processing')
                    <span class="bg bg-warning p-2 text-white">
                        {{ $value->status }}
                    </span>
                @elseif($value->status == 'Shipped')
                    <span class="bg bg-info p-2 text-white">
                        {{ $value->status }}
                    </span>
                @elseif($value->status == 'Complete')
                    <span class="bg bg-success p-2 text-white">
                        {{ $value->status }}
                    </span>
                @else
                    <span class="bg bg-dark p-2 text-white">
                        {{ $value->status }}
                    </span>
                @endif
            </td>

            <td>
                <a href="{{ route('mypanel.morder.show', $value->invoice_no) }}" class="btn btn-info">
                    <i class="fa fa-eye"></i>
                </a>
            </td>
        </tr>
    @endforeach
</table>
<div class="">
    {{ $orders->render() }}
</div>
