<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingMethod;

class ShippingMethodController extends Controller
{
    public function index()
    {
        $items = ShippingMethod::all();
        return view('Admin.Setting.shipping_methods.index', compact('items'));
    }

    public function create()
    {
        return view('Admin.Setting.shipping_methods.create');
    }

    public function store(Request $request)
    {
        ShippingMethod::create($request->all());
        return redirect()->route('shipping_methods.index')->with('success', 'ShippingMethod created successfully.');
    }

    public function show(ShippingMethod $item)
    {
        return view('Admin.Setting.shipping_methods.show', compact('item'));
    }

    public function edit(ShippingMethod $item)
    {
        return view('Admin.Setting.shipping_methods.edit', compact('item'));
    }

    public function update(Request $request, ShippingMethod $item)
    {
        $item->update($request->all());
        return redirect()->route('shipping_methods.index')->with('success', 'ShippingMethod updated successfully.');
    }

    public function destroy(ShippingMethod $item)
    {
        $item->delete();
        return redirect()->route('shipping_methods.index')->with('success', 'ShippingMethod deleted successfully.');
    }
}
