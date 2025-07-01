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

        {{-- Sort By --}}
        <div class="view-options__control">
            <select class="form-control form-control-sm" aria-label="{{ __('Sort By') }}">
                <option value="">{{ __('Default') }}</option>
                <option value="name_asc">{{ __('Name (A-Z)') }}</option>
            </select>
        </div>

        {{-- Show Count --}}
        <div class="view-options__control">
            <label for="showCount">{{ __('Show') }}</label>
            <select class="form-control form-control-sm" id="showCount">
                <option value="12">12</option>
                <option value="24">24</option>
            </select>
        </div>
    </div>
</div>
