<?php

namespace App\Providers;

use App\Models\ContactInfo;
use App\Models\SeoConfig;
use App\Models\SocialMedia;
use App\Models\Tag;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use Cart;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Use Bootstrap for pagination
        Paginator::useBootstrap();
        // Pre-cache some data when the application boots
        $this->cacheCategoryBrandData();

        // add by abdullah
        $this->boot_old();
    }

    protected function boot_old()
    {
        // Use Bootstrap for pagination
        Paginator::useBootstrap();

        // Shared globally with all views
        View::share([
            'category_menus' => Category::where('id', '!=', 12)->where('parent_id', 0)->get(),
            'contact_info'   => ContactInfo::find(1),
            'seo'            => SeoConfig::find(1),
            'tags'           => Tag::all(),
        ]);

        // Views that need cart count
        $cartViews = [
            'Frontend.Layout.header',
            'Frontend.Layout.partials.header',
            'Frontend.Layout.partials.mobileHeader',
        ];

        View::composer($cartViews, function ($view) {
            $view->with('cartCount', Cart::getTotalQuantity());
        });
    }

    protected function cacheCategoryBrandData()
    {
        // dd(55);
        $cacheKey = 'category_brand_data';

        // Check if the data is already cached
        if (Cache::has($cacheKey)) {
            return;
        }

        // Fetch data from the database
        $results = DB::table('categories as c')
            ->leftJoin('products as p', 'p.category_id', '=', 'c.id')
            ->leftJoin('brands as b', 'b.id', '=', 'p.brand_id')
            ->select(
                DB::raw('MAX(c.id) as id'),
                DB::raw('MAX(c.title) as category_name'),
                DB::raw('MAX(c.slug) as category_slug'),
                DB::raw('MAX(b.title) as brand_name'),
                DB::raw('MAX(b.slug) as brand_slug'),
                'p.brand_id',
            )
            ->groupBy('p.brand_id')
            ->orderBy('id')
            ->get();
        // return $results;
        // dd(66);
        $formattedResults = [];

        foreach ($results as $result) {
            $categoryId = $result->id;
            $categoryName = $result->category_name;
            $catSlug = $result->category_slug;

            if (!isset($formattedResults[$categoryId])) {
                $formattedResults[$categoryId] = [
                    'category_name' => $categoryName,
                    'category_slug' => $catSlug,
                    'brand' => []
                ];
            }

            if ($result->brand_id) {
                $formattedResults[$categoryId]['brand'][] = [
                    'brand_name' => $result->brand_name,
                    'brand_slug' => $result->brand_slug
                ];
            }
        }

        $formattedResults = array_values($formattedResults);
        // dd($formattedResults);

        // Store data in cache for 2 days
        Cache::put($cacheKey, $formattedResults, 2880); // 2 days = 2880 minutes
    }
}
