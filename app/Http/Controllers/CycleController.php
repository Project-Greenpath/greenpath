<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cycle;

class CycleController extends Controller
{
    public function index()
    {
        $cycles = (new Cycle)->getAllCycles();

        return view('newlisting', compact('cycles'));
    }

    public function create()
    {
        Cycle::create(request()->validate([
            'brand' => 'required',
            'rent' => 'required|numeric',
            'image' => 'file',
            'description' => 'required',
        ]));

        return redirect()->refresh()
            ->with('success', 'Cycle added successfully.');
    }


    public function show(Cycle $cycle)
    {
        return view('cycles.show', compact('cycle'));
    }

    public function edit(Cycle $cycle)
    {
        return view('cycles.edit', compact('cycle'));
    }

    public function update(Cycle $cycle)
    {
        $cycle->update(request()->validate([
            'brand' => 'required',
            'rent' => 'required|numeric',
            'image' => 'file',
            'description' => 'required',
        ]));

        return redirect('/cycles');
    }
}