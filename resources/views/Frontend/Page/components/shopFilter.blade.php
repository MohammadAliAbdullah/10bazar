<div class="shop-layout__sidebar">
    <div class="block block-sidebar">
        <div class="block-sidebar__item">
            <div class="widget-filters widget" data-collapse data-collapse-opened-class="filter--opened">
                <h4 class="widget__title">Filters</h4>
                <div class="widget-filters__list">

                    {{-- Brand Filter --}}
                    <div class="widget-filters__item">
                        <div class="filter filter--opened" data-collapse-item>
                            <button type="button" class="filter__title" data-collapse-trigger>
                                {{ __('Brand') }}
                                <svg class="filter__arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                            <div class="filter__body" data-collapse-content>
                                <div class="filter__container">
                                    <div class="filter-list">
                                        <div class="filter-list__list">
                                            @foreach (brandh() as $brand)
                                                <label class="filter-list__item">
                                                    <span class="filter-list__input input-check">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input sort_rang brand"
                                                                type="checkbox" id="brand" name="brand[]"
                                                                value="{{ $brand->id }}">
                                                            <span class="input-check__box"></span>
                                                            <svg class="input-check__icon" width="9px"
                                                                height="7px">
                                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">{{ $brand->title ?? 'N/A' }}</span>
                                                    <span class="filter-list__counter"></span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Category Filter --}}
                    <div class="widget-filters__item">
                        <div class="filter filter--opened" data-collapse-item>
                            <button type="button" class="filter__title" data-collapse-trigger>
                                Category
                                <svg class="filter__arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                            <div class="filter__body" data-collapse-content>
                                <div class="filter__container">
                                    <div class="filter-list">
                                        <div class="filter-list__list">
                                            @foreach (categoryh() as $categorie)
                                                <label class="filter-list__item">
                                                    <span class="filter-list__input input-check">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input sort_rang category"
                                                                type="checkbox" id="category" name="category[]"
                                                                value="{{ $categorie->id }}">
                                                            <span class="input-check__box"></span>
                                                            <svg class="input-check__icon" width="9px"
                                                                height="7px">
                                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="filter-list__title">{{ $categorie->title ?? 'N/A' }}</span>
                                                    <span class="filter-list__counter"></span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Optional Filter Buttons --}}
                {{-- <div class="widget-filters__actions d-flex">
                    <button type="button" class="btn btn-secondary btn-sm ml-2" id="resetFilters">Reset</button>
                </div> --}}
                {{-- 
                <div class="widget-filters__actions d-flex">
                    <button class="btn btn-primary btn-sm">Filter</button>
                    <button class="btn btn-secondary btn-sm ml-2">Reset</button>
                </div> 
                --}}
            </div>
        </div>
    </div>
</div>
