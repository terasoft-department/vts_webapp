<?php

namespace App\Http\Controllers;

use App\Models\ReturnDevice;
use Illuminate\Http\Request;

class ReturnDeviceController extends Controller
{
    public function index()
    {
        // Retrieve all return devices from the database
        $returnDevices = ReturnDevice::all();
        $returnDevices = ReturnDevice::with('customer')->get();
        // Return a view and pass the list of return devices
        return view('return_device.index', compact('returnDevices'));
    }

    public function show($id)
    {
        // Find the return device entry by ID
        $returnDevice = ReturnDevice::findOrFail($id);

        // Return a view with the return device data
        return view('return_device.approve', compact('returnDevice'));
    }

    public function update(Request $request, $id)
    {
        // Normalize status input to lowercase
        $request->merge(['status' => strtolower($request->input('status'))]);

// Validate only the status field, since other fields are read-only
       $request->validate([
        'status' => 'required|string',
]);


        // Find the return device entry by ID
        $returnDevice = ReturnDevice::findOrFail($id);

        // Update the status field (approve or not approve)
        $returnDevice->status = $request->input('status');
        $returnDevice->save();

        return redirect()->route('return_device.index')->with('success', 'Device return status updated successfully.');
    }

}
