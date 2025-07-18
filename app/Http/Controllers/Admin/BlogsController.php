<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\SeoMeta;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;



class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view("Admin.Blogs.index", compact("blogs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Blogs.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        $data = $request->all();

        // Basic Fields
        $blog['title']   = $data['title'];
        $blog['slug']    = $this->createSlug($data['title']);
        $blog['status']  = $data['status'];
        $blog['content'] = $data['content'];
        $blog['writer']  = $data['writer'];

        // Handle Image Upload
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            // Paths
            $uploadPath = public_path('uploads/blogs/');
            $thumbPath = $uploadPath . 'thumb_' . $filename;
            $imagePath = $uploadPath . $filename;

            // Ensure folder exists
            if (!File::exists($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true);
            }

            // Create and save thumbnail (300x300)
            $thumb = Image::make($file->getRealPath())->fit(300, 300, function ($constraint) {
                $constraint->upsize();
            });
            $thumb->save($thumbPath);
            $blog['thumb'] = 'public/uploads/blogs/thumb_' . $filename;

            // Move original image
            $file->move($uploadPath, $filename);
            $blog['images'] = 'public/uploads/blogs/' . $filename;
        }

        // SEO Meta
        $blog['meta_title']       = $data['meta_title'];
        $blog['meta_keyword']     = $data['meta_keyword'];
        $blog['meta_description'] = $data['meta_description'];

        // Create blog
        Blog::create($blog);

        Session::flash('status', 'Your blog has been successfully added');
        return redirect()->route('madmin.blogs.index');
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
        $blog = Blog::findOrFail($id);
        return view("Admin.Blogs.edit", compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        $data = $request->all();
        $blog_to_update = Blog::findOrFail($id);

        // Basic fields
        $blog['title']   = $data['title'];
        $blog['status']  = $data['status'];
        $blog['content'] = $data['content'];
        $blog['writer']  = $data['writer'];

        // Slug logic
        if ($data['title'] === $blog_to_update->title) {
            $blog['slug'] = $blog_to_update->slug;
        } else {
            $blog['slug'] = $this->createSlug($data['title']);
        }

        // Handle image and thumbnail
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $destinationPath = public_path('uploads/blogs/');

            // Ensure folder exists
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            // Save thumbnail (resized)
            $thumbImage = Image::make($file->getRealPath())->fit(300, 300, function ($constraint) {
                $constraint->upsize();
            });
            $thumbPath = $destinationPath . 'thumb_' . $fileName;
            $thumbImage->save($thumbPath);
            $blog['thumb'] = 'public/uploads/blogs/thumb_' . $fileName;

            // Save original image
            $file->move($destinationPath, $fileName);
            $blog['images'] = 'public/uploads/blogs/' . $fileName;

            // Optional: Delete old images (if needed)
            if ($blog_to_update->images && File::exists($blog_to_update->images)) {
                File::delete($blog_to_update->images);
            }
            if ($blog_to_update->thumb && File::exists($blog_to_update->thumb)) {
                File::delete($blog_to_update->thumb);
            }
        }

        // SEO Meta Fields
        $blog['meta_title']       = $data['meta_title'];
        $blog['meta_keyword']     = $data['meta_keyword'];
        $blog['meta_description'] = $data['meta_description'];

        // Update
        $blog_to_update->update($blog);

        Session::flash('status', 'Your blog has been successfully updated');
        return redirect()->route('madmin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Blog::findOrFail($id);
        $category->delete();
        Session::flash('status', 'Your Blog has been sucessfully deleted!');
        return redirect()->route('madmin.blogs.index');
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
        return Blog::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}
