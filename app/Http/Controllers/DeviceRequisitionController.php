<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\DeviceRequisition;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class DeviceRequisitionController extends Controller
{
    public function index()
    {
        $device = Device::all();
        $users = User::all();
        $requisitions = DeviceRequisition::with('user')->get();
        // $requisitions = DeviceRequisition::all();
        return view('device_requisitions.index', compact('requisitions','users','device'));
    }

    public function create()
    {
        $users = User::all();
        // Return the form view to create a new requisition
        return view('device_requisitions.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'user_id'        => 'required|exists:users,id',  // Ensure the user exists
            'descriptions'   => 'required|string|max:255',
            'status'         => 'required|string',
            'dateofProvision'=> 'nullable|date',
            'master'         => 'required|boolean',
            'I_button'       => 'required|boolean',
            'buzzer'         => 'required|boolean',
            'panick_button'  => 'required|boolean',
        ]);

        // Create a new DeviceRequisition using the validated data
        DeviceRequisition::create([
            'user_id'         => $request->user_id,
            'descriptions'    => $request->descriptions,
            'status'          => $request->status,
            'dateofProvision' => $request->dateofProvision,
            'master'          => $request->master,
            'I_button'        => $request->I_button,
            'buzzer'          => $request->buzzer,
            'panick_button'   => $request->panick_button,
        ]);

        return redirect()->route('device_requisitions.index')->with('success', 'Requisition created successfully.');
    }


public function approveRequisition(Request $request, $requisition_id)
{
    // Find the requisition
    $requisition = DeviceRequisition::findOrFail($requisition_id);

    // Check stock availability for each device type
    $stockAvailable = true;
    $stockIssues = [];

    // Check master device stock
    if ($requisition->master > 0) {
        $masterDevice = Device::where('category', 'master')->first();
        if (!$masterDevice || $masterDevice->total < $requisition->master) {
            $stockAvailable = false;
            $stockIssues[] = 'Insufficient stock for Master devices.';
        }
    }

    // Check I_button device stock
    if ($requisition->I_button > 0) {
        $I_buttonDevice = Device::where('category', 'I_button')->first();
        if (!$I_buttonDevice || $I_buttonDevice->total < $requisition->I_button) {
            $stockAvailable = false;
            $stockIssues[] = 'Insufficient stock for I Button devices.';
        }
    }

    // Check buzzer device stock
    if ($requisition->buzzer > 0) {
        $buzzerDevice = Device::where('category', 'buzzer')->first();
        if (!$buzzerDevice || $buzzerDevice->total < $requisition->buzzer) {
            $stockAvailable = false;
            $stockIssues[] = 'Insufficient stock for Buzzer devices.';
        }
    }

    // Check panick_button device stock
    if ($requisition->panick_button > 0) {
        $panickButtonDevice = Device::where('category', 'panick_button')->first();
        if (!$panickButtonDevice || $panickButtonDevice->total < $requisition->panick_button) {
            $stockAvailable = false;
            $stockIssues[] = 'Insufficient stock for Panic Button devices.';
        }
    }

    if (!$stockAvailable) {
        // Notify user about stock issues
        return redirect()->back()->withErrors($stockIssues);
    }

    // Proceed to approve the requisition and deduct stock
    if ($requisition->master > 0) {
        $masterDevice->total -= $requisition->master;
        $masterDevice->save();
    }

    if ($requisition->I_button > 0) {
        $I_buttonDevice->total -= $requisition->I_button;
        $I_buttonDevice->save();
    }

    if ($requisition->buzzer > 0) {
        $buzzerDevice->total -= $requisition->buzzer;
        $buzzerDevice->save();
    }

    if ($requisition->panick_button > 0) {
        $panickButtonDevice->total -= $requisition->panick_button;
        $panickButtonDevice->save();
    }

    // Update the requisition status to approved
    $requisition->status = 'approved';
    $requisition->save();

    return redirect()->back()->with('success', 'Requisition approved and stock updated successfully.');
}


public function update(Request $request, $id)
{
    $requisition = DeviceRequisition::findOrFail($id);

    // Validate the status input
    $request->validate([
        'status' => 'required|string|in:Pending,Approved,Rejected',
    ]);

    $dispatchMessages = [];
    $successMessages = [];

    // Check if the status is Approved and mark devices as dispatched
    if ($request->status == 'Approved') {
        list($dispatchMessages, $successMessages) = $this->markDevicesAsDispatched($requisition);
    }

    // Update the requisition status
    $requisition->status = $request->status;
    $requisition->save();

    // Show success and danger alerts if there are issues or partial dispatches
    if (!empty($dispatchMessages)) {
        return redirect()->route('device_requisitions.index')
            ->with('danger', implode('<br>', $dispatchMessages))
            ->with('success', implode('<br>', $successMessages));
    }

    return redirect()->route('device_requisitions.index')->with('success', 'Requisition updated successfully.');
}

/**
 * Mark the exact quantity specified in the requisition as "dispatched" in dispatched_status.
 */
private function markDevicesAsDispatched(DeviceRequisition $requisition)
{
    // Map requisition attributes to device categories
    $deviceMapping = [
        'master' => 'master',
        'I_button' => 'I_button',
        'buzzer' => 'buzzer',
        'panick_button' => 'panick_button',
    ];

    $dispatchMessages = [];
    $successMessages = [];

    // Iterate over the device categories in the requisition
    foreach ($deviceMapping as $requisitionAttr => $category) {
        $quantityNeeded = $requisition->$requisitionAttr;

        if ($quantityNeeded > 0) {
            // Log the number of devices requested
            Log::info("Requisition for $category devices: $quantityNeeded requested.");

            // Get the number of non-dispatched devices available in this category
            $availableDevices = Device::where('category', $category)
                ->where('dispatched_status', '!=', 'dispatched')
                ->orderBy('total', 'asc') // Optionally, you can change this logic based on total available
                ->get();

            // Log the available devices found
            Log::info("Available devices for category $category: " . $availableDevices->count());

            // Check if there are enough available devices
            if ($availableDevices->count() < $quantityNeeded) {
                $dispatchMessages[] = "Not enough '$category' devices available for dispatch. Only {$availableDevices->count()} available.";
            }

            // If there are enough devices, mark them as dispatched
            $devicesToDispatch = $availableDevices->take($quantityNeeded);

            foreach ($devicesToDispatch as $device) {
                $device->dispatched_status = 'dispatched';
                $device->save();
                Log::info("Device ID {$device->id} marked as dispatched.");
            }

            // Add success message for the dispatched devices
            $successMessages[] = "$category devices dispatched successfully. Dispatched: {$devicesToDispatch->count()} of $quantityNeeded.";
        }
    }

    return [$dispatchMessages, $successMessages];
}



    public function edit($id)
    {
        $requisition = DeviceRequisition::with('user')->findOrFail($id);
        $users = User::all(); // Pass all users for editing
        // $requisition = DeviceRequisition::findOrFail($id);
        return view('device_requisitions.edit', compact('requisition'));
    }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'status' => 'required|string',
    //     ]);

    //     $requisition = DeviceRequisition::findOrFail($id);
    //     $requisition->status = $request->status;
    //     $requisition->save();

    //     return redirect()->route('device_requisitions.index')->with('success', 'Requisition updated successfully.');
    // }
}
