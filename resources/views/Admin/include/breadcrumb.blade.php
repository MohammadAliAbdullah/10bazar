<div class="container-fluid">
    <!-- Breadcrumb Start -->
    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
        <div class="page-title mb-2 mb-sm-0">
            <h4 class="mb-0">{{ $page }}</h4>
        </div>

        <div class="breadcrumb-area">
            <ol class="breadcrumb mb-0 bg-transparent">
                @if (isset($multipleBtn) && $multipleBtn != '')
                    @foreach ($multipleBtn as $btn)
                        <li class="breadcrumb-item">
                            <a href="{{ $btn['route'] }}" class="btn {{ $btn['class'] }} btn-sm text-white">
                                <i class="{{ $btn['icon'] }}"></i> {{ $btn['name'] }}
                            </a>
                        </li>
                    @endforeach
                @else
                    @if (!empty($page) && $route != '#')
                        <li class="breadcrumb-item">
                            <a href="{{ $route }}" class="btn btn-success btn-sm text-white">
                                <i class="{{ $button_icon ?? '' }}"></i> {{ $button ?? '' }}
                            </a>
                        </li>
                    @elseif (!empty($parent) && $route == '#')
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{ $parent }}</a></li>
                        <li class="breadcrumb-item active">{{ $page }}</li>
                    @elseif ($route == '#')
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">{{ $child ?? $page }}</li>
                    @else
                        <li class="breadcrumb-item active">{{ $page ?? 'Page' }}</li>
                    @endif
                @endif
            </ol>
        </div>
    </div>
    <!-- Breadcrumb End -->
</div>
