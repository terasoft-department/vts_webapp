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

    public function store(Request $request)
    {
        $request->validate([
            'imei_number' => 'required|string',
            'category' => 'required|in:master,I_button,buzzer,panick_button',
            'total' => 'required|integer',
        ]);

        Device::create($request->all());
        return redirect()->route('devices.index')->with('success', 'Device added successfully!');
    }

    public function update(Request $request, $id)
    {
        $device = Device::findOrFail($id);

        $request->validate([
            'imei_number' => 'required|string',
            'category' => 'required|in:master,I_button,buzzer,panick_button',
            'total' => 'required|integer',
        ]);

        $device->update($request->all());
        return redirect()->route('devices.index')->with('success', 'Device updated successfully!');
    }

    public function destroy($id)
    {
        $device = Device::findOrFail($id);
        $device->delete();
        return redirect()->route('devices.index')->with('success', 'Device deleted successfully!');
    }
}
