<?php

namespace App\Http\Controllers;

use App\Models\ReturnDevice;
use Illuminate\Http\Request;

class ReturnDeviceController extends Controller
{
    public function index()
    {
        // Fetch all return devices with the related user, customer, and vehicle information
        $returnDevices = ReturnDevice::with(['user', 'customer', 'vehicle'])->get();

        // Pass return devices to the view
        return view('return_device.index', compact('returnDevices'));
    }

    public function show($return_id)
    {
        // Fetch a return device by return_id
        $returnDevice = ReturnDevice::with(['user', 'customer', 'vehicle'])->findOrFail($return_id);

        // Return the index view with the specific return device
        return view('return_device.index', compact('returnDevices', 'returnDevice'));
    }

    public function updateStatus(Request $request, $return_id)
    {
        // Validate the incoming request
        $request->validate([
            'status' => 'required|string|max:255', // Adjust validation as necessary
        ]);

        // Fetch the return device by return_id
        $returnDevice = ReturnDevice::findOrFail($return_id);

        // Update the status attribute
        $returnDevice->status = $request->status;
        $returnDevice->save();

        // After updating, redirect back to the return_device index page with a success message
        return redirect()->route('return_device.index')->with('success', 'Status updated successfully.');
    }
}
