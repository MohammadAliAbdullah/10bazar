<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoMeta;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;
use App\Models\Page;
use App\Http\Requests\PageRequest;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Page::latest()->paginate(10); // or About::paginate(10)
        return view('Admin.pages.index', [
            'type' => 'page',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Pages.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(PageRequest $request)
    {
        $data = $request->all();
        $page = [];

        // Ensure directories exist
        $pageDir = public_path('uploads/pages/');
        if (!File::exists($pageDir)) {
            File::makeDirectory($pageDir, 0755, true);
        }

        // Handle main image & thumbnail from 'images' field
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $basename = time();

            // Thumb (200x200)
            $thumbName = $basename . '_thumb.' . $extension;
            $thumbPath = $pageDir . $thumbName;
            Image::make($file->getRealPath())->fit(200, 200)->save($thumbPath);
            $page['thumb'] = 'public/uploads/pages/' . $thumbName;

            // Main image (400x400)
            $imageName = $basename . '_main.' . $extension;
            $imagePath = $pageDir . $imageName;
            Image::make($file->getRealPath())->fit(400, 400)->save($imagePath);
            $page['images'] = 'public/uploads/pages/' . $imageName;
        }

        // Handle background image
        if ($request->hasFile('background')) {
            $file = $request->file('background');
            $extension = $file->getClientOriginalExtension();
            $bgName = time() . '_bg.' . $extension;
            $bgPath = public_path('uploads/pages/' . $bgName);

            Image::make($file->getRealPath())->fit(1300, 300)->save($bgPath);
            $page['background'] = 'public/uploads/pages/' . $bgName;
        }

        // Other fields
        $page['title']   = $data['title'];
        $page['slug']    = $this->createSlug($data['title']);
        $page['status']  = $data['status'];
        $page['content'] = $data['content'];

        // SEO
        $page['meta_title']       = $data['meta_title'];
        $page['meta_keyword']     = $data['meta_keyword'];
        $page['meta_description'] = $data['meta_description'];

        // Save
        Page::create($page);
        Session::flash('status', 'Your page has been successfully added');
        return redirect()->route('madmin.pages.index');
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
        $page = Page::findOrFail($id);
        return view("Admin.Pages.edit", compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(PageRequest $request, $id)
    {
        $data = $request->all();
        $page_to_update = Page::findOrFail($id);

        $page = [];

        // Title and slug logic
        $page['title'] = $data['title'];
        $page['slug'] = ($data['title'] === $page_to_update->title)
            ? $page_to_update->slug
            : $this->createSlug($data['title']);

        $page['status'] = $data['status'];
        $page['content'] = $data['content'];

        // Ensure upload path exists
        $uploadPath = public_path('uploads/pages/');
        if (!File::exists($uploadPath)) {
            File::makeDirectory($uploadPath, 0755, true);
        }

        // Handle image and thumb
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $extension = $file->getClientOriginalExtension();
            $basename = time();

            // Optional: Delete old images
            if ($page_to_update->thumb && File::exists($page_to_update->thumb)) {
                File::delete(public_path($page_to_update->thumb));
            }
            if ($page_to_update->images && File::exists($page_to_update->images)) {
                File::delete($page_to_update->images);
            }

            // Create and save thumb
            $thumbName = $basename . '_thumb.' . $extension;
            $thumbImage = Image::make($file->getRealPath())->fit(300, 300);
            $thumbImage->save($uploadPath . $thumbName);
            $page['thumb'] = 'public/uploads/pages/' . $thumbName;

            // Create and save main image
            $imageName = $basename . '_main.' . $extension;
            $mainImage = Image::make($file->getRealPath())->fit(400, 400);
            $mainImage->save($uploadPath . $imageName);
            $page['images'] = 'public/uploads/pages/' . $imageName;
        }

        // Handle background image
        if ($request->hasFile('background')) {
            $file = $request->file('background');
            $extension = $file->getClientOriginalExtension();
            $bgName = time() . '_bg.' . $extension;

            // Optional: Delete old background
            if ($page_to_update->background && File::exists($page_to_update->background)) {
                File::delete($page_to_update->background);
            }

            $bgImage = Image::make($file->getRealPath())->fit(1300, 300);
            $bgImage->save($uploadPath . $bgName);
            $page['background'] = 'public/uploads/pages/' . $bgName;
        }

        // SEO Fields
        $page['meta_title']       = $data['meta_title'];
        $page['meta_keyword']     = $data['meta_keyword'];
        $page['meta_description'] = $data['meta_description'];

        // Update page
        $page_to_update->update($page);

        Session::flash('status', 'Your page has been successfully updated');
        return redirect()->route('madmin.pages.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
        return Page::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}
