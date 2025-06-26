<div class="page-header">
    <div class="page-header__container container">
        <div class="page-header__breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">{{__('Home')}}</a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </li>
                    <li class="breadcrumb-item"><a href="#">{{ $page ?? '' }}</a>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $subPage ?? '' }}</li>
                    <li class="loader"></li>
                </ol>
            </nav>
        </div>
        {{-- <div class="page-header__title">
                        <h1>Screwdrivers</h1>
                    </div> --}}
    </div>
</div>
