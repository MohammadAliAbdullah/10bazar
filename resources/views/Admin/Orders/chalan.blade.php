@php
    $data = \App\Models\Order::where('invoice_no', $invoice_no)->first();
    $orders = \App\Models\OrderDetails::where('order_id', $data->id)->get();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Chalan</title>
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
            text-align: center;
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
                        <span style="font-weight: semi-bold"> Chalan Issued:</span>
                        {{ date('d-m-Y', strtotime($data->created_at)) }}
                    </td>
                </tr>
            </table>
            <table id="meta">
                <tr>
                    <td rowspan="4" style="text-align: left; border: none; width: 59%">
                        <strong>Shipping To</strong><br>
                        <br>
                        <span style="font-weight: semi-bold">Name:</span> {{ $data->customer->name }}<br>
                        <span style="font-weight: semi-bold">Phone:<span> {{ $data->customer->phone }}<br>
                                <span style="font-weight: semi-bold">Email:<span> {{ $data->customer->email }}
                    </td>
                    <td rowspan="4" style="text-align: left; border: none; width: 41%; display: none" hidden>
                        <strong></strong><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        {{-- <span style="font-weight: semi-bold">Name:</span> {{ $data->customer->name }}<br>
                        <span style="font-weight: semi-bold">Phone:<span> {{ $data->customer->phone }}<br>
                                <span style="font-weight: semi-bold">Email:<span> {{ $data->customer->email }} --}}
                    </td>
                </tr>
            </table>
        </div>
        <table id="items">
            <thead>
                <tr>
                    <th width="65%">Product</th>
                    <th align="right">Qty</th>
                </tr>
            </thead>
            @foreach ($orders as $order)
                <tr class="item-row">
                    <td class="description">
                        {{ $order->name }}
                    </td>
                    <td align="right">
                        {{ $order->qty }}
                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <br>
        <br>
        <table>
            <tr>
                <td style="border: none; text-align: left">
                    {{-- ________________________<br>
                    <strong>Customer Signature</strong> --}}
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
