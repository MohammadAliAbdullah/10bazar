@extends('Admin.layouts.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Payment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('madmin.paymentmethod.create') }}" class="btn btn-primary btn-sm mr-2">
                            <i class="fa fa-plus"></i> Add
                        </a>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            @include('Admin.include.message')
            <!-- List of Methods -->
            <div class="card">
                <div class="card-body">




                </div>
            </div>
        </div>
    </section>
@endsection