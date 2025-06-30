<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $items = City::all();
        return view('cities.index', compact('items'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        City::create($request->all());
        return redirect()->route('cities.index')->with('success', 'City created successfully.');
    }

    public function show(City $item)
    {
        return view('cities.show', compact('item'));
    }

    public function edit(City $item)
    {
        return view('cities.edit', compact('item'));
    }

    public function update(Request $request, City $item)
    {
        $item->update($request->all());
        return redirect()->route('cities.index')->with('success', 'City updated successfully.');
    }

    public function destroy(City $item)
    {
        $item->delete();
        return redirect()->route('cities.index')->with('success', 'City deleted successfully.');
    }
}
