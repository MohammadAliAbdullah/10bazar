<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\Session; // Import Session for flash messages

class CityController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('Admin.Setting.cities.index', compact('cities'));
    }

    public function create()
    {
        $states = \App\Models\State::all(); // Fetch all states for the create form
        return view('Admin.Setting.cities.create', compact('states'));
    }

    public function store(Request $request)
    {
        City::create($request->all());
        Session::flash('status', 'City created successfully!');
        return redirect()->route('madmin.cities.index')->with('success', 'City created successfully.');
    }

    public function show(City $city)
    {
        return view('Admin.Setting.cities.show', compact('city'));
    }

    public function edit(City $city)
    {
        $states = \App\Models\State::all(); // Fetch all states for the edit form
        return view('Admin.Setting.cities.edit', compact('city', 'states'));
    }

    public function update(Request $request, City $city)
    {
        $city->update($request->all());
        Session::flash('status', 'City updated successfully!');
        return redirect()->route('madmin.cities.index')->with('success', 'City updated successfully.');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('madmin.cities.index')->with('success', 'City deleted successfully.');
    }
}
