<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;

class StateController extends Controller
{
    public function index()
    {
        $items = State::all();
        return view('Admin.Setting.states.index', compact('items'));
    }

    public function create()
    {
        return view('Admin.Setting.states.create');
    }

    public function store(Request $request)
    {
        State::create($request->all());
        return redirect()->route('states.index')->with('success', 'State created successfully.');
    }

    public function show(State $item)
    {
        return view('Admin.Setting.states.show', compact('item'));
    }

    public function edit(State $item)
    {
        return view('Admin.Setting.states.edit', compact('item'));
    }

    public function update(Request $request, State $item)
    {
        $item->update($request->all());
        return redirect()->route('states.index')->with('success', 'State updated successfully.');
    }

    public function destroy(State $item)
    {
        $item->delete();
        return redirect()->route('states.index')->with('success', 'State deleted successfully.');
    }
}
