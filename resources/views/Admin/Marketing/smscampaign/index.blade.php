@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('SMS Campaign'),
        'parent' => __('Home'),
        'child' => __('SMS Campaign List'),
        'button' => __('Add Campaign'),
        'button_icon' => 'lni-plus',
        'route' => route('madmin.smscampaign.create'),
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-info">
                        @include('Admin.include.message')

                        <div class="card-header p-2">
                            <h3 class="mb-0"><strong>Your SMS Balance:</strong> {{ $blance }} Tk</h3>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-bordered table-striped mb-0">
                                <thead class="custom-thead">
                                    <tr>
                                        <th>SI</th>
                                        <th>Subject</th>
                                        <th>Content</th>
                                        <th>Job</th>
                                        <th>Status</th>
                                        <th>Send</th>
                                        <th style="width: 140px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($values as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->subject }}</td>
                                            <td>{{ Str::limit($value->content, 50) }}</td>
                                            <td>
                                                @if($value->send_status == 'Send')
                                                    <span class="badge badge-success">{{ $value->send_status }}</span>
                                                @else
                                                    <span class="badge badge-danger">{{ $value->send_status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($value->status == 'Instant')
                                                    <span class="badge badge-info">{{ $value->status }}</span>
                                                @else
                                                    <span class="badge badge-danger">{{ $value->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ url('/myadminpanel/smssends/'.$value->id) }}" class="btn btn-success btn-sm">
                                                    <i class="lni-send"></i>
                                                    Send</a>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('madmin.smscampaign.edit', $value->id) }}" class="btn btn-success btn-sm mr-1" title="Edit">
                                                        <i class="lni-pencil-alt"></i>
                                                    </a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.smscampaign.destroy', $value->id]]) !!}
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to Delete?')" title="Delete">
                                                            <i class="lni-trash"></i>
                                                        </button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                {{ $values->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
