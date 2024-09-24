<?php
namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::all();
        return view('devices.index', compact('devices'));
    }

    public function create()
    {
        return view('devices.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'imei_number' => 'required|string|max:255',
            'category' => 'required|in:master,slave,accessories',
            'total' => 'required|integer',
        ]);

        Device::create($request->all());
        return redirect()->route('devices.index')->with('success', 'Device added successfully.');
    }

    public function edit(Device $device)
    {
        return view('devices.edit', compact('device'));
    }

    public function update(Request $request, Device $device)
    {
        $request->validate([
            'imei_number' => 'required|string|max:255',
            'category' => 'required|in:master,slave,accessories',
            'total' => 'required|integer',
        ]);

        $device->update($request->all());
        return redirect()->route('devices.index')->with('success', 'Device updated successfully.');
    }

    public function destroy(Device $device)
    {
        $device->delete();
        return redirect()->route('devices.index')->with('success', 'Device deleted successfully.');
    }
}
