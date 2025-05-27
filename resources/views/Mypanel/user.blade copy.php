@extends('../Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'My Panel', 'subPage' => 'Account Information'])
    <!-- main-section-area-start -->
    <div class="checkout block">
        <div class="container">

            <div class="bg-light">
                <div class="container py-5">
                    <div class="row">
                        <!-- Profile Header -->
                        <div class="col-12 mb-4">
                            <div class="profile-header position-relative mb-4">
                                <div class="position-absolute top-0 end-0 p-3">
                                    <button class="btn btn-light"><i class="fas fa-edit me-2"></i>Edit
                                        Cover</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="position-relative d-inline-block">
                                    <img src="https://randomuser.me/api/portraits/men/40.jpg"
                                        class="rounded-circle profile-pic" alt="Profile Picture">
                                    <button class="btn btn-primary btn-sm position-absolute bottom-0 end-0 rounded-circle">
                                        <i class="fas fa-camera"></i>
                                    </button>
                                </div>
                                <h3 class="mt-3 mb-1">{{ $profile->name }}</h3>
                                <p class="text-muted mb-3">Senior Product Designer</p>
                                <div class="d-flex justify-content-center gap-2 mb-4">
                                    <button class="btn btn-outline-primary"><i
                                            class="fas fa-envelope me-2"></i>Message</button>
                                    <button class="btn btn-primary"><i class="fas fa-user-plus me-2"></i>Connect</button>
                                </div>
                            </div>
                        </div>

                        <!-- Main Content -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-0">
                                    <div class="row g-0">
                                        <!-- Sidebar -->
                                        <div class="col-lg-3 border-end">
                                            <div class="p-4">
                                                <div class="nav flex-column nav-pills">
                                                    <a class="nav-link active" href="{{ route('mypanel.profile.index') }}">
                                                        <i class="fas fa-user me-2"></i> &nbsp;Personal Info
                                                    </a>
                                                    <a class="nav-link" href="{{ route('mypanel.morder.index') }}">
                                                        <i class="fas fa-lock me-2"></i> &nbsp; Orders</a>
                                                    <a class="nav-link" href="{{ route('mypanel.password.index') }}"><i
                                                            class="fas fa-cog me-2"></i> &nbsp; Settings</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Content Area -->
                                        <div class="col-lg-9">
                                            <div class="p-4">
                                                <!-- Personal Information -->
                                                {!! Form::model($profile, [
                                                    'method' => 'PATCH',
                                                    'route' => ['mypanel.profile.update', $profile->id],
                                                    'class' => 'form-horizontal',
                                                ]) !!}
                                                <div class="mb-4">
                                                    <h5 class="mb-4">Personal Information</h5>
                                                    <div class="row g-3">
                                                        <div class="col-md-6">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                value="{{ $profile->name }}" readonly>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" name="email" class="form-control"
                                                                value="{{ $profile->email }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">Phone</label>
                                                            <input type="tel" name="phone" class="form-control"
                                                                value="{{ $profile->phone }}" readonly>
                                                        </div>
                                                        <div class="col-12">
                                                            <label class="form-label">Address</label>
                                                            <textarea class="form-control" name="address" rows="4">{{ $profile->address }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Settings Cards -->
                                                <div class="row g-4 mb-4">
                                                    <div class="col-md-6">
                                                        <div class="settings-card card">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="mb-1">Two-Factor Authentication
                                                                        </h6>
                                                                        <p class="text-muted mb-0 small">Add an
                                                                            extra layer
                                                                            of
                                                                            security</p>
                                                                    </div>
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            checked>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="settings-card card">
                                                            <div class="card-body">
                                                                <div
                                                                    class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <h6 class="mb-1">Email Notifications</h6>
                                                                        <p class="text-muted mb-0 small">Receive
                                                                            activity
                                                                            updates
                                                                        </p>
                                                                    </div>
                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            checked>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-start mt-3">
                                                    <div class="save">
                                                        <button type="submit" class="btn btn-success">Update</button>
                                                    </div>
                                                    <div class="save">
                                                        <button onclick="window.history.back()"
                                                            class="btn btn-default float-right">Cancel</button>
                                                    </div>
                                                </div>
                                                {!! Form::close() !!}
                                                <!-- Recent Activity -->
                                                <div>
                                                    <h5 class="mb-4">Recent Activity</h5>
                                                    <div class="activity-item mb-3">
                                                        <h6 class="mb-1">Updated profile picture</h6>
                                                        <p class="text-muted small mb-0">2 hours ago</p>
                                                    </div>
                                                    <div class="activity-item mb-3">
                                                        <h6 class="mb-1">Changed password</h6>
                                                        <p class="text-muted small mb-0">Yesterday</p>
                                                    </div>
                                                    <div class="activity-item">
                                                        <h6 class="mb-1">Updated billing information</h6>
                                                        <p class="text-muted small mb-0">3 days ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <section>
                <div class="main-section-area">
                    <div class="container">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    @include('Mypanel.message')
                                </div>
                            </div>
                        </div>
                        @if ($profile->status == 'Active')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="hello-omor">
                                        <p>Hello ! <b>{{ $profile->name }}</b> Your account not verified, Please verify your
                                            account <a href="">Click to Verify</a> .</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row">

                            <div class="col-md-3">
                                @include('Mypanel.sidebar')
                            </div>
                            <div class="col-md-9">
                                <div class="form-area">
                                    <div class="form-area-head">
                                        <h5>Account Information</h5>
                                    </div>
                                 
                                    <div class="anather">
                                        {!! Form::model($profile, [
                                            'method' => 'PATCH',
                                            'route' => ['mypanel.profile.update', $profile->id],
                                            'class' => 'form-horizontal',
                                        ]) !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 col-form-label']) !!}
                                                    {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'receiver', 'readonly']) !!}
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('name', 'Email', ['class' => 'col-sm-2 col-form-label']) !!}
                                                    {!! Form::email('email', null, ['class' => 'form-control', 'id' => 'receiver']) !!}
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    {!! Form::label('name', 'Phone', ['class' => 'col-sm-2 col-form-label']) !!}
                                                    {!! Form::email('phone', null, ['class' => 'form-control', 'id' => 'receiver', 'readonly']) !!}
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                {!! Form::label('name', 'Address', ['class' => 'col-sm-2 col-form-label']) !!}
                                                {!! Form::textarea('address', null, ['class' => 'form-control', 'id' => 'receiver', 'rows' => 2]) !!}
                                            </div>

                                        </div>

                                   


                                        <div class="d-flex justify-content-start mt-3">
                                            <div class="save">
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </div>
                                            <div class="save">
                                                <button onclick="window.history.back()"
                                                    class="btn btn-default float-right">Cancel</button>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>


            </section> --}}
        </div>
    </div>
@endsection
@section('style')
    <link href="{{ asset('public/asset/css') }}/order.css" rel="stylesheet" type="text/css">
@endsection
