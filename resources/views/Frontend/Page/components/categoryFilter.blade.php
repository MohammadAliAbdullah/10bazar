<div class="shop-layout__sidebar">
    <div class="block block-sidebar">
        {{-- ============================ --}}
        <div class="block-sidebar__item">
            <div class="widget-filters widget" data-collapse data-collapse-opened-class="filter--opened">
                <h4 class="widget__title">Filters</h4>
                <div class="widget-filters__list">
                    @if (count($brands) > 0)
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    {{ __(key: 'Brand') }}
                                    <svg class="filter__arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                        </use>
                                    </svg>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-list">
                                            <div class="filter-list__list">
                                                @foreach ($brands as $brand)
                                                    <label class="filter-list__item">
                                                        <span class="filter-list__input input-check"><span
                                                                class="input-check__body">
                                                                <input class="input-check__input sort_rang brand" type="checkbox"
                                                                    id="brand" name="brand[]"
                                                                    value="{{ $brand->brand->id }}">
                                                                <span class="input-check__box"></span> <svg
                                                                    class="input-check__icon" width="9px"
                                                                    height="7px">
                                                                    <use xlink:href="images/sprite.svg#check-9x7">
                                                                    </use>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <span class="filter-list__title">
                                                            {{ $brand->brand->title ?? 'N/A' }}
                                                        </span>
                                                        <span class="filter-list__counter"></span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (count($subcats) > 0)
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger> {{ __('Sub Category') }} <svg
                                        class="filter__arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                        </use>
                                    </svg>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-list">
                                            <div class="filter-list__list">
                                                @foreach ($subcats as $categorie)
                                                    <label class="filter-list__item">
                                                        <span class="filter-list__input input-check"><span
                                                                class="input-check__body">
                                                                <input type="checkbox" class="input-check__input sort_rang subCategory"
                                                                    id="subCategory" name="category[]"
                                                                    value="{{ $categorie->subcategory->id }}">
                                                                <span class="input-check__box"></span> <svg
                                                                    class="input-check__icon" width="9px"
                                                                    height="7px">
                                                                    <use xlink:href="images/sprite.svg#check-9x7">
                                                                    </use>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <span class="filter-list__title">
                                                            {{ $categorie->subcategory->title ?? 'N/A' }}
                                                        </span>
                                                        <span class="filter-list__counter"></span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (count($colorss) > 0)
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>Color <svg
                                        class="filter__arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                        </use>
                                    </svg>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-list">
                                            <div class="filter-list__list">
                                                @php
                                                    $arra = [];
                                                    foreach ($colorss as $tag) {
                                                        $arra[] = $tag->color;
                                                    }
                                                    $aer = implode(',', $arra ?? '');
                                                    $colorr = explode(
                                                        ',',
                                                        implode(',', array_unique(explode(',', $aer))),
                                                    );
                                                @endphp
                                                @foreach ($colorr as $color)
                                                    @php
                                                        $colorrr = \App\Models\Atribute::where('id', $color)->first();
                                                    @endphp
                                                    @if ($colorrr != null)
                                                        <li style="float: left;">
                                                            <label>
                                                                <input type="checkbox" class="sort_rang color"
                                                                    id="color" name="color[]"
                                                                    value="{{ $colorrr->id }}" style="display: none;">
                                                                <span
                                                                    style="color:{{ $colorrr->value }}; background-color:{{ $colorrr->value }}; box-shadow: 1px 1px 5px black; border-radius: 100%;">⬤
                                                                </span>
                                                            </label>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (count($sizess) > 0)
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>{{ __('Size') }} <svg
                                        class="filter__arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                        </use>
                                    </svg>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-list">
                                            <div class="filter-list__list">
                                                @php
                                                    $arra1 = [];
                                                    foreach ($sizess as $size) {
                                                        $arra1[] = $size->size;
                                                    }
                                                    $aer1 = implode(',', $arra1 ?? '');
                                                    $sizer = explode(
                                                        ',',
                                                        implode(',', array_unique(explode(',', $aer1))),
                                                    );
                                                @endphp
                                                @foreach ($sizer as $sizerr)
                                                    @php
                                                        $sizerrr = \App\Models\Atribute::where('id', $sizerr)->first();
                                                    @endphp
                                                    @if ($sizerrr != null)
                                                        <label class="filter-list__item">
                                                            <span class="filter-list__input input-check"><span
                                                                    class="input-check__body">
                                                                    <input type="checkbox" class="input-check__input size"
                                                                        id="size" name="size[]"
                                                                        value="{{ $sizerrr->id }}">
                                                                    <span class="input-check__box"></span> <svg
                                                                        class="input-check__icon" width="9px"
                                                                        height="7px">
                                                                        <use xlink:href="images/sprite.svg#check-9x7">
                                                                        </use>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="filter-list__title">
                                                                {{ $sizerrr->name ?? 'N/A' }}
                                                            </span>
                                                            <span class="filter-list__counter"></span>
                                                        </label>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="widget-filters__actions d-flex"><button class="btn btn-primary btn-sm">Filter</button>
                    <button class="btn btn-secondary btn-sm ml-2">Reset</button>
                </div>
            </div>
        </div>
    </div>
</div>
