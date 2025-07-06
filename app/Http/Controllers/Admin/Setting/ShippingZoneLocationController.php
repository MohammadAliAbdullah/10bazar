<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShippingZoneLocation;
use App\Models\ShippingZone;
use App\Models\State;
use App\Models\City;

class ShippingZoneLocationController extends Controller
{
    public function index()
    {
        // order by shipping_zone_id and state_id

        $shippingZoneLocations = ShippingZoneLocation::with(['shippingZone', 'state', 'city'])
            ->orderBy('shipping_zone_id')
            ->orderBy('state_id')
            ->orderBy('is_default', 'desc')
            ->paginate(10);

        return view('Admin.Setting.shipping_zone_locations.index', compact('shippingZoneLocations'));
    }

    public function create()
    {
        $shippingZones = ShippingZone::all();
        $states = State::all();
        $cities = City::all();

        return view('Admin.Setting.shipping_zone_locations.create', compact('shippingZones', 'states', 'cities'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'shipping_zone_id' => 'required|exists:cs_shipping_zones,id',
            'state_id' => 'nullable|exists:cs_states,id',
            'city_id' => 'nullable|exists:cs_cities,id',
        ]);

        ShippingZoneLocation::create($validatedData);

        return redirect()->route('madmin.shipping-zone-locations.index')->with('success', 'Shipping Zone Location created successfully.');
    }

    public function show(ShippingZoneLocation $shippingZoneLocation)
    {
        $shippingZoneLocation->load(['shippingZone', 'state', 'city']);
        return view('Admin.Setting.shipping_zone_locations.show', compact('shippingZoneLocation'));
    }

    public function edit(ShippingZoneLocation $shippingZoneLocation)
    {
        $shippingZones = ShippingZone::all();
        $states = State::all();
        $cities = City::all();

        return view('Admin.Setting.shipping_zone_locations.edit', compact('shippingZoneLocation', 'shippingZones', 'states', 'cities'));
    }

    public function update(Request $request, ShippingZoneLocation $shippingZoneLocation)
    {
        $validatedData = $request->validate([
            'shipping_zone_id' => 'required|exists:cs_shipping_zones,id',
            'state_id' => 'nullable|exists:cs_states,id',
            'city_id' => 'nullable|exists:cs_cities,id',
            'is_default' => 'nullable',
        ]);

        $shippingZoneLocation->update($validatedData);

        return redirect()->route('madmin.shipping-zone-locations.index')->with('success', 'Shipping Zone Location updated successfully.');
    }

    public function destroy(ShippingZoneLocation $shippingZoneLocation)
    {
        $shippingZoneLocation->delete();

        return redirect()->route('madmin.shipping-zone-locations.index')->with('success', 'Shipping Zone Location deleted successfully.');
    }
}
