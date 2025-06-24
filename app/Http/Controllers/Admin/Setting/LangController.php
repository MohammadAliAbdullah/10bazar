<?php
namespace App\Http\Controllers\Admin\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function index()
    {
        $path = resource_path('lang');
        $files = collect(File::files($path))->filter(function ($file) {
            return $file->getExtension() === 'json';
        });

        $languages = $files->map(function ($file) {
            return [
                'name' => $file->getFilename(),
                'locale' => str_replace('.json', '', $file->getFilename()),
                'size' => $file->getSize(),
                'last_modified' => $file->getMTime(),
            ];
        });

        return view('Admin.Setting.Language.index', compact('languages'));
    }

    public function edit($locale)
    {
        $file = resource_path("lang/{$locale}.json");

        if (!File::exists($file)) {
            abort(404);
        }

        $translations = json_decode(File::get($file), true);
        return view('Admin.Setting.Language.edit', compact('locale', 'translations'));
    }

    public function update(Request $request, $locale)
    {
        $data = $request->input('translations', []);
        ksort($data); // Sort keys alphabetically
        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        File::put(resource_path("lang/{$locale}.json"), $json);
          Session::flash('status','Language updated successfully!');
        //   return redirect()->back()->with('success', 'Language updated successfully!');
        return redirect()->route('madmin.lang.index')->with('success', 'Language updated successfully.');
    }
}
