<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingZoneLocation;

class ShippingZoneLocationController extends Controller
{
    public function index()
    {
        $items = ShippingZoneLocation::all();
        return view('Admin.Setting.shipping_zone_locations.index', compact('items'));
    }

    public function create()
    {
        return view('Admin.Setting.shipping_zone_locations.create');
    }

    public function store(Request $request)
    {
        ShippingZoneLocation::create($request->all());
        return redirect()->route('shipping_zone_locations.index')->with('success', 'ShippingZoneLocation created successfully.');
    }

    public function show(ShippingZoneLocation $item)
    {
        return view('Admin.Setting.shipping_zone_locations.show', compact('item'));
    }

    public function edit(ShippingZoneLocation $item)
    {
        return view('Admin.Setting.shipping_zone_locations.edit', compact('item'));
    }

    public function update(Request $request, ShippingZoneLocation $item)
    {
        $item->update($request->all());
        return redirect()->route('shipping_zone_locations.index')->with('success', 'ShippingZoneLocation updated successfully.');
    }

    public function destroy(ShippingZoneLocation $item)
    {
        $item->delete();
        return redirect()->route('shipping_zone_locations.index')->with('success', 'ShippingZoneLocation deleted successfully.');
    }
}
