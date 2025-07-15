@extends('Admin.layoutApp.app')

@section('content')
@include('Admin.include.breadcrumb', [
    'page' => __('Themes Setting'),
    'parent' => __('Home'),
    'child' => __('Slide'),
    'button' => __('Slide List'),
    'button_icon' => 'lni lni-list',
    'route' => '#',
])

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm rounded-2xl">
                <div class="card-body">
                    @include('Admin.include.message')

                    <form method="POST" action="{{ route('madmin.theme-settings.update') }}">
                        @csrf
                        @method('POST')

                        @php
                            $sections = [
                                'Topbar' => [
                                    'topbar_bg' => 'Background',
                                    'topbar_text' => 'Text',
                                ],
                                'Navbar' => [
                                    'navbar_bg' => 'Background',
                                    'navbar_text' => 'Text',
                                ],
                                'Button' => [
                                    'button_bg' => 'Background',
                                    'button_hover' => 'Hover',
                                    'button_border' => 'Border',
                                    'button_text' => 'Text',
                                ],
                                'Pagination' => [
                                    'pagination_bg' => 'Background',
                                    'pagination_text' => 'Text',
                                ],
                                'Cart' => [
                                    'cart_bg' => 'Background',
                                    'cart_border' => 'Border',
                                    'cart_text' => 'Text',
                                ],
                            ];
                        @endphp

                        @foreach($sections as $sectionName => $fields)
                            <div class="card border-primary">
                                <div class="card-header bg-default">
                                    <h5 class="mb-0">{{ $sectionName }} Colors</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        @foreach($fields as $key => $label)
                                            @php
                                                $val = $theme->$key ?? '#000000';
                                                $valClean = '#' . ltrim($val, '#');
                                            @endphp
                                            <div class="col-md-6 mb-3">
                                                <label for="{{ $key }}" class="form-label fw-bold"
                                                    style="color: {{ $valClean }};">
                                                    {{ $label }}
                                                </label>
                                                <div class="d-flex align-items-center gap-2">
                                                    <input
                                                        type="color"
                                                        class="form-control form-control-color color-input"
                                                        name="{{ $key }}"
                                                        id="{{ $key }}"
                                                        value="{{ $valClean }}"
                                                        data-target-text="#text_{{ $key }}"
                                                        data-target-label="label[for='{{ $key }}']"
                                                    >
                                                    <input
                                                        type="text"
                                                        class="form-control preview-text-input"
                                                        id="text_{{ $key }}"
                                                        readonly
                                                        value="{{ $valClean }}"
                                                        style="background-color: {{ $valClean }}; color: {{ getContrastYIQ($valClean) }};"
                                                    >
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary mt-3 px-4">
                            <i class="lni lni-save me-1"></i> Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    // Helper to determine light or dark text color for contrast
    function getContrastYIQ(hexcolor) {
        hexcolor = hexcolor.replace('#', '');
        var r = parseInt(hexcolor.substr(0,2),16);
        var g = parseInt(hexcolor.substr(2,2),16);
        var b = parseInt(hexcolor.substr(4,2),16);
        var yiq = ((r*299)+(g*587)+(b*114))/1000;
        return (yiq >= 128) ? '#000000' : '#ffffff';
    }

    $(document).ready(function() {
        $('.color-input').each(function() {
            // Initialize label and preview text colors on page load
            var colorVal = $(this).val();
            var labelSelector = $(this).data('target-label');
            var textSelector = $(this).data('target-text');

            $(labelSelector).css('color', colorVal);
            $(textSelector).css({
                'background-color': colorVal,
                'color': getContrastYIQ(colorVal)
            });
        });

        $('.color-input').on('input change', function() {
            var val = $(this).val();
            var labelSelector = $(this).data('target-label');
            var textSelector = $(this).data('target-text');

            // Update label color
            $(labelSelector).css('color', val);

            // Update preview text input background and text color
            $(textSelector).val(val).css({
                'background-color': val,
                'color': getContrastYIQ(val)
            });
        });
    });
</script>
@endsection
