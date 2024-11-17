<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SDeviceController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Get all devices with a search filter (if any)
        $devices = Device::query()
            ->when($search, function ($query, $search) {
                $query->where('imei_number', 'like', "%{$search}%");
            })
            ->paginate(10); // Adjust pagination as needed

        // Count devices by category and by dispatched status
        $deviceCounts = Device::select('category', DB::raw('count(*) as total_count'))
            ->groupBy('category')
            ->pluck('total_count', 'category');

        // Count dispatched devices by category
        $dispatchedCounts = Device::select('category', DB::raw('count(*) as dispatched_count'))
            ->where('dispatched_status', 'dispatched')
            ->groupBy('category')
            ->pluck('dispatched_count', 'category');

        // Merge total and dispatched counts
        $mergedCounts = [];
        $categories = ['master', 'I_button', 'buzzer', 'panick_button'];

        foreach ($categories as $category) {
            $mergedCounts[$category] = [
                'total_count' => $deviceCounts[$category] ?? 0,
                'dispatched_count' => $dispatchedCounts[$category] ?? 0,
            ];
        }

        // Calculate the total dispatched devices for all categories
        $totalDispatched = array_sum(array_column($mergedCounts, 'dispatched_count'));
        $totalDevices = array_sum(array_column($mergedCounts, 'total_count'));

        return view('sdevices.index', compact('devices', 'mergedCounts', 'totalDispatched', 'totalDevices'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'imei_number' => 'required|string',
            'category' => 'required|in:master,I_button,buzzer,panick_button',
            // 'total' => 'required|integer',
        ]);

        Device::create($request->all());
        return redirect()->route('sdevices.index')->with('success', 'Device added successfully!');
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
        return redirect()->route('sdevices.index')->with('success', 'Device updated successfully!');
    }


    public function destroy($id)
    {
        $device = Device::findOrFail($id);
        $device->delete();
        return redirect()->route('sdevices.index')->with('success', 'Device deducted successfully!');
    }
}
