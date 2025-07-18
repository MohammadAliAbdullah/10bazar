<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SlideRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Models\Slide;

class SlidesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::paginate(10);
        return view("Admin.Slides.index", compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Slides.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SlideRequest $request)
    {
        $data = $request->all();

        // Initialize data array
        $user_data = [];

        // Handle image upload
        if ($file = $request->file('image')) {
            $imgName = preg_replace('/\s+/', '-', 'slide.' . $file->extension());
            $finalName = time() . $imgName;

            // Ensure destination path exists
            $destinationPath = public_path('uploads/slide/');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            // Resize and save image
            $img = Image::make($file->path());
            $img->fit(1110, 480)->save($destinationPath . $finalName);

            // Save relative path to DB
            $user_data['images'] = 'public/uploads/slide/' . $finalName;
        }

        // Assign other fields
        $user_data['title']  = $data['title'];
        $user_data['url']    = $data['url'];
        $user_data['orders'] = $data['orders'];
        $user_data['status'] = $data['status'];

        // Store slide
        Slide::create($user_data);

        Session::flash('status', 'Your slide has been successfully added');
        return redirect()->route('madmin.slides.index');
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
        $slide = Slide::findOrFail($id);
        return view("Admin.Slides.edit", compact("slide"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlideRequest $request, $slide)
    {
        $data = $request->all();
        $slide = Slide::findOrFail($slide);

        // Handle image upload
        if ($file = $request->file('image')) {
            // Delete old image if exists
            $oldPath = $slide->images;
            if (File::exists($oldPath)) {
                File::delete($oldPath);
            }

            // Generate unique filename
            $imgName = preg_replace('/\s+/', '-', 'slide.' . $file->extension());
            $finalName = time() . $imgName;

            // Set destination path
            $destinationPath = public_path('uploads/slide/');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            // Resize and save (exact 1110x480 with cropping)
            $img = Image::make($file->path());
            $img->fit(1110, 480)->save($destinationPath . $finalName);

            // Save full relative path in DB
            $user_data['images'] = 'public/uploads/slide/' . $finalName;
        }

        // Other fields
        $user_data['title']  = $data['title'];
        $user_data['url']    = $data['url'];
        $user_data['orders'] = $data['orders'];
        $user_data['status'] = $data['status'];

        // Update slide
        $slide->update($user_data);

        Session::flash('status', 'Your slide has been successfully updated');
        return redirect()->route('madmin.slides.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slide::findOrFail($id);
        if (file_exists($slide->images)) {
            unlink($slide->images);
        }
        $slide->delete();
        Session::flash('status', 'Your slide has been sucessfully delete!');
        return redirect()->route('madmin.slides.index');
    }
}
