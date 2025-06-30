<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingMethod;

class ShippingMethodController extends Controller
{
    public function index()
    {
        $shippingMethods = ShippingMethod::with('shippingZone')->get();
        // return $shippingMethods;
        return view('Admin.Setting.shipping_methods.index', compact('shippingMethods'));
    }

    public function create()
    {
        $shippingZones = \App\Models\ShippingZone::all(); // Fetch all shipping zones for the create form
        return view('Admin.Setting.shipping_methods.create', compact('shippingZones'));
    }

    public function store(Request $request)
    {
        ShippingMethod::create($request->all());
        return redirect()->route('madmin.shipping-methods.index')->with('success', 'Shipping Method created successfully.');
    }

    public function show(ShippingMethod $shippingMethod)
    {
        return view('Admin.Setting.shipping_methods.show', compact('shippingMethod'));
    }

    public function edit(ShippingMethod $shippingMethod)
    {
        $shippingZones = \App\Models\ShippingZone::all(); // Fetch all shipping zones for the edit form
        return view('Admin.Setting.shipping_methods.edit', compact('shippingMethod', 'shippingZones'));
    }

    public function update(Request $request, ShippingMethod $shippingMethod)
    {
        $shippingMethod->update($request->all());
        return redirect()->route('madmin.shipping-methods.index')->with('success', 'Shipping Method updated successfully.');
    }

    public function destroy(ShippingMethod $shippingMethod)
    {
        $shippingMethod->delete();
        return redirect()->route('madmin.shipping-methods.index')->with('success', 'Shipping Method deleted successfully.');
    }
}
