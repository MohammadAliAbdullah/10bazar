<style>
    .layout-switcher__button {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #fff;
        color: #333;
        font-size: 14px;
    }

    .layout-switcher__button i {
        font-size: 16px;
    }
</style>
<div class="products-view__options">
    <div class="view-options d-flex flex-wrap align-items-center justify-content-between">

        <!-- Layout Switcher -->
        <div class="layout-switcher mb-2 me-3">
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

        <!-- Divider (optional, hidden on mobile) -->
        <div class="view-options__divider d-none d-md-block mx-3"></div>

        <!-- Sort By -->
        <div class="view-options__control mb-2 me-3">
            <label for="sortSelect" class="me-2">{{ __('Sort') }}</label>
            <select class="form-control form-control-sm w-auto d-inline-block" id="sortSelect"
                onchange="window.location.href=this.value;">
                <option value="">{{ __('Default') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['order' => 'name_asc']) }}"
                    {{ request()->get('order') == 'name_asc' ? 'selected' : '' }}>{{ __('Name (A-Z)') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['order' => 'name_dsc']) }}"
                    {{ request()->get('order') == 'name_dsc' ? 'selected' : '' }}>{{ __('Name (Z-A)') }}</option>
            </select>
        </div>

        <!-- Show Count -->
        <div class="view-options__control mb-2">
            <label for="showCount" class="me-2">{{ __('Show') }}</label>
            <select class="form-control form-control-sm w-auto d-inline-block" id="showCount"
                onchange="window.location.href=this.value;">
                <option value="{{ request()->fullUrlWithQuery(['limit' => '20']) }}"
                    {{ request()->get('limit') == '20' ? 'selected' : '' }}>{{ __('20') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['limit' => '30']) }}"
                    {{ request()->get('limit') == '30' ? 'selected' : '' }}>{{ __('30') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['limit' => '40']) }}"
                    {{ request()->get('limit') == '40' ? 'selected' : '' }}>{{ __('40') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['limit' => '50']) }}"
                    {{ request()->get('limit') == '50' ? 'selected' : '' }}>{{ __('50') }}</option>
            </select>
        </div>

    </div>
</div>
