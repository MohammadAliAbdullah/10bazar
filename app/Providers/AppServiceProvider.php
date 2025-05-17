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
}
