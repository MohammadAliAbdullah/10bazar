<style>
    .submenu_active {
        /* background-color: white !important; */
        /* color: white !important; */
    }
    .submenu_active a {
        color: white !important;
    }
</style>

<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu">

            <li class="side-nav-header">
                <span>Navigation</span>
            </li>

            <li class="nav-item dropdown {{ request()->is('myadminpanel/dashboard') ? 'open' : '' }}">
                <a href="{{ url('myadminpanel/dashboard') }}" class="dropdown-toggle">
                    <span class="icon-holder">
                        <i class="lni-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
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
                    $subMenus = \App\Models\Menu::where('parent_id', $menu->id)->where('status', 'Active')->get();
                    $activeChild = $subMenus->contains(fn($sm) => request()->routeIs($sm->url));
                @endphp

                <li class="nav-item dropdown {{ $activeChild ? 'open' : '' }}">
                    <a href="#" class="dropdown-toggle">
                        <span class="icon-holder">
                            <i class="{{ $menu->icon }}"></i>
                        </span>
                        <span class="title">{{ $menu->name }}</span>
                        <span class="arrow"><i class="lni-chevron-right"></i></span>
                    </a>

                    <ul class="dropdown-menu sub-down" style="{{ $activeChild ? 'display:block;' : '' }}">
                        @foreach ($subMenus as $sub)
                            <li class="{{ request()->routeIs($sub->url) ? 'submenu_active' : '' }}">
                                <a href="{{ $sub->url === '#' ? '#' : route($sub->url) }}">
                                    <i class="{{ $sub->icon }}"></i> {{ $sub->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</div>
