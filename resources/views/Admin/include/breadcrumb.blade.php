{{-- <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{ $page ?? '' }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @if (!empty($page) && !empty($route))
                        <li class="breadcrumb-item">
                            <a class="btn btn-info" href="{{ $route }}">{{ $page }}</a>
                        </li>
                    @elseif (!empty($parent) && empty($route))
                        <li class="breadcrumb-item">{{ $page }}</li>
                    @elseif (empty($route))
                        <li class="breadcrumb-item active">{{ $child }}</li>
                    @endif
                </ol>
            </div>
        </div>
    </div>
</div> --}}

<div class="container-fluid">
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrapper row">
        <div class="col-12 col-lg-3 col-md-6">
            <h4 class="page-title">{{ $page ?? 'Dashboard' }}</h4>
        </div>
        <div class="col-12 col-lg-9 col-md-6">
            <ol class="breadcrumb float-right">
                @if (!empty($page) && !empty($route))
                    <li><a href="{{ $route }}" class="btn btn-success text-white"><i class="{{ $button_icon }}"></i> &nbsp {{ $button }} </a></li>
                @elseif (!empty($parent) && empty($route))
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">{{ $parent }}</a></li>
                    <li class="active">/ {{ $page }}</li>
                @elseif (empty($route))
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li class="active">/ {{ $child ?? $page }}</li>
                @else
                    <li class="active">/ {{ $page ?? 'Page' }}</li>
                @endif
            </ol>
        </div>
    </div>
    <!-- Breadcrumb End -->
</div>
