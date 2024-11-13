<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\DeviceRequisition;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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







    public function dispatchedDeviceHistory()
    {
        // Fetch requisitions where dispatched_status is 'dispatched'
        $requisitions = DeviceRequisition::select([
                'device_requisitions.descriptions',
                'device_requisitions.status',
                'device_requisitions.dateofProvision',
                'device_requisitions.master',
                'device_requisitions.I_button',
                'device_requisitions.buzzer',
                'device_requisitions.panick_button',
                'device_requisitions.dispatched_status',
                'users.name as name',
                'devices.category',
                'devices.imei_number',
                'devices.dispatched_status as device_dispatched_status'
            ])
            ->join('devices', 'device_requisitions.dispatched_status', '=', 'devices.dispatched_status') // Joining on dispatched_status
            ->join('users', 'device_requisitions.user_id', '=', 'users.user_id') // Join with the users table on user_id
            ->where('device_requisitions.dispatched_status', 'dispatched') // Only fetch rows where dispatched_status is 'dispatched'
            ->get();

        // Initialize an array to store the counts for each user
        $userCounts = [];

        // Loop through requisitions to calculate counts for each user
        foreach ($requisitions as $requisition) {
            // Initialize the user if not already initialized
            if (!isset($userCounts[$requisition->name])) {
                $userCounts[$requisition->name] = [
                    'master' => 0,
                    'I_button' => 0,
                    'buzzer' => 0,
                    'panick_button' => 0,
                ];
            }

            // Count occurrences for each attribute based on the requisition
            if ($requisition->master) $userCounts[$requisition->name]['master']++;
            if ($requisition->I_button) $userCounts[$requisition->name]['I_button']++;
            if ($requisition->buzzer) $userCounts[$requisition->name]['buzzer']++;
            if ($requisition->panick_button) $userCounts[$requisition->name]['panick_button']++;
        }

        // Pass the requisitions and user counts to the view
        return view('dispatched_history.index', compact('requisitions', 'userCounts'));
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
    // Find the requisition by ID
    $requisition = DeviceRequisition::findOrFail($id);

    // Validate the status input
    $request->validate([
        'status' => 'required|string|in:Pending,Approved,Rejected',
    ]);

    // Initialize messages
    $dispatchMessages = [];
    $successMessages = [];

    // If status is Approved, attempt to dispatch the required devices
    if ($request->status == 'Approved') {
        // Map requisition attributes to device categories
        $deviceMapping = [
            'master' => 'master',
            'I_button' => 'I_button',
            'buzzer' => 'buzzer',
            'panick_button' => 'panick_button',
        ];

        // Iterate over the device categories in the requisition
        foreach ($deviceMapping as $requisitionAttr => $category) {
            $quantityNeeded = $requisition->$requisitionAttr;

            if ($quantityNeeded > 0) {
                // Log the number of devices requested
                Log::info("Requisition for $category devices: $quantityNeeded requested.");

                // Check if devices of this category are already dispatched
                $alreadyDispatchedDevices = Device::where('category', $category)
                    ->where('dispatched_status', 'dispatched')
                    ->get();

                if ($alreadyDispatchedDevices->count() > 0) {
                    // If devices have already been dispatched, prevent dispatching again
                    $dispatchMessages[] = "'$category' devices have already been dispatched and cannot be dispatched again.";
                } else {
                    // Get the number of non-dispatched devices available in this category
                    $availableDevices = Device::where('category', $category)
                        ->whereIn('dispatched_status', ['available', NULL]) // Consider devices that are either available or unmarked
                        ->orderBy('device_id', 'asc') // Ensure correct order, use 'device_id' or another unique column
                        ->get();

                    // Log the available devices found
                    Log::info("Available devices for category $category: " . $availableDevices->count());

                    // Check if there are enough available devices
                    if ($availableDevices->count() < $quantityNeeded) {
                        // Not enough devices available for this category
                        $dispatchMessages[] = "Not enough '$category' devices available for dispatch. Only {$availableDevices->count()} available.";
                    } else {
                        // If there are enough devices, mark them as dispatched
                        $devicesToDispatch = $availableDevices->take($quantityNeeded);  // Select the exact number of devices needed

                        foreach ($devicesToDispatch as $device) {
                            // Check if the device has already been dispatched
                            if ($device->dispatched_status == 'dispatched') {
                                // Skip devices that are already dispatched and add a message
                                $dispatchMessages[] = "Device with ID {$device->device_id} has already been dispatched and cannot be dispatched again.";
                            } else {
                                // Mark each device as dispatched
                                $device->dispatched_status = 'dispatched';
                                if ($device->save()) {
                                    Log::info("Device with device_id {$device->device_id} marked as dispatched.");

                                    // Update the dispatched status for the requisition as well
                                    $requisition->dispatched_status = 'dispatched'; // Set dispatched status for requisition
                                    $requisition->save(); // Save the updated requisition status

                                    // Log the update for the requisition dispatched status
                                    Log::info("Requisition ID {$requisition->requisition_id} dispatched status updated to dispatched.");
                                } else {
                                    Log::error("Failed to save device {$device->device_id}.");
                                }
                            }
                        }

                        // Add success message for the dispatched devices
                        $successMessages[] = "$category devices dispatched successfully. Dispatched: {$devicesToDispatch->count()} of $quantityNeeded.";
                    }
                }
            }
        }
    }

    // Update the requisition status
    $requisition->status = $request->status;
    if ($requisition->save()) {
        Log::info("Requisition ID {$requisition->requisition_id} status updated to {$requisition->status}.");
    } else {
        Log::error("Failed to update requisition ID {$requisition->requisition_id} status.");
    }

    // Show success and danger alerts if there are issues or partial dispatches
    if (!empty($dispatchMessages)) {
        return redirect()->route('device_requisitions.index')
            ->with('danger', implode('<br>', $dispatchMessages))
            ->with('success', implode('<br>', $successMessages));
    }

    // Redirect back with success message
    return redirect()->route('device_requisitions.index')
        ->with('success', implode('<br>', $successMessages));
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
