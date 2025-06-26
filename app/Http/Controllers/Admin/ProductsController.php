<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
//use Attribute;
use App\Http\Requests\ProductRequest;
use App\Models\ProductTag;
use App\Models\Tag;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Atribute;
use App\Models\Product;
use App\Models\PurchaseDetails;
use App\Models\ProductStock;
use App\Models\Brand;
use App\Models\Unit;
use App\Models\SeoMeta;
use Illuminate\Support\Facades\Session;
// use Image;
use Intervention\Image\Facades\Image; // Ensure you have this line to use the Image facade
use Illuminate\Support\Str;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @modify by abdullah 12-05-2025
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $searchValue = $request->search; // Access the search value correctly
            // dd($searchValue);

            $data = Product::with(['category', 'brand'])
                ->orderByDesc('id');

            // Apply global search filter
            if (!empty($searchValue)) {
                $data->where(function ($query) use ($searchValue) {
                    $query->where('title', 'like', "%{$searchValue}%")
                        ->orWhere('slug', 'like', "%{$searchValue}%");
                });
            }

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('thumb', function ($row) {
                    return '<img src="' . asset($row->thumb) . '" height="40">';
                })
                ->editColumn('category', function ($row) {
                    return $row->category->title ?? 'N/A';
                })
                ->editColumn('brand', function ($row) {
                    return $row->brand->title ?? 'N/A';
                })
                ->editColumn('status', function ($row) {
                    return $row->status ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>';
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('Y-m-d');
                })
                ->addColumn('action', function ($row) {
                    return view('Admin.Products.actions', compact('row'))->render();
                })
                ->rawColumns(['thumb', 'status', 'action'])
                ->make(true);
        }

        return view('Admin.Products.index');
    }

    public function index_9999(Request $request)
    {
        if ($request->ajax()) {
            $searchValue = $request->search; // Access the search value correctly

            $data = Product::with(['category', 'brand'])->orderByDesc('id');

            return DataTables::of($data)
                ->addIndexColumn()

                // Use the search value from the request
                ->filterColumn('title', function ($query) use ($searchValue) {
                    $query->where('title', 'like', "%{$searchValue}%");
                })
                // ->filterColumn('slug', function ($query) use ($searchValue) {
                //     $query->orWhere('slug', 'like', "%{$searchValue}%");
                // })

                ->editColumn('thumb', function ($row) {
                    return '<img src="' . asset($row->thumb) . '" height="40">';
                })
                ->editColumn('category', function ($row) {
                    return $row->category->name ?? 'N/A';
                })
                ->editColumn('brand', function ($row) {
                    return $row->brand->name ?? 'N/A';
                })
                ->editColumn('status', function ($row) {
                    return $row->status ? '<span class="badge badge-success">Active</span>' : '<span class="badge badge-danger">Inactive</span>';
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('Y-m-d');
                })
                ->addColumn('action', function ($row) {
                    return view('Admin.Products.actions', compact('row'))->render();
                })
                ->rawColumns(['thumb', 'status', 'action'])
                ->make(true);
        }

        return view('Admin.Products.index');
    }

    public function index_old(Request $request)
    {
        $query = Product::orderBy('id', 'DESC');

        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('slug', 'like', '%' . $request->search . '%');
            $products = $query->paginate(10)->appends($request->all());
        } else {
            $products = Product::all();
        }



        return view('Admin.Products.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $values = Tag::select('title as value', 'title as text')->get();
        $parents = Category::where('type', 'Regular')->where('parent_id', 0)->get()->pluck('title', 'id')->toArray();
        $spacials = Category::where('type', 'Special')->get()->pluck('title', 'id')->toArray();
        $sub_cats = Category::where('parent_id', '!=', 0)->get()->pluck('title', 'id')->toArray();
        $brands = Brand::all()->pluck('title', 'id')->toArray();
        $units = Unit::all()->pluck('name', 'id')->toArray();
        $attributes = Atribute::where('parent_id', 0)->get();
        return view('Admin.Products.add', compact('parents', 'sub_cats', 'spacials', 'brands', 'units', 'attributes', 'values'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $product = [];

        // Process Tags
        $tagIds = [];
        foreach (explode(',', $data['tag']) as $tagText) {
            $slug = str_slug($tagText);
            $tag = Tag::firstOrCreate(['slug' => $slug], ['title' => $tagText]);
            $tagIds[] = $tag->id;
        }

        $path = public_path('uploads/images/products/');
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        // Handle main image upload (thumb + large)
        if ($file = $request->file('images')) {
            $timestamp = now()->format('YmdHis');

            // Thumb
            $thumbName = $timestamp . '-thumbnail-180x178.' . $file->extension();
            Image::make($file->path())
                ->resize(250, 250, function ($c) {
                    $c->aspectRatio();
                })->save($path . $thumbName);
            $product['thumb'] = 'public/uploads/images/products/' . $thumbName;

            // Main image
            $imageName = $timestamp . '-photo-300x370.' . $file->extension();
            Image::make($file->path())
                ->resize(2000, 2000, function ($c) {
                    $c->aspectRatio();
                })->save($path . $imageName);
            $product['images'] = 'public/uploads/images/products/' . $imageName;
        }

        // Handle gallery images
        $galleryNames = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $galleryFile) {
                $name = now()->format('YmdHis') . '-' . preg_replace('/\s+/', '-', $galleryFile->getClientOriginalName());
                $galleryFile->move($path, $name);
                $galleryNames[] = 'public/uploads/images/products/' . $name;
            }
        }
        $product['gallery'] = implode(',', $galleryNames);

        // Basic fields
        $product['sku'] = $data['sku'];
        $product['regular_price'] = $data['regular_price'];
        $product['sales_price'] = $data['sales_price'];
        $product['title'] = $data['title'];
        $product['slug'] = $this->createSlug($data['title']);
        $product['category_id'] = $data['category_id'];
        $product['sub_category_id'] = $data['sub_category_id'] ?? 0;
        $product['brand_id'] = $data['brand_id'] ?? 0;
        $product['spacialcat_id'] = $data['spacialcat_id'] ?? 0;
        $product['qty'] = $data['qty'];
        $product['unit_id'] = $data['unit_id'];
        $product['featured'] = $data['featured'];
        $product['content'] = $data['content'];
        $product['specification'] = $data['specification'];
        $product['warrenty'] = $data['warrenty'];
        $product['status'] = $data['status'];

        // Multi-option fields
        $product['color'] = isset($data['color']) ? implode(',', $data['color']) : null;
        $product['size'] = isset($data['size']) ? implode(',', $data['size']) : null;
        $product['blade'] = isset($data['blade']) ? implode(',', $data['blade']) : null;

        // SEO
        $product['meta_tags'] = implode(',', $tagIds);
        $product['meta_title'] = $data['meta_title'];
        $product['meta_keyword'] = $data['meta_keyword'];
        $product['meta_description'] = $data['meta_description'];

        // Create product
        $prod = Product::create($product);

        // Product stock
        $stock = [
            'product_id' => $prod->id,
            'sku' => $data['sku'],
            'unit_id' => $data['unit_id'],
            'stock_qty' => $data['qty'],
            'ragular_price' => $data['regular_price'],
            'sales_price' => $data['sales_price'],
            'colored' => $product['color'] ?? '',
            'sized' => $product['size'] ?? '',
        ];
        ProductStock::create($stock);

        // Save product-tag relation
        foreach ($tagIds as $tagId) {
            ProductTag::create([
                'product_id' => $prod->id,
                'tags_id' => $tagId,
            ]);
        }

        Session::flash('status', 'Your product has been successfully added');
        return redirect()->route('madmin.products.index');
    }


    public function change_sub_category(Request $request)
    {
        $sub_cats = Category::where('parent_id', $request->id)->get();
        return $sub_cats;
    }
    //    public function tags(Request $request)
    //    {
    //        $data = Tag::select("title as value", "id","slug")
    //            ->where('title', 'LIKE', $request->get('search'). '%')
    //            ->get();
    //
    //        return response()->json($data);
    //    }
    public function tags()
    {
        //$values =Tag::select('title')->get();
        $values = Tag::select('title')->get();
        foreach ($values as $value) {
            $arr[] = $value->title;
        }
        return json_encode($arr);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $values = Tag::select('title as value', 'title as text')->get();
        $product = Product::findOrFail($id);
        $parents = Category::where('parent_id', 0)->get()->pluck('title', 'id')->toArray();
        $sub_cats = Category::where('parent_id', '!=', 0)->get()->pluck('title', 'id')->toArray();
        $spacials = Category::where('type', 'Special')->get()->pluck('title', 'id')->toArray();
        $brands = Brand::all()->pluck('title', 'id')->toArray();
        $units = Unit::all()->pluck('name', 'id')->toArray();
        $seo_meta = SeoMeta::where('id', $product->meta_id)->first();
        //$stock = ProductStock::where('sku', $product->sku)->first();
        $attributes = Atribute::where('parent_id', 0)->get();
        return view('Admin.Products.edit', compact('values', 'seo_meta', 'product', 'parents', 'sub_cats', 'spacials', 'brands', 'units', 'attributes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product_edit = Product::findOrFail($id);
        $product = [];

        // Tags Processing
        $tagIds = [];
        foreach (explode(',', $data['tag']) as $text) {
            $slug = str_slug($text);
            $tag = Tag::firstOrCreate(['slug' => $slug], ['title' => $text]);
            $tagIds[] = $tag->id;
        }

        $path = public_path('uploads/images/products/');
        if (!file_exists($path)) mkdir($path, 0755, true);

        // Handle main image (single input used for both thumb and full)
        if ($file = $request->file('images')) {
            // Remove old files
            if ($product_edit->thumb && file_exists($path . $product_edit->thumb)) {
                unlink($path . $product_edit->thumb);
            }
            if ($product_edit->images && file_exists($path . $product_edit->images)) {
                unlink($path . $product_edit->images);
            }

            $timestamp = now()->format('YmdHis');

            // Thumb
            $thumbName = $timestamp . '-thumbnail-180X178.' . $file->extension();
            Image::make($file->path())
                ->resize(300, 300, fn($c) => $c->aspectRatio())
                ->save($path . $thumbName);
            $product['thumb'] = 'public/uploads/images/products/' . $thumbName;

            // Full image
            $imageName = $timestamp . '-photo-300X370.' . $file->extension();
            Image::make($file->path())
                ->resize(2000, 2000, fn($c) => $c->aspectRatio())
                ->save($path . $imageName);
            $product['images'] = 'public/uploads/images/products/' . $imageName;
        }

        // Gallery Upload
        if ($request->hasFile('gallery')) {
            $galleryNames = [];
            foreach ($request->file('gallery') as $galleryFile) {
                $name = now()->format('YmdHis') . '-' . preg_replace('/\s+/', '-', $galleryFile->getClientOriginalName());
                $galleryFile->move($path, $name);
                $galleryNames[] = 'public/uploads/images/products/' . $name;
            }
            $product['gallery'] = implode(',', $galleryNames);
        }

        // Other Fields
        $product['sku'] = $data['sku'];
        $product['regular_price'] = $data['regular_price'];
        $product['sales_price'] = $data['sales_price'];
        $product['title'] = $data['title'];
        $product['slug'] = ($data['title'] == $product_edit->title) ? $product_edit->slug : $this->createSlug($data['title']);
        $product['category_id'] = $data['category_id'];
        $product['sub_category_id'] = $data['sub_category_id'] ?? 0;
        $product['brand_id'] = $data['brand_id'] ?? 0;
        $product['spacialcat_id'] = $data['spacialcat_id'] ?? 0;
        $product['qty'] = $data['qty'];
        $product['unit_id'] = $data['unit_id'];
        $product['featured'] = $data['featured'];
        $product['content'] = $data['content'];
        $product['specification'] = $data['specification'];
        $product['warrenty'] = $data['warrenty'];
        $product['status'] = $data['status'];
        $product['color'] = !empty($data['colord']) ? implode(',', $data['colord']) : null;
        $product['size'] = !empty($data['sized']) ? implode(',', $data['sized']) : null;
        $product['blade'] = !empty($data['bladed']) ? implode(',', $data['bladed']) : null;

        // SEO
        $product['meta_tags'] = implode(',', $tagIds);
        $product['meta_title'] = $data['meta_title'];
        $product['meta_keyword'] = $data['meta_keyword'];
        $product['meta_description'] = $data['meta_description'];

        $product_edit->update($product);

        // Update or create Product Stock
        $stock = ProductStock::firstOrNew(['product_id' => $product_edit->id]);
        $stock->sku = $data['sku'];
        $stock->unit_id = $data['unit_id'];
        $stock->stock_qty = $data['qty'];
        $stock->ragular_price = $data['regular_price'];
        $stock->sales_price = $data['sales_price'];
        $stock->colored = !empty($data['colord']) ? implode(',', $data['colord']) : null;
        $stock->sized = !empty($data['sized']) ? implode(',', $data['sized']) : null;
        $stock->save();

        // Update Product Tags
        ProductTag::where('product_id', $product_edit->id)->delete();
        foreach ($tagIds as $tagId) {
            ProductTag::create([
                'product_id' => $product_edit->id,
                'tags_id' => $tagId,
            ]);
        }

        Session::flash('status', 'Your product has been successfully updated!');
        return redirect()->route('madmin.products.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        //$product_stock = ProductStock::where('sku', $product->sku)->delete();
        SeoMeta::where('id', $product->meta_id)->delete();
        $product->delete();

        Session::flash('status', 'Your product has been sucessfully deleted!');
        return redirect()->route('madmin.products.index');
    }
    public function createSlug($title, $id = 0)
    {
        $slug = str_slug($title);
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        if (! $allSlugs->contains('slug', $slug)) {
            return $slug;
        }

        $i = 1;
        $is_contain = true;
        do {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                $is_contain = false;
                return $newSlug;
            }
            $i++;
        } while ($is_contain);
    }
    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Product::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}
