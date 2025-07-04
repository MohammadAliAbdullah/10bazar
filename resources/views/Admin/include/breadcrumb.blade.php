<div class="container-fluid">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrapper row">
        <div class="col-12 col-lg-3 col-md-6">
            <h4 class="page-title">{{ $page }}</h4>
        </div>
        <div class="col-12 col-lg-9 col-md-6">
            <ol class="breadcrumb float-right">
                @if (isset($multipleBtn) && $multipleBtn != '')
                    @foreach ($multipleBtn as $btn)
                        <li><a href="{{ $btn['route'] }}" class="btn {{ $btn['class'] }} text-white">
                                <i class="{{ $btn['icon'] }}"></i> &nbsp {{ $btn['name'] }} </a></li>
                    @endforeach
                @else
                    @if (!empty($page) && $route != '#')
                        <li><a href="{{ $route }}" class="btn btn-success text-white"><i
                                    class="{{ isset($button_icon) ? $button_icon : '' }}"></i> &nbsp {{ isset($button) ? $button : '' }} </a></li>
                    @elseif (!empty($parent) && $route == '#')
                        <li><a href="javascript:void(0)">{{ $parent }}</a></li>
                        <li class="active">/ {{ $page }}</li>
                    @elseif ($route == '#')
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li class="active">/ {{ $child ?? $page }}</li>
                    @else
                        <li class="active">/ {{ $page ?? 'Page' }}</li>
                    @endif
                @endif

            </ol>
        </div>
    </div>
    <!-- Breadcrumb End -->
</div>
