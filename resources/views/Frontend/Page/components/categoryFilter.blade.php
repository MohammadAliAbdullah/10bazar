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
                                                                <input class="input-check__input" type="checkbox"
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
                                                                <input type="checkbox" class="input-check__input"
                                                                    id="category" name="category[]"
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
                                                                    <input type="checkbox" class="input-check__input"
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
                    {{-- <div class="widget-filters__item">
                        <div class="filter filter--opened" data-collapse-item>
                            <button type="button" class="filter__title" data-collapse-trigger>Price <svg
                                    class="filter__arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                    </use>
                                </svg>
                            </button>
                            <div class="filter__body" data-collapse-content>
                                <div class="filter__container">
                                    <div class="filter-list">
                                        <div class="filter-list__list">

                                            <label>
                                                <input type="radio" class="sort_rang price" id="price"
                                                    name="price[]" value="0-5000"> TK. 5000
                                            </label>
                                            =
                                            <label>
                                                <input type="radio" class="sort_rang price" id="price"
                                                    name="price[]" value="5001-10000"> TK 5001 - TK10000
                                            </label>

                                            <label>
                                                <input type="radio" class="sort_rang price" id="price"
                                                    name="price[]" value="10001-20000"> TK 10001 - TK 20000
                                            </label>

                                            <label>
                                                <input type="radio" class="sort_rang price" id="price"
                                                    name="price[]" value="20001-50000"> TK 20001- TK 50000
                                            </label>

                                            <label>
                                                <input type="radio" class="sort_rang price" id="price"
                                                    name="price[]" value="50001-100000"> TK 50001 - TK 100000
                                            </label>

                                            <label>
                                                <input type="radio" class="sort_rang price" id="price"
                                                    name="price[]" value="100000-100000"> Up TK 100001
                                            </label>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-filters__item">
                        <div class="filter filter--opened" data-collapse-item><button type="button"
                                class="filter__title" data-collapse-trigger>Color <svg class="filter__arrow"
                                    width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                    </use>
                                </svg></button>
                            <div class="filter__body" data-collapse-content>
                                <div class="filter__container">
                                    <div class="filter-color">
                                        <div class="filter-color__list"><label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color input-check-color--white"
                                                    style="color: #fff;"><label class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color input-check-color--light"
                                                    style="color: #d9d9d9;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #b3b3b3;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #808080;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #666;"><label class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #4d4d4d;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #262626;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #ff4040;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox"
                                                            checked="checked"> <span
                                                            class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #ff8126;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color input-check-color--light"
                                                    style="color: #ffd440;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color input-check-color--light"
                                                    style="color: #becc1f;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #8fcc14;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox"
                                                            checked="checked"> <span
                                                            class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #47cc5e;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #47cca0;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #47cccc;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #40bfff;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox"
                                                            disabled="disabled">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #3d6dcc;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox"
                                                            checked="checked"> <span
                                                            class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #7766cc;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #b852cc;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                            <label class="filter-color__item"><span
                                                    class="filter-color__check input-check-color"
                                                    style="color: #e53981;"><label
                                                        class="input-check-color__body"><input
                                                            class="input-check-color__input" type="checkbox">
                                                        <span class="input-check-color__box"></span>
                                                        <svg class="input-check-color__icon" width="12px"
                                                            height="9px">
                                                            <use xlink:href="images/sprite.svg#check-12x9">
                                                            </use>
                                                        </svg> <span
                                                            class="input-check-color__stick"></span></label></span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="widget-filters__actions d-flex"><button class="btn btn-primary btn-sm">Filter</button>
                    <button class="btn btn-secondary btn-sm ml-2">Reset</button>
                </div>
            </div>
        </div>

        {{-- ========================== --}}

        {{-- <div class="block-sidebar__item d-none d-lg-block">
            <div class="widget-products widget">
                <h4 class="widget__title">Latest Products</h4>
                <div class="widget-products__list">
                    <div class="widget-products__item">
                        <div class="widget-products__image"><a href="product.html"><img
                                    src="images/products/product-1.jpg" alt=""></a></div>
                        <div class="widget-products__info">
                            <div class="widget-products__name"><a href="product.html">Electric
                                    Planer Brandix KL370090G 300 Watts</a></div>
                            <div class="widget-products__prices">$749.00</div>
                        </div>
                    </div>
                    <div class="widget-products__item">
                        <div class="widget-products__image"><a href="product.html"><img
                                    src="images/products/product-2.jpg" alt=""></a></div>
                        <div class="widget-products__info">
                            <div class="widget-products__name"><a href="product.html">Undefined Tool
                                    IRadix DPS3000SY 2700 Watts</a></div>
                            <div class="widget-products__prices">$1,019.00</div>
                        </div>
                    </div>
                    <div class="widget-products__item">
                        <div class="widget-products__image"><a href="product.html"><img
                                    src="images/products/product-3.jpg" alt=""></a></div>
                        <div class="widget-products__info">
                            <div class="widget-products__name"><a href="product.html">Drill
                                    Screwdriver Brandix ALX7054 200 Watts</a></div>
                            <div class="widget-products__prices">$850.00</div>
                        </div>
                    </div>
                    <div class="widget-products__item">
                        <div class="widget-products__image"><a href="product.html"><img
                                    src="images/products/product-4.jpg" alt=""></a></div>
                        <div class="widget-products__info">
                            <div class="widget-products__name"><a href="product.html">Drill Series 3
                                    Brandix KSR4590PQS 1500 Watts</a></div>
                            <div class="widget-products__prices"><span
                                    class="widget-products__new-price">$949.00</span> <span
                                    class="widget-products__old-price">$1189.00</span></div>
                        </div>
                    </div>
                    <div class="widget-products__item">
                        <div class="widget-products__image"><a href="product.html"><img
                                    src="images/products/product-5.jpg" alt=""></a></div>
                        <div class="widget-products__info">
                            <div class="widget-products__name"><a href="product.html">Brandix Router
                                    Power Tool 2017ERXPK</a></div>
                            <div class="widget-products__prices">$1,700.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
