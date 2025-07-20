<?php

// make larvel controller
namespace App\Http\Controllers\Admin\Addon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Addon\Module;

class ModuleController extends Controller
{
    public function index(Request $request)
    {
        $modules = Module::all();
        return view('admin.addon.module.index', compact('modules'));
    }

    public function create()
    {
        return view('admin.addon.module.create');
    }

    public function store(Request $request)
    {
        $module = Module::create($request->all());
        return redirect()->route('admin.addon.module.index')->with('success', 'Module created successfully.');
    }

    public function edit(Module $module)
    {
        return view('admin.addon.module.edit', compact('module'));
    }

    public function update(Request $request, Module $module)
    {
        $module->update($request->all());
        return redirect()->route('admin.addon.module.index')->with('success', 'Module updated successfully.');
    }

    public function destroy(Module $module)
    {
        $module->delete();
        return redirect()->route('admin.addon.module.index')->with('success', 'Module deleted successfully.');
    }
}