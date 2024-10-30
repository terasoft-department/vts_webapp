<?php

namespace App\Http\Controllers;

use App\Models\ReturnDevice;
use Illuminate\Http\Request;

class ReturnDeviceController extends Controller
{
    public function index()
    {
        // Fetch all return devices with the related user, customer, and job card information
        $returnDevices = ReturnDevice::with(['user', 'customer', 'vehicle'])->get();

        // Pass return devices to the view
        return view('return_device.index', compact('returnDevices'));
    }

    public function update(Request $request, $id)
    {
        // Validate the status input
        $request->validate([
            'status' => 'required|string|in:approved,rejected',
        ]);

        // Update the status of the specified return device
        $returnDevice = ReturnDevice::findOrFail($id);
        $returnDevice->status = $request->input('status');
        $returnDevice->save();

        return redirect()->route('return_device.index')->with('success', 'Device return status updated successfully.');
    }
}
