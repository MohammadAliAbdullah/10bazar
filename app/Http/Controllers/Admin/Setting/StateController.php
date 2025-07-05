<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use Illuminate\Support\Facades\Session;

class StateController extends Controller
{
    public function index()
    {
        $states = State::all();
        return view('Admin.Setting.states.index', compact('states'));
    }

    public function create()
    {
        return view('Admin.Setting.states.create');
    }

    public function store(Request $request)
    {
        State::create($request->all());
        Session::flash('status', 'State created successfully!');
        return redirect()->route('madmin.states.index')->with('success', 'State created successfully.');
    }

    public function show(State $state)
    {
        return view('Admin.Setting.states.show', compact('state'));
    }

    public function edit(State $state)
    {
        return view('Admin.Setting.states.edit', compact('state'));
    }

    public function update(Request $request, State $state)
    {
        $state->update($request->all());
        Session::flash('status', 'State updated successfully!');
        return redirect()->route('madmin.states.index')->with('success', 'State updated successfully.');
    }

    public function destroy(State $state)
    {
        $state->delete();
        return redirect()->route('madmin.states.index')->with('success', 'State deleted successfully.');
    }
}
