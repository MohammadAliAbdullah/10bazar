<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductStock;
use App\Models\SeoMeta;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image; // Ensure you have this line to use the Image facade
// use Image;
use Illuminate\Support\Str;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('Admin.Categories.index', compact('categories'));
    }

    public function spacial()
    {
        $categories = Category::where('type', 'Special')->paginate(10);
        return view('Admin.Categories.index', compact('categories'));
    }

    public function regular()
    {
        $categories = Category::where('type', 'Regular')->paginate(10);
        return view('Admin.Categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parents = Category::where('parent_id', 0)->get()->pluck('title', 'id')->toArray();
        return view('Admin.Categories.add', compact('parents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $category = [];

        $path = public_path('uploads/images/categories/');
        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        if ($file = $request->file('image')) {
            $timestamp = time();

            // Thumb
            $thumbName = $timestamp . '-thumb.' . $file->extension();
            Image::make($file->path())
                ->resize(200, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path . $thumbName);
            $category['thumb'] = 'public/uploads/images/categories/' . $thumbName;

            // Main image
            $imageName = $timestamp . '-image.' . $file->extension();
            Image::make($file->path())
                ->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path . $imageName);
            $category['images'] = 'public/uploads/images/categories/' . $imageName;
        }

        if ($file = $request->file('banner')) {
            $bannerName = time() . '-banner.' . $file->extension();
            Image::make($file->path())
                ->resize(1000, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path . $bannerName);
            $category['banner'] = 'public/uploads/images/categories/' . $bannerName;
        }

        if ($file = $request->file('background')) {
            $bgPath = public_path('uploads/images/');
            if (!file_exists($bgPath)) {
                mkdir($bgPath, 0755, true);
            }

            $backgroundName = time() . '-background.' . $file->extension();
            Image::make($file->path())
                ->resize(1300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($bgPath . $backgroundName);
            $category['background'] = 'public/uploads/images/' . $backgroundName;
        }

        // Assign other fields
        $category['title'] = $data['title'];
        $category['slug'] = $this->createSlug($data['title']);
        $category['type'] = $data['type'];
        $category['status'] = $data['status'];
        $category['parent_id'] = $data['parent_id'];
        $category['img_alt'] = $data['img_alt'];
        $category['smm_title'] = $data['smm_title'];
        $category['smm_content'] = $data['smm_content'];
        $category['meta_title'] = $data['meta_title'];
        $category['meta_description'] = $data['meta_description'];
        $category['meta_keyword'] = $data['meta_keyword'];
        $category['schema'] = $data['schema'];
        $category['follow'] = $data['follow'];

        Category::create($category);

        Session::flash('status', 'Your Category has been successfully added');
        return redirect()->route('madmin.categories.index');
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
        $parents = Category::where('parent_id', 0)->get()->pluck('title', 'id')->toArray();
        $category = Category::findOrFail($id);
        $seo_meta = SeoMeta::where('id', $category->meta_id)->first();
        return view('Admin.Categories.edit', compact('category', 'seo_meta', 'parents'));
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
        $category_edit = Category::findOrFail($id);
        $category = [];

        $path = public_path('uploads/images/categories/');
        $bgPath = public_path('uploads/images/');

        if (!file_exists($path)) mkdir($path, 0755, true);
        if (!file_exists($bgPath)) mkdir($bgPath, 0755, true);

        // image (thumb + main)
        if ($file = $request->file('image')) {
            $timestamp = time();

            // delete old thumb if exists
            if (!empty($category_edit->thumb) && file_exists(public_path(str_replace('public/', '', $category_edit->thumb)))) {
                unlink(public_path(str_replace('public/', '', $category_edit->thumb)));
            }

            // delete old image if exists
            if (!empty($category_edit->images) && file_exists(public_path(str_replace('public/', '', $category_edit->images)))) {
                unlink(public_path(str_replace('public/', '', $category_edit->images)));
            }

            // Save new thumb
            $thumbName = $timestamp . '-thumb.' . $file->extension();
            Image::make($file->path())
                ->resize(200, 200, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path . $thumbName);
            $category['thumb'] = 'public/uploads/images/categories/' . $thumbName;

            // Save new main image
            $imageName = $timestamp . '-image.' . $file->extension();
            Image::make($file->path())
                ->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path . $imageName);
            $category['images'] = 'public/uploads/images/categories/' . $imageName;
        }

        // banner
        if ($file = $request->file('banner')) {
            if (!empty($category_edit->banner) && file_exists(public_path(str_replace('public/', '', $category_edit->banner)))) {
                unlink(public_path(str_replace('public/', '', $category_edit->banner)));
            }

            $bannerName = time() . '-banner.' . $file->extension();
            Image::make($file->path())
                ->resize(500, 800, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path . $bannerName);
            $category['banner'] = 'public/uploads/images/categories/' . $bannerName;
        }

        // background
        if ($file = $request->file('background')) {
            if (!empty($category_edit->background) && file_exists(public_path(str_replace('public/', '', $category_edit->background)))) {
                unlink(public_path(str_replace('public/', '', $category_edit->background)));
            }

            $backgroundName = time() . '-background.' . $file->extension();
            Image::make($file->path())
                ->resize(1300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($bgPath . $backgroundName);
            $category['background'] = 'public/uploads/images/' . $backgroundName;
        }

        // other fields
        $category['title'] = $data['title'];
        $category['slug'] = ($data['title'] == $category_edit->title)
            ? $category_edit->slug
            : $this->createSlug($data['title']);

        $category['type'] = $data['type'];
        $category['content'] = $data['content'];
        $category['parent_id'] = $data['parent_id'];
        $category['img_alt'] = $data['img_alt'];
        $category['status'] = $data['status'];
        $category['smm_title'] = $data['smm_title'];
        $category['smm_content'] = $data['smm_content'];
        $category['meta_title'] = $data['meta_title'];
        $category['meta_description'] = $data['meta_description'];
        $category['meta_keyword'] = $data['meta_keyword'];
        $category['schema'] = $data['schema'];
        $category['follow'] = $data['follow'];

        $category_edit->update($category);

        Session::flash('status', 'Your Category has been successfully updated!');
        return redirect()->route('madmin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        //        if(file_exists(public_path() . "/uploads/images/categories/" . $category->banner)) {
        //            unlink(public_path() . "/uploads/images/categories/" . $category->banner);
        //        }
        //        if(file_exists(public_path() . "/uploads/images/categories/" . $category->images)) {
        //            unlink(public_path() . "/uploads/images/categories/" . $category->images);
        //        }
        //        if(file_exists(public_path() . "/uploads/images/categories/" . $category->thumb)) {
        //            unlink(public_path() . "/uploads/images/categories/" . $category->thumb);
        //        }
        //        $products = $category->products;
        //        foreach ($products as $product) {
        //            $product->productstock->delete();
        //            //$product->seometa->delete();
        //            $product->delete();
        //        }

        //SeoMeta::where('id', $category->meta_id)->delete();
        $category->delete();
        Session::flash('status', 'Your Category has been sucessfully deleted with child products!');
        return redirect()->route('madmin.categories.index');
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
        return Category::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}
