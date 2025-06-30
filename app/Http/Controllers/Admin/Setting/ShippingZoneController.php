<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingZone;

class ShippingZoneController extends Controller
{
    public function index()
    {
        $shippingZones = ShippingZone::all();
        return view('Admin.Setting.shipping_zones.index', compact('shippingZones'));
    }

    public function create()
    {
        return view('Admin.Setting.shipping_zones.create');
    }

    public function store(Request $request)
    {
        ShippingZone::create($request->all());
        return redirect()->route('madmin.shipping-zones.index')->with('success', 'Shipping Zone created successfully.');
    }

    public function show(ShippingZone $shippingZone)
    {
        return view('Admin.Setting.shipping_zones.show', compact('shippingZone'));
    }

    public function edit(ShippingZone $shippingZone)
    {
        return view('Admin.Setting.shipping_zones.edit', compact('shippingZone'));
    }

    public function update(Request $request, ShippingZone $shippingZone)
    {
        $shippingZone->update($request->all());
        return redirect()->route('madmin.shipping-zones.index')->with('success', 'Shipping Zone updated successfully.');
    }

    public function destroy(ShippingZone $shippingZone)
    {
        $shippingZone->delete();
        return redirect()->route('madmin.shipping-zones.index')->with('success', 'Shipping Zone deleted successfully.');
    }
}
