<div class="content-header">
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
</div>
