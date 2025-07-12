@php
    $data = \App\Models\Order::where('invoice_no', $invoice_no)->first();
    $orders = \App\Models\OrderDetails::where('order_id', $data->id)->get();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Invoice</title>
    <style>
        body {
            font: 14px/1.4 Helvetica, Arial, sans-serif;
            background-size: cover;
            margin: 0;
            padding: 0 0 100px 0;
        }

        #page-wrap {
            width: 800px;
            margin: 0 auto;
            position: relative;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table td,
        table th {
            border: 1px solid black;
            padding: 5px;
        }

        #header {
            background: #222;
            color: white;
            text-align: center;
            font-weight: bold;
            padding: 10px;
        }

        .company-left {
            float: left;
            width: 50%;
        }

        .company-left img {
            height: 18px;
            width: 100px;
            text-align: left
        }

        .company-right {
            float: right;
            width: 45%;
            text-align: left;
            padding-left: 30px;
            border-left: 1px solid black;
            /* padding-left: 02px; */
        }

        .clear {
            clear: both;
        }

        #meta td.meta-head {
            /* background: #f8e4e4;
            font-weight: bold;
            text-align: right; */
            /* background: #f8e4e4; */
            border: none;
            font-weight: bold;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }

        .table th,
        .table td {
            border: 1px solid #e9ecef;
            padding: 12px;
            text-align: left;
        }

        .table th {
            background-color: #3498db;
            color: #fff;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }


        #items {
            margin-top: 15px;
        }

        #items th {
            background: #5ce1e6;
            border: 1px solid #e9ecef;
        }

        #items td {
            /* text-align: right; */
            padding: 6px;
            /* border: 1px solid #e9ecef; */
            border: 1px solid #e9ecef;
        }

        /* #items td.total-value {
            text-align: right;
        } */

        #terms {
            margin-top: 30px;
        }

        #terms h4 {
            margin-bottom: 5px;
        }

        .product {
            width: 50%;
        }

        #signatures {
            margin-top: 50px;
            display: flex;
            justify-content: space-between;
        }

        #signatures {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .signature-block {
            display: inline-block;
            text-align: center;
        }

        .signature-customer {
            text-align: left;
        }

        .signature-authorized {
            text-align: right;
        }

        #footer {
            position: fixed;
            bottom: 0;
            width: 800px;
            text-align: center;
            font-size: 13px;
            color: #444;
            padding: 10px 0;
        }

        .total-line {
            text-align: right;
        }

        .total-value {
            text-align: right;
        }

        .balance {
            background: #5ce1e6;
            text-align: right;
            /* no break */
            white-space: nowrap;
        }
    </style>
</head>

<body>
    <div id="page-wrap">
        <table>
            <tr>
                <td style="border: none; width: 59%">
                    <img src="{{ asset($apps->invoice_logo) }}" alt="Company Logo">
                    <h1 style="color: #5ce1e6; margin-top: 10px!important">INVOICE</h1>
                    Invoice Number:# <span style="font-size: 12px; font-weight: semi-bold">
                        {{ $data->invoice_no }}
                    </span>
                </td>
                <td style="border-right: none;border-top: none; border-bottom: none; width: 41%; padding-left: 05px">
                    <h2><span style="color: black; padding-bottom: 5px">{{ $apps->site_title }}</span></h2>
                    <br>
                    <p>
                        <img src="{{ public_path('assets/icons/phone.png') }}" width="14"
                            style="vertical-align: middle;" /> {{ $apps->phone }}<br>
                        <img src="{{ public_path('assets/icons/email.png') }}" width="14"
                            style="vertical-align: middle;" /> {{ $apps->email }}<br>
                        <img src="{{ public_path('assets/icons/map.png') }}" width="14"
                            style="vertical-align: middle;" />
                        {{ $apps->address }} <br>
                        <img src="{{ public_path('assets/icons/web.png') }}" width="14"
                            style="vertical-align: middle;" />
                        {{ $apps->website_link }}
                    </p>
                </td>
            </tr>
        </table>

        <div id="customer">
            <table>
                <tr>
                    <td style="border: none; width: 59%"></td>
                    <td style="border: none; width: 41%">
                        <span style="font-weight: semi-bold"> Date Issued:</span>
                        {{ date('d-m-Y', strtotime($data->created_at)) }}<br>
                        <span style="font-weight: semi-bold"> Due Date:</span>
                        {{ date('d-m-Y', strtotime($data->created_at)) }}
                    </td>
                </tr>
            </table>
            <table id="meta">
                <tr>
                    <td rowspan="4" style="text-align: left; border: none; width: 59%">
                        <strong>Billing To</strong><br>
                        <br>
                        <span style="font-weight: semi-bold">Name:</span> {{ $data->customer->name }}<br>
                        <span style="font-weight: semi-bold">Phone:<span> {{ $data->customer->phone }}<br>
                                <span style="font-weight: semi-bold">Email:<span> {{ $data->customer->email }}
                    </td>
                    <td rowspan="4" style="text-align: left; border: none; width: 41%">
                        <strong>Shipping To</strong><br>
                        <br>
                        @php
                            $ship = json_decode($data->shipping_address, true);
                        @endphp
                        <span style="font-weight: semi-bold">Name:</span> {{ $ship['name'] }}<br>
                        <span style="font-weight: semi-bold">Phone:<span> {{ $ship['phone'] }}<br>
                        <span style="font-weight: semi-bold">Address:<span> {{ $ship['address'] }} <br>
                        <span style="font-weight: semi-bold">State/District:<span> {{ $ship['state_name'] }} <br>
                        <span style="font-weight: semi-bold">City:<span> {{ $ship['city_name'] }}
                    </td>
                </tr>
            </table>
        </div>
        <table id="items">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="60%">Product</th>
                    <th align="right" width="10%">Qty</th>
                    <th align="right" width="20%">Unit Price</th>
                    <th align="right" width="20%">Total</th>
                </tr>
            </thead>
            @foreach ($orders as $key => $order)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td class="product">{{ $order->name }}</td>
                    <td align="right">{{ $order->qty }}</td>
                    <td align="right">{{ $order->price }}</td>
                    <td align="right">{{ number_format($order->total, 2) }}</td>
                </tr>
            @endforeach
            <tr>
                <td class="blank" colspan="2" rowspan="6" style="border: none">
                </td>
                <td colspan="2" class="total-line">Sub Total:</td>
                <td class="total-value">{{ number_format($data->subtotal, 2) }}</td>
            </tr>
            @if ($data->discount > 0)
                <tr>
                    <td colspan="2" class="total-line">Discount:</td>
                    <td class="total-value">{{ $data->discount ?? 0 }}</td>
                </tr>
            @endif
            @if ($data->coupon_discount > 0)
                <tr>
                    <td colspan="2" class="total-line">Coupon Discount:</td>
                    <td class="total-value">{{ $data->coupon_discount ?? 0 }}</td>
                </tr>
            @endif
            @if ($data->vat > 0)
                <tr>
                    <td colspan="2" class="total-line">VAT (0%):</td>
                    <td class="total-value">{{ $data->vat ?? 0 }}</td>
                </tr>
            @endif
            @if ($data->delivary_charge > 0)
                <tr>
                    <td colspan="2" class="total-line">Delivery Charge:</td>
                    <td class="total-value">{{ number_format($data->delivary_charge, 2) ?? 0 }}</td>
                </tr>
            @endif
            <tr>
                <td colspan="2" class="total-line">Grand Total:</td>
                <td class="total-value">{{ number_format($data->total, 2)}}</td>
            </tr>
            <tr>
                <td colspan="2" class="balance"><strong>TOTAL AMOUNT DUE:</strong></td>
                <td class="total-value balance"><strong>{{ number_format($data->total, 2) }}</strong></td>
            </tr>
        </table>
        <div id="terms">
            <h4>Terms & Conditions:</h4>
            <p>
                1. Dear Customer, Please ensure you have received all items mentioned in this invoice.
                If any item is
                missing or
                damaged, immediately return the package to your delivery agent.<br>
                2. Once the package is accepted, we cannot process claims for missing, wrong, or
                defective
                items.<br>
                3. For any assistance, you are entitled to 12 months of service warranty from the date
                of
                purchase.<br>
                4. You can reach us at <strong> {{ $apps->phone }}</strong> or email us at
                <strong>{{ $apps->email }}</strong>.<br>
                5. <strong>No Money Back Policy.</strong><br>
                <span style="font-size: 17px">Thank you for shopping with us. Have a great day!</span>
            </p>
        </div>
        <br>
        <br>
        <table>
            <tr>
                <td style="border: none; text-align: left">
                    ________________________<br>
                    <strong>Customer Signature</strong>
                </td>
                <td style="border: none; text-align: right">
                    ___________________________<br>
                    <strong>Authorized Signature</strong>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>
