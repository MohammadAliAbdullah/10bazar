@extends('Admin.layoutApp.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Paid Sale
                        {{--                        <a href="{{ route('madmin.local-sale.create') }}" class="btn btn-primary">All Sale Add</a> --}}
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Sale</a></li>
                        <li class="breadcrumb-item active">Paid Sale</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        {{--                        <div class="card-header"> --}}
                        {{--                            <h3 class="card-title">Condensed Full Width Table</h3> --}}
                        {{--                        </div> --}}
                        <!-- /.card-header -->

                        @include('Admin.include.message')
                        <div class="card-body p-0">
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                    <tr>
                                        <th>SI</th>
                                        <th>Invoice</th>
                                        <th width="20%">Customer</th>
                                        <th>Sub Total</th>
                                        <th>Delivery Fee</th>
                                        <th>Total Amount</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th class="10%">Action</th>
                                    </tr>
                                    @foreach ($orders as $key => $value)
                                        <tr>
                                            <td>{{ $page ? ($page - 1) * 10 + $key + 1 : $key + 1 }}</td>
                                            <td>{{ $value->invoice_no }}</td>
                                            <td>
                                                {{ $value->customer->name ?? 'N/A' }} [{{ $value->customer->phone ?? 'N/A' }}]
                                            </td>
                                            <td>
                                                {{ $value->subtotal }}
                                            </td>
                                            <td>
                                               @if ($value->delivary_charge > 0)
                                                    {{ $value->delivary_charge }}
                                                @endif
                                            </td>
                                            <td>
                                                {{ $value->total }}
                                            </td>
                                            <td>
                                                {{ $value->created_at->diffForHumans() }}
                                            </td>
                                             <td>
                                                @php
                                                    $badgeClass = match ($value->status) {
                                                        'Pending'    => 'danger',
                                                        'Processing' => 'warning',
                                                        'Shipped'    => 'info',
                                                        'default'    => 'success',
                                                    };
                                                @endphp
                                                <span class="badge bg-{{ $badgeClass }} mt-1">{{ $value->status }}</span>
                                            </td>

                                            <td>
                                                <div class="row">
                                                    {{--                                                    <a href="{{route('madmin.local-sale.edit',$value->id)}}" class="btn btn-success m-1"><i class="lni-pencil-alt"></i> </a> --}}
                                                    <a href="{{ route('madmin.orderadmin.show', $value->id) }}"
                                                        class="btn btn-info m-1"><i class="lni-eye"></i> </a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.local-sale.destroy', $value->id]]) !!}
                                                    <button type="submit" value="Delete" class="btn btn-danger m-1"
                                                        onclick="return confirm('Do you want to Delete')"><i
                                                            class="lni-trash"></i></button>
                                                    {!! Form::close() !!}

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="row">
                        <div class="col-md-6 offset-md-2 m-0 float-right">
                            {{ $orders->render() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
