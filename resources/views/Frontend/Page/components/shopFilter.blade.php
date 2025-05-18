<div class="shop-layout__sidebar">
    <div class="block block-sidebar">
        {{-- ============================ --}}
        <div class="block-sidebar__item">
            <div class="widget-filters widget" data-collapse data-collapse-opened-class="filter--opened">
                <h4 class="widget__title">Filters</h4>
                <div class="widget-filters__list">
                    {{-- brand --}}
                    <div class="widget-filters__item">
                        <div class="filter filter--opened" data-collapse-item>
                            <button type="button" class="filter__title" data-collapse-trigger>Brand <svg
                                    class="filter__arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                    </use>
                                </svg>
                            </button>
                            <div class="filter__body" data-collapse-content>
                                <div class="filter__container">
                                    <div class="filter-list">
                                        <div class="filter-list__list">
                                            @foreach (brandh() as $brand)
                                                <label class="filter-list__item">
                                                    <span class="filter-list__input input-check"><span
                                                            class="input-check__body">
                                                            <input class="input-check__input" type="checkbox"
                                                                id="brand" name="brand[]"
                                                                value="{{ $brand->id }}">
                                                            <span class="input-check__box"></span> <svg
                                                                class="input-check__icon" width="9px" height="7px">
                                                                <use xlink:href="images/sprite.svg#check-9x7">
                                                                </use>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">
                                                        {{ $brand->title ?? 'N/A' }}
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
                    {{-- category --}}
                    <div class="widget-filters__item">
                        <div class="filter filter--opened" data-collapse-item>
                            <button type="button" class="filter__title" data-collapse-trigger>Sub Category <svg
                                    class="filter__arrow" width="12px" height="7px">
                                    <use xlink:href="images/sprite.svg#arrow-rounded-down-12x7">
                                    </use>
                                </svg>
                            </button>
                            <div class="filter__body" data-collapse-content>
                                <div class="filter__container">
                                    <div class="filter-list">
                                        <div class="filter-list__list">
                                            @foreach (categoryh() as $categorie)
                                                <label class="filter-list__item">
                                                    <span class="filter-list__input input-check"><span
                                                            class="input-check__body">
                                                            <input type="checkbox" class="input-check__input"
                                                                id="category" name="category[]"
                                                                value="{{ $categorie->id }}">
                                                            <span class="input-check__box"></span> <svg
                                                                class="input-check__icon" width="9px" height="7px">
                                                                <use xlink:href="images/sprite.svg#check-9x7">
                                                                </use>
                                                            </svg>
                                                        </span>
                                                    </span>
                                                    <span class="filter-list__title">
                                                        {{ $categorie->title ?? 'N/A' }}
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
