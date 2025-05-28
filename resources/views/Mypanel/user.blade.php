@extends('../Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'My Panel', 'subPage' => 'Account Information'])
    <!-- main-section-area-start -->
    <div class="checkout block">
        <div class="container">
            <div class="bg-light">
                <div class="container py-3">
                    <div class="row">
                        <!-- Profile Header -->
                        <div class="col-12">
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
                                <div class="d-flex justify-content-center gap-2 mb-4">
                                    <button class="btn btn-outline-primary mr-2">
                                        <i class="fas fa-envelope me-2"></i>Message
                                    </button>
                                    <button class="btn btn-primary">
                                        <i class="fas fa-user-plus me-2"></i>Connect
                                    </button>
                                </div>
                            </div>
                        </div>
                        @php
                            $active = '2';
                            // swich case
                            switch (Route::currentRouteName()) {
                                case 'mypanel.profile.index':
                                    $active = '1';
                                    break;
                                case 'mypanel.morder.index':
                                    $active = '2';
                                    break;
                                case 'mypanel.password.index':
                                    $active = '3';
                                    break;
                                default:
                                    $active = '2';
                                    break;
                            }
                        @endphp
                        <!-- Main Content -->
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-0">
                                    @include('Mypanel.message')
                                    <div class="row g-0">
                                        <!-- Sidebar -->
                                        <div class="col-lg-3 border-end">
                                            <div class="p-4">
                                                <div class="nav flex-column nav-pills">
                                                    <a class="nav-link {{ $active == '1' ? 'active' : '' }}"
                                                        href="{{ route('mypanel.profile.index') }}">
                                                        <i class="fas fa-user me-2"></i> &nbsp;Personal Info
                                                    </a>
                                                    <a class="nav-link {{ $active == '2' ? 'active' : '' }}"
                                                        href="{{ route('mypanel.morder.index') }}">
                                                        <i class="fas fa-lock me-2"></i> &nbsp; Orders</a>
                                                    <a class="nav-link {{ $active == '3' ? 'active' : '' }}"
                                                        href="{{ route('mypanel.password.index') }}"><i
                                                            class="fas fa-cog me-2"></i> &nbsp; Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <!-- Content Area -->
                                            @if ($active == '1')
                                                @include('Mypanel/personalInfo')
                                            @endif
                                            @if ($active == '2')
                                                @include('Mypanel/orderInfo')
                                            @endif
                                            @if ($active == '3')
                                                @include('Mypanel/passwordChange')
                                            @endif
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
@endsection
