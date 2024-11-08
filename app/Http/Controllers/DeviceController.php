<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $devices = Device::query()
            ->when($search, function ($query, $search) {
                $query->where('imei_number', 'like', "%{$search}%");
            })
            ->paginate(10); // Adjust pagination as needed
            $deviceCounts = Device::select('category', DB::raw('count(*) as count'))
            ->groupBy('category')
            ->pluck('count', 'category');
        // $devices = Device::all();
        return view('devices.index', compact('devices','deviceCounts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'imei_number' => 'required|string',
            'category' => 'required|in:master,I_button,buzzer,panick_button',
            // 'total' => 'required|integer',
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
            // 'total' => 'required|integer',
        ]);

        $device->update($request->all());
        return redirect()->route('devices.index')->with('success', 'Device updated successfully!');
    }


    public function destroy($id)
    {
        $device = Device::findOrFail($id);
        $device->delete();
        return redirect()->route('devices.index')->with('success', 'Device deducted successfully!');
    }
}
