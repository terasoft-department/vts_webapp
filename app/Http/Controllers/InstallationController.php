<?php

namespace App\Http\Controllers;

use App\Models\Installation;
use Illuminate\Http\Request;

class InstallationController extends Controller
{
    // List all installations
    public function index()
    {
        $installations = Installation::all();
        return view('installations.index', compact('installations'));
    }

    // Show the form for creating a new installation
    public function create()
    {
        return view('installations.create');
    }

    // Store a new installation
    public function store(Request $request)
    {
        $request->validate([
            'plate_number' => 'required|string',
            'imei_number' => 'required|string',
            'customername' => 'required|string',
            'user_id' => 'nullable|integer',
            'amount_paid' => 'required|numeric',
            'status' => 'nullable|string',
        ]);

        Installation::create($request->all());
        return redirect()->route('installations.index')->with('success', 'Installation created successfully.');
    }

    // Show the form for editing an installation
    public function edit(Installation $installation)
    {
        return view('installations.edit', compact('installation'));
    }

    // Update an installation
    public function update(Request $request, Installation $installation)
    {
        $request->validate([
            'plate_number' => 'required|string',
            'imei_number' => 'required|string',
            'customername' => 'required|string',
            'user_id' => 'nullable|integer',
            'amount_paid' => 'required|numeric',
            'status' => 'nullable|string',
        ]);

        $installation->update($request->all());
        return redirect()->route('installations.index')->with('success', 'Installation updated successfully.');
    }

    // Delete an installation
    public function destroy(Installation $installation)
    {
        $installation->delete();
        return redirect()->route('installations.index')->with('success', 'Installation deleted successfully.');
    }
}
