@php
    //$subcats=\App\Models\Category::where('parent_id',$category->id)->get();
    $subcats = \App\Models\Product::groupBy('sub_category_id')
        ->select('sub_category_id')
        ->where('category_id', $category->id)
        ->where('sub_category_id', '!=', 0)
        ->get();
    if (empty($brand)) {
        $brands = \App\Models\Product::groupBy('brand_id')
            ->select('brand_id')
            ->where('category_id', $category->id)
            ->where('brand_id', '!=', 0)
            ->get();
    } else {
        $brands = \App\Models\Product::groupBy('brand_id')
            ->select('brand_id')
            ->where('category_id', $category->id)
            ->where('brand_id', '=', $brand->id)
            ->get();
    }
    $colorss = \App\Models\Product::select('color')
        ->where('category_id', $category->id)
        ->where('color', '!=', null)
        ->get();
    $sizess = \App\Models\Product::select('size')
        ->where('category_id', $category->id)
        ->where('size', '!=', null)
        ->get();
    $bladess = \App\Models\Product::select('blade')
        ->where('category_id', $category->id)
        ->where('blade', '!=', null)
        ->get();
    //dd($brands);
@endphp
<div class="shop-layout__sidebar">
    <div class="block block-sidebar">
        <div class="block-sidebar__item">
            <div class="widget-filters widget" data-collapse data-collapse-opened-class="filter--opened">
                <h4 class="widget__title">{{ __('Filters') }}</h4>
                <div class="widget-filters__list">
                    {{-- Brand Filter --}}
                    @if (count($brands) > 0)
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
                                                @foreach ($brands as $brand)
                                                    <label class="filter-list__item">
                                                        <span class="filter-list__input input-check">
                                                            <span class="input-check__body">
                                                                <input class="input-check__input sort_rang brand"
                                                                    type="checkbox" name="brand[]"
                                                                    value="{{ $brand->brand->id }}"
                                                                    {{ count($brands) == 1 ? 'checked' : '' }}>
                                                                <span class="input-check__box"></span>
                                                                <svg class="input-check__icon" width="9px"
                                                                    height="7px">
                                                                    <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <span
                                                            class="filter-list__title">{{ $brand->brand->title ?? 'N/A' }}</span>
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
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    {{ __('Type') }}
                                    <svg class="filter__arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-list__list">
                                            @foreach ($subcats as $categorie)
                                                <label class="filter-list__item">
                                                    <span class="filter-list__input input-check">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input sort_rang subCategory"
                                                                type="checkbox" name="subCategory[]"
                                                                value="{{ $categorie->subcategory->id }}">
                                                            <span class="input-check__box"></span>
                                                            <svg class="input-check__icon" width="9px"
                                                                height="7px">
                                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="filter-list__title">{{ $categorie->subcategory->title ?? 'N/A' }}</span>
                                                </label>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif


                    @if (count($colorss) > 0)
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    {{ __('Color') }}
                                    <svg class="filter__arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-list__list d-flex flex-wrap">
                                            @php
                                                $arra = [];
                                                foreach ($colorss as $tag) {
                                                    $arra[] = $tag->color;
                                                }
                                                $aer = implode(',', $arra ?? '');
                                                $colorr = explode(',', implode(',', array_unique(explode(',', $aer))));
                                            @endphp
                                            @foreach ($colorr as $color)
                                                @php
                                                    $colorrr = \App\Models\Atribute::find($color);
                                                @endphp
                                                @if ($colorrr)
                                                    <label class="filter-list__item me-2 mb-2">
                                                        <input type="checkbox" class="sort_rang color d-none"
                                                            name="color[]" value="{{ $colorrr->id }}">
                                                        <span class="badge rounded-circle"
                                                            style="width: 25px; height: 25px; background: {{ $colorrr->value }};
                                           box-shadow: 1px 1px 5px black;"></span>
                                                    </label>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (count($sizess) > 0)
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    {{ __('Size') }}
                                    <svg class="filter__arrow" width="12px" height="7px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                    </svg>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
                                        <div class="filter-list__list">
                                            @php
                                                $arra1 = [];
                                                foreach ($sizess as $size) {
                                                    $arra1[] = $size->size;
                                                }
                                                $aer1 = implode(',', $arra1 ?? '');
                                                $sizer = explode(',', implode(',', array_unique(explode(',', $aer1))));
                                            @endphp
                                            @foreach ($sizer as $sizerr)
                                                @php
                                                    $sizerrr = \App\Models\Atribute::find($sizerr);
                                                @endphp
                                                @if ($sizerrr)
                                                    <label class="filter-list__item">
                                                        <span class="filter-list__input input-check">
                                                            <span class="input-check__body">
                                                                <input class="input-check__input sort_rang size"
                                                                    type="checkbox" name="size[]"
                                                                    value="{{ $sizerrr->id }}">
                                                                <span class="input-check__box"></span>
                                                                <svg class="input-check__icon" width="9px"
                                                                    height="7px">
                                                                    <use xlink:href="images/sprite.svg#check-9x7">
                                                                    </use>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <span
                                                            class="filter-list__title">{{ $sizerrr->name ?? 'N/A' }}</span>
                                                    </label>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="widget-filters__item">
                        <div class="filter filter--opened" data-collapse-item>
                            <button type="button" class="filter__title" data-collapse-trigger>
                                {{ __('Price') }}
                                <svg class="filter__arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                            <div class="filter__body" data-collapse-content>
                                <div class="filter__container">
                                    <div class="filter-list__list">
                                        @php
                                            $price_ranges = [
                                                '0-5000' => 'TK. 5000',
                                                '5001-10000' => 'TK 5001 - TK10000',
                                                '10001-20000' => 'TK 10001 - TK 20000',
                                                '20001-50000' => 'TK 20001 - TK 50000',
                                                '50001-100000' => 'TK 50001 - TK 100000',
                                                '100000-100000' => 'Up TK 100001',
                                            ];
                                        @endphp
                                        @foreach ($price_ranges as $range => $label)
                                            <label class="filter-list__item">
                                                <span class="filter-list__input input-check">
                                                    <span class="input-check__body">
                                                        <input class="input-check__input sort_rang price"
                                                            type="radio" name="price[]"
                                                            value="{{ $range }}">
                                                        <span class="input-check__box"></span>
                                                        <svg class="input-check__icon" width="9px" height="7px">
                                                            <use xlink:href="images/sprite.svg#check-9x7"></use>
                                                        </svg>
                                                    </span>
                                                </span>
                                                <span class="filter-list__title">{{ $label }}</span>
                                            </label>
                                        @endforeach
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
