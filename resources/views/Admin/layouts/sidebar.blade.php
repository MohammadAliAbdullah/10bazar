<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: navy">
    <!-- Brand Logo -->
    <a href="{{ url('/myadminpanel/dashboard') }}" class="brand-link">
        <img src="{{ asset('public') }}/coot_assets/10_bazar_logo.jpg" width="60" height="50">
        <span class="brand-text font-weight-light">10 Bazar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @if (Auth::guard('madmin')->check())
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::guard('madmin')->user()->name }}</a>
                </div>
            </div>
        @endif

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('myadminpanel/dashboard') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <!-- Dynamic Menus -->
                @php
                    $loggedInUser = Auth::guard('madmin')->user();
                    $roleId = $loggedInUser->role_id;
                    $query = \App\Models\Menu::where('parent_id', 0);
                    if ($roleId != 1) {
                        $query->where('id', '!=', 1);
                    }
                    $admenus = $query->orderBy('orders', 'ASC')->get();
                @endphp

                @foreach ($admenus as $admenu)
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon {{ $admenu->icon }}"></i>
                            <p>
                                {{ $admenu->name }}
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>

                        @php
                            $admes = \App\Models\Menu::where('parent_id', $admenu->id)
                                ->where('status', 'Active')
                                ->get();
                        @endphp

                        <ul class="nav nav-treeview">
                            @foreach ($admes as $subadm)
                                <li class="nav-item">
                                    <a href="{{ $subadm->url === '#' ? $subadm->url : route($subadm->url) }}" class="nav-link">
                                        <i class="{{ $subadm->icon }} nav-icon"></i>
                                        <p>{{ $subadm->name }}</p>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach

                <!-- Static Menu Items -->
                <li class="nav-item">
                    <a href="{{ route('madmin.tutorial.index') }}" class="nav-link" target="_blank">
                        <i class="nav-icon fa fa-bug"></i>
                        <p>Bug & Update <span class="right badge badge-danger">New</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('madmin.tutorial.index') }}" class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Tutorial <span class="right badge badge-danger">New</span></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('madmin.store.index') }}" class="nav-link" target="_blank">
                        <i class="nav-icon fas fa-code"></i>
                        <p>Store(Beta) <span class="right badge badge-danger">New</span></p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
