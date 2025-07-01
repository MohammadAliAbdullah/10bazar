<div class="products-view__options">
    <div class="view-options">

        {{-- Layout Switcher --}}
        <div class="layout-switcher">
            <div class="layout-switcher__list">
                <!-- Grid with Features -->
                <a data-layout="grid-3-sidebar" data-with-features="true" title="{{ __('Grid With Features') }}"
                    type="button" class="layout-switcher__button"
                    href="{{ request()->fullUrlWithQuery(['style' => 'grid']) }}">
                    <i class="fas fa-th-large"></i>
                </a>

                <a data-layout="list" data-with-features="false" title="{{ __('List') }}" type="button"
                    class="layout-switcher__button" href="{{ request()->fullUrlWithQuery(['style' => 'list']) }}">
                    <i class="fas fa-list"></i>
                </a>
            </div>
        </div>

        <div class="view-options__divider"></div>

       <!-- Sort By -->
        <div class="view-options__control">
            <label for="sortSelect" class="me-2">{{ __('Sort') }}</label>
            <select class="form-control form-control-sm" id="sortSelect">
                <option value="">{{ __('Default') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['order' => 'name_asc']) }}" {{ request()->get('order') == 'name_asc' ? 'selected' : '' }}>{{ __('Name (A-Z)') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['order' => 'name_dsc']) }}" {{ request()->get('order') == 'name_dsc' ? 'selected' : '' }}>{{ __('Name (Z-A)') }}</option>
            </select>
        </div>

        <!-- Show Count -->
        <div class="view-options__control">
            <label for="showCount" class="me-2">{{ __('Show') }}</label>
            <select class="form-control form-control-sm" id="showCount">
                <option value="{{ request()->fullUrlWithQuery(['limit' => '20']) }}" {{ request()->get('limit') == '20' ? 'selected' : '' }}>{{ __('20') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['limit' => '30']) }}" {{ request()->get('limit') == '30' ? 'selected' : '' }}>{{ __('30') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['limit' => '40']) }}" {{ request()->get('limit') == '40' ? 'selected' : '' }}>{{ __('40') }}</option>
                <option value="{{ request()->fullUrlWithQuery(['limit' => '50']) }}" {{ request()->get('limit') == '50' ? 'selected' : '' }}>{{ __('50') }}</option>
            </select>
        </div>
    </div>
</div>
