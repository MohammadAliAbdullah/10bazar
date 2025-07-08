<div class="products-view__options">
    <div class="view-options d-flex flex-wrap align-items-center justify-content-between">

        <!-- Layout Switcher -->
        <div class="layout-switcher d-flex align-items-center mb-2 me-3">
            <div class="layout-switcher__list d-flex align-items-center">
                <!-- Grid Button -->
                <a data-layout="grid-3-sidebar" data-with-features="true" title="{{ __('Grid With Features') }}"
                    type="button" class="layout-switcher__button me-2"
                    href="{{ request()->fullUrlWithQuery(['style' => 'grid']) }}">
                    <i class="fas fa-th-large"></i>
                </a>

                <!-- List Button -->
                <a data-layout="list" data-with-features="false" title="{{ __('List') }}" type="button"
                    class="layout-switcher__button me-2" href="{{ request()->fullUrlWithQuery(['style' => 'list']) }}">
                    <i class="fas fa-list"></i>
                </a>

                <!-- Mobile Filter Button -->
                <a title="{{ __('Filter') }}" type="button" class="layout-switcher__button d-block d-md-none"
                    data-toggle="modal" data-target="#filterModal">
                    <i class="fa fa-filter"></i>
                </a>
            </div>
        </div>

        <!-- Sort + Show Count Controls -->
        <div class="view-options__control d-flex align-items-center mb-2 me-3">
            <!-- Sort Label + Select -->
            <label for="sortSelect" class="me-2 mb-0 d-block">
                <i class="fas fa-sort-alpha-up"></i>
            </label>
            <select class="form-control form-control-sm w-auto me-3" id="sortSelect"
                onchange="window.location.href=this.value;">
                <option value="">{{ __('Default') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['order' => 'name_asc']) }}"
                    {{ request()->get('order') == 'name_asc' ? 'selected' : '' }}>
                    {{ __('Name (A-Z)') }}
                </option>
                <option value="{{ request()->fullUrlWithQuery(['order' => 'name_dsc']) }}"
                    {{ request()->get('order') == 'name_dsc' ? 'selected' : '' }}>
                    {{ __('Name (Z-A)') }}
                </option>
            </select>

            <!-- Show Count Label + Select -->
            <label for="showCount" class="me-2 mb-0 d-block ml-2">
                <i class="fas fa-list-ol me-1"></i>
            </label>
            <select class="form-control form-control-sm w-auto" id="showCount"
                onchange="window.location.href=this.value;">
                <option value="{{ request()->fullUrlWithQuery(['limit' => '20']) }}"
                    {{ request()->get('limit') == '20' ? 'selected' : '' }}>
                    {{ __('20') }}
                </option>
                <option value="{{ request()->fullUrlWithQuery(['limit' => '30']) }}"
                    {{ request()->get('limit') == '30' ? 'selected' : '' }}>
                    {{ __('30') }}
                </option>
                <option value="{{ request()->fullUrlWithQuery(['limit' => '40']) }}"
                    {{ request()->get('limit') == '40' ? 'selected' : '' }}>
                    {{ __('40') }}
                </option>
                <option value="{{ request()->fullUrlWithQuery(['limit' => '50']) }}"
                    {{ request()->get('limit') == '50' ? 'selected' : '' }}>
                    {{ __('50') }}
                </option>
            </select>
        </div>

    </div>
</div>
