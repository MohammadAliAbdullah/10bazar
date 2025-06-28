    <style>
        .submenu_active {
            background-color: rgba(0, 0, 0, 0.881) !important;
            color: white !important;
        }
    </style>
    {{-- Sidebar --}}
    <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: navy;">
        <a href="{{ url('/myadminpanel/dashboard') }}" class="brand-link d-flex align-items-center">
            <img src="{{ asset('public/assets/10_bazar_logo.jpg') }}" class="brand-image img-circle elevation-3"
                style="width: 40px; height: 40px;">
            <span class="brand-text font-weight-light ml-2">10 Bazar</span>
        </a>

        <div class="sidebar">
            @if (Auth::guard('madmin')->check())
                <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
                    <div class="info">
                        <a href="#" class="d-block text-white">{{ Auth::guard('madmin')->user()->name }}</a>
                    </div>
                </div>
            @endif

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ url('myadminpanel/dashboard') }}"
                            class="nav-link {{ request()->is('myadminpanel/dashboard') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    @php
                        $user = Auth::guard('madmin')->user();
                        $roleId = $user->role_id;
                        $mainMenus = \App\Models\Menu::where('parent_id', 0)
                            ->when($roleId != 1, fn($q) => $q->where('id', '!=', 1))
                            ->orderBy('orders')
                            ->get();
                    @endphp

                    @foreach ($mainMenus as $menu)
                        @php
                            $subMenus = \App\Models\Menu::where('parent_id', $menu->id)
                                ->where('status', 'Active')
                                ->get();
                            $activeChild = $subMenus->contains(fn($sm) => request()->routeIs($sm->url));
                        @endphp

                        <li class="nav-item has-treeview text-dark {{ $activeChild ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ $activeChild ? 'active' : '' }}">
                                <i class="nav-icon {{ $menu->icon }}"></i>
                                <p>{{ $menu->name }} <i class="right fas fa-angle-left"></i></p>
                            </a>
                            <ul class="nav nav-treeview" style="{{ $activeChild ? 'display:block;' : '' }}">
                                @foreach ($subMenus as $sub)
                                    <li class="nav-item">
                                        <a href="{{ $sub->url === '#' ? '#' : route($sub->url) }}"
                                            class="nav-link {{ request()->routeIs($sub->url) ? 'submenu_active' : '' }}">
                                            <i class="{{ $sub->icon }} nav-icon"></i>
                                            <p>{{ $sub->name }}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </aside>

    <script>
        // Active state for current route
        $(function() {
            const url = window.location.href;
            $('.nav-sidebar a').each(function() {
                if (this.href === url) {
                    $(this).addClass('active');
                    $(this).closest('.has-treeview').addClass('menu-open');
                    $(this).closest('.nav-treeview').css('display', 'block');
                }
            });
        });
    </script>
