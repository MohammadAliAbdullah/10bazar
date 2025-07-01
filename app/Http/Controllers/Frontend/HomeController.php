<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Discount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Slide;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Atribute;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        // dd(formatPrice(122, true)); // Example usage of formatPrice function
        $slides = cache()->remember('slide', 60 * 60 * 24, function () {
            return Slide::where('status', 'Active')->get();
        });

        $categories = cache()->remember('categories-home', 60 * 60 * 24, function () {
            return Category::orderBy('orders', 'ASC')->where('type', 'Regular')->where('parent_id', 0)->limit(6)->get();
        });

        $spacials = cache()->remember('spacials-home', 60 * 60 * 24, function () {
            return Category::where('type', 'Special')->where('parent_id', 0)->limit(8)->get();
        });

        $brands = cache()->remember('brands-home', 60 * 60 * 24, function () {
            return Brand::limit(12)->get();
        });

        $featureds = cache()->remember('featureds-home', 60 * 60 * 24, function () {
            return Product::select(
                'id',
                'category_id',
                'sku',
                'title',
                'slug',
                'thumb',
                'images',
                'img_alt',
                'gallery',
                'qty',
                'regular_price',
                'sales_price',
                'featured'
            )
            ->where('featured', 'Yes')
            ->orderBy('id', 'ASC')
            ->limit(10)
            ->get();
        });

        $newArrivals = Product::select(
            'id',
            'category_id',
            'sku',
            'title',
            'slug',
            'thumb',
            'images',
            'img_alt',
            'gallery',
            'qty',
            'regular_price',
            'sales_price',
            'featured'
        )
        ->orderBy('id', 'desc')
        ->limit(10)
        ->get();

        $home1 = cache()->remember('home1-home', 60 * 60 * 24, function () {
            return Banner::where('position', 'Home1')->first();
        });

        $home2 = cache()->remember('home2-home', 60 * 60 * 24, function () {
            return Banner::where('position', 'Home2')->first();
        });

        $home3 = cache()->remember('home3-home', 60 * 60 * 24, function () {
            return Banner::where('position', 'Home3')->first();
        });

        $spproducts = cache()->remember('spproducts-home', 60 * 60 * 24, function () {
            return Product::orderBy('id', 'DESC')->where('spacialcat_id', '!=', 0)->limit(6)->get();
        });

        $blogs = cache()->remember('blogs-home', 60 * 60 * 24, function () {
            return Blog::orderBy('id', 'DESC')->where('status', 'Active')->limit(3)->get();
        });

        return view("Frontend.Page.home", compact('slides', 'categories', 'featureds', 'home1', 'home2', 'home3', 'spproducts', 'spacials', 'blogs', 'newArrivals', 'brands'));
    }

    public function search(Request $request)
    {
        $query = $request->search;
        $cat_products = Product::where('title', 'LIKE', "%$query%")
            ->paginate(24);

        return view("Frontend.Page.search", compact('cat_products'));
    }

    public function today_offer()
    {
        $todate = Carbon::now()->toDateString();
        $discounts = Discount::where('start_date', '<', $todate)->where('end_date', '>', $todate)->where('status', '=', 'Ongoing')->get();
        $products = Product::limit(20)->get();
        return view("Frontend.Page.today_offer", compact('discounts', 'products'));
    }

    public function home_page_1()
    {
        return view("Frontend.home_page_1");
    }

    public function home_page_2()
    {
        return view("Frontend.home_page_2");
    }

    public function login()
    {
        return view("Frontend.login");
    }

    public function register()
    {
        return view("Frontend.Page.createAccount");
    }

    public function shop_by_category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $cat_products = Product::where('category_id', $category->id)->orWhere('sub_category_id', $category->id)->paginate(20);
        $subcats = Product::groupBy('sub_category_id')->select('sub_category_id')->where('category_id', $category->id)->where('sub_category_id', '!=', 0)->get();
        $brands = Product::groupBy('brand_id')->select('brand_id')->where('category_id', $category->id)->where('brand_id', '!=', 0)->get();
        $categories = Category::where('type', 'Regular')->where('parent_id', $category->id)->get();
        $colorss = Product::select('color')->where('category_id', $category->id)->where('color', '!=', NULL)->get();
        $sizess = Product::select('size')->where('category_id', $category->id)->where('size', '!=', NULL)->get();

        return view("Frontend.Page.shopByCatgory", compact('cat_products', 'brands', 'category', 'categories', 'subcats', 'colorss', 'sizess'));
    }

    public function shop_by_brand($slug)
    {
        $brand = Brand::where('slug', $slug)->first();
        $cat_products = Product::where('brand_id', $brand->id)->orWhere('sub_category_id', $brand->id)->paginate(20);
        $all_partners = Brand::all()->toArray();
        return view("Frontend.Page.shopByBrand", compact('cat_products', 'brand', 'all_partners'));
    }

    public function shop_by_shop($category, $brand)
    {
        $brand = Brand::where('slug', $brand)->first();
        $category = Category::where('slug', $category)->first();
        $cat_products = Product::where('brand_id', $brand->id)->where('category_id', $category->id)->orWhere('sub_category_id', $category->id)->paginate(20);
        $all_partners = Brand::all()->toArray();
        return view("Frontend.Page.shopInShop", compact('cat_products', 'brand', 'all_partners', 'category'));
    }

    public function shopfilters(Request $request)
    {
        if (isset($request->brand) or isset($request->category) or isset($request->size) or isset($request->color) or isset($request->price)) {
            $products = DB::table('products as p')
                ->select('p.*')
                ->where('p.status', 'Active');

            if (isset($request->price)) {
                $price = explode("-", implode(",", $request->price));
                $products->whereRaw('p.regular_price BETWEEN ' . $price[0] . ' AND ' . $price[1] . '');
                $products->whereRaw('p.sales_price BETWEEN ' . $price[0] . ' AND ' . $price[1] . '');
            }
            if (isset($request->brand)) {
                $brand_filter = implode(",", $request->brand);
                $products->whereRaw('p.brand_id IN (' . $brand_filter . ')');
            }
            if (isset($request->category)) {
                $category = implode(",", $request->category);
                $products->whereRaw('p.sub_category_id IN(' . $category . ')');
            } else {
                $category = Category::where('slug', $request->action)->first();
                $products->whereRaw('p.category_id IN(' . $category->id . ')');
            }
            if (isset($request->size)) {
                $size = implode(",", $request->size);
                $products->whereRaw('p.size IN (' . $size . ')');
            }
            if (isset($request->color)) {
                $color = implode(",", $request->color);
                $products->whereRaw('p.color IN (' . $color . ')');
            }

            $products = $products->get();
            $brands = Brand::all();
            $categories = Category::where('type', 'Regular')->where('parent_id', 0)->get();
            return view("Frontend.ajax", compact('cat_products', 'brands', 'categories'));
        } else {
            $category = Category::where('slug', $request->action)->first();
            $subcats = Product::groupBy('sub_category_id')->select('sub_category_id')->where('category_id', $category->id)->where('sub_category_id', '!=', 0)->get();
            $colorss = Product::select('color')->where('category_id', $category->id)->where('color', '!=', NULL)->get();
            $sizess = Product::select('size')->where('category_id', $category->id)->where('size', '!=', NULL)->get();
            $bladess = Product::select('blade')->where('category_id', $category->id)->where('blade', '!=', NULL)->get();

            $cat_products = Product::where('category_id', $category->id)->orWhere('sub_category_id', $category->id)->paginate(20);
            $brands = Brand::all();
            $categories = Category::where('type', 'Regular')->where('parent_id', 0)->get();
            return view("Frontend.ajax", compact('cat_products', 'brands', 'categories', 'subcats', 'colorss', 'sizess', 'bladess'));
        }
    }

    public function filterProducts(Request $request)
    {
        $query = Product::query();
        $query->where('status', 'Active');

        if ($request->has('brands')) {
            $query->whereIn('brand_id', $request->brands);
        }

        if ($request->has('categories')) {
            $query->whereIn('category_id', $request->categories);
        }

        if ($request->has('subCategories')) {
            $query->whereIn('sub_category_id', $request->subCategories);
        }

        if ($request->has('colors')) {
            $query->whereIn('color', $request->colors);
        }

        if ($request->has('sizes')) {
            $query->whereIn('size', $request->sizes);
        }

        if ($request->has('prices')) {
            $priceRange = explode('-', $request->prices[0]);
            $minPrice = $priceRange[0] ?? 0;
            $maxPrice = $priceRange[1] ?? 1000000;

            $query->where(function ($q) use ($minPrice, $maxPrice) {
                $q->whereBetween('regular_price', [$minPrice, $maxPrice])
                  ->orWhereBetween('sales_price', [$minPrice, $maxPrice]);
            });
        }

        $data['products'] = $query->latest()->paginate(12);
        $data['layout'] = $request->layout ?? 'grid';
        return response()->json([
            'html' => view('Frontend.Page.components.filteredProducts', $data)->render()
        ]);
    }

    public function collection($category, $value)
    {
        $atribute = Atribute::where('slug', $value)->first();
        $category = Category::where('slug', $category)->first();

        if ($atribute->attribute_parent->slug == 'color') {
            $cat_products = Product::where('category_id', $category->id)->whereRaw("find_in_set('" . $atribute->id . "',products.color)")->paginate(20);
        } elseif ($atribute->attribute_parent->slug == 'size') {
            $cat_products = Product::where('category_id', $category->id)->whereRaw("find_in_set('" . $atribute->id . "',products.size)")->paginate(20);
        } elseif ($atribute->attribute_parent->slug == 'blade') {
            $cat_products = Product::where('category_id', $category->id)->whereRaw("find_in_set('" . $atribute->id . "',products.blade)")->paginate(20);
        }

        $all_partners = Brand::all()->toArray();
        return view("Frontend.shopinshop", compact('cat_products', 'all_partners', 'category'));
    }

    public function price($category, $slug)
    {
        $amount = explode('-', $slug);
        $category = Category::where('slug', $category)->first();
        $cat_products = Product::where('category_id', $category->id)
            ->orWhere('sub_category_id', $category->id)
            ->whereBetween('regular_price', [$amount[0], $amount[1]])
            ->orWhereBetween('sales_price', [$amount[0], $amount[1]])
            ->paginate(20);

        $all_partners = Brand::all()->toArray();
        return view("Frontend.shopinshop", compact('cat_products', 'all_partners', 'category'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
