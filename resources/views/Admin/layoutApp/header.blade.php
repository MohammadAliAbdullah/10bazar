<div class="header navbar">
    <div class="header-container">
        <div class="nav-logo">
            <a href="{{ url('/myadminpanel/dashboard') }}">
                <b><img src="{{ asset('public/assets/10_bazar_logo.jpg') }}" alt="" style="height: 40px;"></b>
                <span class="logo">
                    <strong class="ml-2 text-white">10 Bazar</strong>
                </span>
            </a>
        </div>
        <ul class="nav-left">
            <li>
                <a class="sidenav-fold-toggler" href="javascript:void(0);">
                    <i class="lni-menu"></i>
                </a>
                <a class="sidenav-expand-toggler" href="javascript:void(0);">
                    <i class="lni-menu"></i>
                </a>
            </li>
        </ul>
        <ul class="nav-right">
            <li>
                <a class="nav-link" href="{{ route('home.index') }}" target="_blank" title="Visit Website">
                    <i class="lni-world bg-info text-white"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/clear-cache') }}" title="Cache Clear">
                    <i class="lni-eraser bg-danger text-white"></i>
                </a>
            </li>
            <li class="search-box">
                <input class="form-control" type="text" placeholder="Search...">
                <i class="lni-search"></i>
            </li>
            <li class="massages dropdown dropdown-animated scale-left">
                <span class="counter">3</span>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="lni-envelope"></i>
                </a>
                <ul class="dropdown-menu dropdown-lg">
                    <li>
                        <div class="dropdown-item align-self-center">
                            <h5>Messages</h5>
                        </div>
                    </li>
                    <!-- You can loop messages here -->
                    <li class="list-item"><a href="#" class="media-hover">No new messages</a></li>
                    <li class="check-all text-center"><a href="#" class="text-gray">View All</a></li>
                </ul>
            </li>
            <li class="notifications dropdown dropdown-animated scale-left">
                <span class="counter">2</span>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="lni-alarm"></i>
                </a>
                <ul class="dropdown-menu dropdown-lg">
                    <li>
                        <h5 class="n-title text-center"><i class="lni-alarm"></i> Notifications</h5>
                    </li>
                    <li class="list-item"><a href="#" class="media-hover">No new notifications</a></li>
                    <li class="check-all text-center"><a href="#" class="text-gray">Check all notifications</a>
                    </li>
                </ul>
            </li>
            <li class="user-profile dropdown dropdown-animated scale-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img class="profile-img img-fluid" src="{{ asset('public/assets/img/avatar/avatar.jpg') }}"
                        alt="User Avatar">
                </a>
                <ul class="dropdown-menu dropdown-md">
                    <li>
                        <ul class="list-media">
                            <li class="list-item avatar-info">
                                <div class="media-img">
                                    <img src="{{ asset('public/assets/img/avatar/avatar.jpg') }}" alt="">
                                </div>
                                <div class="info">
                                    <span class="title text-semibold">
                                        {{ Auth::guard('madmin')->user()->name ?? 'Admin' }}
                                    </span>
                                    <span class="sub-title">Admin</span>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="lni-cog"></i> <span>Settings</span></a></li>
                    <li><a href="#"><i class="lni-user"></i> <span>Profile</span></a></li>
                    <li>
                        <a href="#"
                            onclick="event.preventDefault();document.querySelector('#admin-logout-form').submit();">
                            <i class="lni-lock"></i> <span>Logout</span>
                        </a>
                        <form id="admin-logout-form" action="{{ route('madmin.logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
