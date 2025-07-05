@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Shop'), 'subPage' => __('Filter')])

    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">

            {{-- Sidebar Filter --}}
            <div class="d-none d-md-block">
                @include('Frontend.Page.components.shopFilter')
            </div>
            {{-- Main Content --}}
            <div class="shop-layout__content">
                <div class="d-block d-md-none mb-3 text-right mt-5">
                    <button class="btn btn-dark" data-toggle="modal" data-target="#filterModal">
                        <i class="fa fa-filter"></i> Filter
                    </button>
                </div>
                <div class="block">
                    <div class="products-view">
                        {{-- View Options --}}
                        @include('Frontend.components.productViewOption')
                        {{-- Product List --}}
                        <div class="productList">
                            <div class="products-view__list products-list" data-layout="grid-3-sidebar"
                                data-with-features="false">
                                <div class="products-list__body">
                                    <section
                                        id="{{ request()->get('style') == 'list' ? 'productListView' : 'productGirdView' }}"
                                        class="section-p1 {{ request()->get('style') == 'list' ? 'container' : '' }}">
                                        <div class="{{ request()->get('style') == 'list' ? 'list-container' : 'row' }}">
                                            {{-- Loop through products --}}
                                            @foreach ($cat_products as $product)
                                                @include('Frontend.components.productCard', [
                                                    'product' => $product,
                                                ])
                                            @endforeach
                                        </div>
                                    </section>
                                </div>
                            </div>

                            {{-- Pagination --}}
                            <div class="products-view__pagination">
                                @if ($cat_products->hasPages())
                                    <ul class="pagination justify-content-center">
                                        {!! $cat_products->links() !!}
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Slide-in from left */
        .modal.left .modal-dialog {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            margin: 0 !important;
            height: 100%;
            max-width: 90%;
            transform: translateX(-100%);
            transition: transform 0.3s ease-out;
            z-index: 1055;
        }

        .modal.left.show .modal-dialog {
            transform: translateX(0);
        }

        /* Modal container styles */
        .modal.left .modal-content,
        .modal-dialog,
        .modal-content {
            height: 100%;
            background-color: #fff !important;
            border: none !important;
            box-shadow: none !important;
            outline: none !important;
            border-radius: 0 !important;
        }

        /* Remove Bootstrap 5 shadow variables if applicable */
        .modal-content {
            --bs-box-shadow: none !important;
            box-shadow: none !important;
        }

        /* Extra assurance: override browser focus ring & active box-shadows */
        .modal *,
        .modal *:focus,
        .modal *:active {
            box-shadow: none !important;
            outline: none !important;
            border-color: transparent !important;
        }

        /* Modal body scroll and spacing */
        .modal.left .modal-body {
            overflow-y: auto;
            flex-grow: 1;
            padding: 15px;
        }

        /* Header/footer no borders */
        .modal-header,
        .modal-footer {
            border: none !important;
        }

        /* Optional: backdrop less visible or completely transparent */
        .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.1) !important;
            box-shadow: none !important;
        }
    </style>
    <div class="modal left fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-slideout" role="document">
            <div class="modal-content h-100 d-flex flex-column">
                <div class="modal-header">
                    <h5 class="modal-title">Filter Products</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto flex-grow-1">
                    @include('Frontend.Page.components.shopFilter')
                </div>
            </div>
        </div>
    </div>
@endsection
