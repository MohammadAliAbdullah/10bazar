<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingZone;

class ShippingZoneController extends Controller
{
    public function index()
    {
        $items = ShippingZone::all();
        return view('Admin.Setting.shipping_zones.index', compact('items'));
    }

    public function create()
    {
        return view('Admin.Setting.shipping_zones.create');
    }

    public function store(Request $request)
    {
        ShippingZone::create($request->all());
        return redirect()->route('shipping_zones.index')->with('success', 'ShippingZone created successfully.');
    }

    public function show(ShippingZone $item)
    {
        return view('Admin.Setting.shipping_zones.show', compact('item'));
    }

    public function edit(ShippingZone $item)
    {
        return view('Admin.Setting.shipping_zones.edit', compact('item'));
    }

    public function update(Request $request, ShippingZone $item)
    {
        $item->update($request->all());
        return redirect()->route('shipping_zones.index')->with('success', 'ShippingZone updated successfully.');
    }

    public function destroy(ShippingZone $item)
    {
        $item->delete();
        return redirect()->route('shipping_zones.index')->with('success', 'ShippingZone deleted successfully.');
    }
}
