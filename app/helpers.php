 <?php

    use App\Models\Currency;
    use Illuminate\Support\Facades\Cache;

    if (!function_exists('currencies')) {
        function currencies()
        {
            return Cache::remember('currency', 60, function () {
                return Currency::where('is_active', '1')->get();
            });
        }
    }
    if (!function_exists('formatPrice')) {
        /**
         * Format a price according to the application's currency settings.
         *
         * @param float $amount The amount to format.
         * @param bool $include_symbol Whether to include the currency symbol.
         * @return string The formatted price.
         */
        function formatPrice($amount, $icon = true, $isConvert = false)
        {
            $currency = config('app.currency'); // <-- this works globally now
            $converted = $isConvert ? $amount : $amount * ($currency->rate ?? 1);
            $symbol = $currency->icon ?? '';
            $position = $currency->position ?? 1;

            $formatted = number_format($converted, 2);

            return $icon
                ? ($position == 1 ? $symbol . $formatted : $formatted . $symbol)
                : $formatted;
        }
    }
    function categoryh()
    {
        return $categoryh = \App\Models\Category::orderBy('orders', 'ASC')->where('parent_id', 0)->where('type', 'Regular')->where('status', 'Active')->get();
    }

    function brandh()
    {
        return $brandh = \App\Models\Brand::where('status', 'Active')->get();
    }
    function sizeh()
    {
        return $sizeh = \App\Models\Atribute::where('parent_id', 3)->get();
    }

    function colorh()
    {
        return $colorh = \App\Models\Atribute::where('parent_id', 1)->get();
    }

    function topbrand()
    {
        return $topbrand = \App\Models\Brand::orderBy('id', 'ASC')->where('status', 'Active')->limit(5)->get();
    }
    if (!function_exists('getContrastYIQ')) {
        function getContrastYIQ($hexcolor)
        {
            $hexcolor = ltrim($hexcolor, '#');
            $r = hexdec(substr($hexcolor, 0, 2));
            $g = hexdec(substr($hexcolor, 2, 2));
            $b = hexdec(substr($hexcolor, 4, 2));
            $yiq = (($r * 299) + ($g * 587) + ($b * 114)) / 1000;
            return ($yiq >= 128) ? '#000000' : '#ffffff';
        }
    }
