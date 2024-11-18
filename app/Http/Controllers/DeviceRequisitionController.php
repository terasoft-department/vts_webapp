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

    public function dispatchedDeviceHistory3()
    {
        // Fetch device requisitions with dispatched IMEIs, joining with the users table to get the username
        $requisitions = DeviceRequisition::select(
                'device_requisitions.user_id',
                'device_requisitions.dispatched_imeis',
                'device_requisitions.master',
                'device_requisitions.I_button',
                'device_requisitions.buzzer',
                'device_requisitions.panick_button',
                'users.name as user_name'
            )
            ->whereNotNull('device_requisitions.dispatched_imeis')
            ->join('users', 'device_requisitions.user_id', '=', 'users.user_id')
            ->get();

        $dispatchedHistory = [];

        foreach ($requisitions as $requisition) {
            // Initialize counts and statuses for each device category
            $counts = [
                'master' => 0,
                'I_button' => 0,
                'buzzer' => 0,
                'panick_button' => 0,
            ];

            $statuses = [
                'master' => 'No-requisition',
                'I_button' => 'No-requisition',
                'buzzer' => 'No-requisition',
                'panick_button' => 'No-requisition',
            ];

            // Convert dispatched_imeis to an array (assuming it's comma-separated)
            $dispatchedImeiArray = explode(',', $requisition->dispatched_imeis);

            // Count dispatched devices for each category and set status
            foreach (['master', 'I_button', 'buzzer', 'panick_button'] as $category) {
                // Count devices of each category that have been dispatched
                $deviceCount = Device::whereIn('imei_number', $dispatchedImeiArray)
                    ->where('category', $category)
                    ->where('dispatched_status', 'dispatched')
                    ->count();

                $counts[$category] = $deviceCount; // Store the count of devices dispatched

                // If devices are dispatched for this category, set the status to "Dispatched"
                if ($deviceCount > 0) {
                    $statuses[$category] = 'Dispatched';
                }
                // If no devices are dispatched, but count > 0 in requisition, set status to "Available"
                elseif ($deviceCount == 0 && $requisition->$category > 0) {
                    $statuses[$category] = 'Available';
                }
            }

            // Add to dispatched history with the correct counts and statuses
            $dispatchedHistory[] = [
                'name' => $requisition->user_name,
                'dispatched_imeis' => $requisition->dispatched_imeis,
                'master_count' => $counts['master'],
                'I_button_count' => $counts['I_button'],
                'buzzer_count' => $counts['buzzer'],
                'panick_button_count' => $counts['panick_button'],
                'dispatched_status' => $statuses, // This is the dispatched status array
            ];
        }

        // Return the dispatched history view
        return view('dispatched_historyv2.index', compact('dispatchedHistory'));
    }



    public function dispatchedDeviceHistory()
    {
        // Fetch device requisitions with dispatched IMEIs, joining with the users table to get the username
        $requisitions = DeviceRequisition::select(
                'device_requisitions.user_id',
                'device_requisitions.dispatched_imeis',
                'device_requisitions.master',
                'device_requisitions.I_button',
                'device_requisitions.buzzer',
                'device_requisitions.panick_button',
                'users.name as user_name'
            )
            ->whereNotNull('device_requisitions.dispatched_imeis')
            ->join('users', 'device_requisitions.user_id', '=', 'users.user_id')
            ->get();

        $dispatchedHistory = [];

        foreach ($requisitions as $requisition) {
            // Initialize counts and statuses for each device category
            $counts = [
                'master' => 0,
                'I_button' => 0,
                'buzzer' => 0,
                'panick_button' => 0,
            ];

            $statuses = [
                'master' => 'No-requisition',
                'I_button' => 'No-requisition',
                'buzzer' => 'No-requisition',
                'panick_button' => 'No-requisition',
            ];

            // Convert dispatched_imeis to an array (assuming it's comma-separated)
            $dispatchedImeiArray = explode(',', $requisition->dispatched_imeis);

            // Count dispatched devices for each category and set status
            foreach (['master', 'I_button', 'buzzer', 'panick_button'] as $category) {
                // Count devices of each category that have been dispatched
                $deviceCount = Device::whereIn('imei_number', $dispatchedImeiArray)
                    ->where('category', $category)
                    ->where('dispatched_status', 'dispatched')
                    ->count();

                $counts[$category] = $deviceCount; // Store the count of devices dispatched

                // If devices are dispatched for this category, set the status to "Dispatched"
                if ($deviceCount > 0) {
                    $statuses[$category] = 'Dispatched';
                }
                // If no devices are dispatched, but count > 0 in requisition, set status to "Available"
                elseif ($deviceCount == 0 && $requisition->$category > 0) {
                    $statuses[$category] = 'Available';
                }
            }

            // Add to dispatched history with the correct counts and statuses
            $dispatchedHistory[] = [
                'name' => $requisition->user_name,
                'dispatched_imeis' => $requisition->dispatched_imeis,
                'master_count' => $counts['master'],
                'I_button_count' => $counts['I_button'],
                'buzzer_count' => $counts['buzzer'],
                'panick_button_count' => $counts['panick_button'],
                'dispatched_status' => $statuses, // This is the dispatched status array
            ];
        }

        // Return the dispatched history view
        return view('dispatched_historyv2.index', compact('dispatchedHistory'));
    }




    public function dispatchedDeviceHistory1()
    {
        // Fetch device requisitions with dispatched IMEIs, joining with the users table to get the username
        $requisitions = DeviceRequisition::select(
                'device_requisitions.user_id',
                'device_requisitions.dispatched_imeis',
                'device_requisitions.master',
                'device_requisitions.I_button',
                'device_requisitions.buzzer',
                'device_requisitions.panick_button',
                'users.name as user_name'
            )
            ->whereNotNull('device_requisitions.dispatched_imeis')
            ->join('users', 'device_requisitions.user_id', '=', 'users.user_id')
            ->get();

        $dispatchedHistory = [];

        foreach ($requisitions as $requisition) {
            // Initialize counts and statuses for each device category
            $counts = [
                'master' => 0,
                'I_button' => 0,
                'buzzer' => 0,
                'panick_button' => 0,
            ];

            $statuses = [
                'master' => 'No-requisition',
                'I_button' => 'No-requisition',
                'buzzer' => 'No-requisition',
                'panick_button' => 'No-requisition',
            ];

            // Convert dispatched_imeis to an array (assuming it's comma-separated)
            $dispatchedImeiArray = explode(',', $requisition->dispatched_imeis);

            // Count dispatched devices for each category and set status
            foreach (['master', 'I_button', 'buzzer', 'panick_button'] as $category) {
                // Count devices of each category that have been dispatched
                $deviceCount = Device::whereIn('imei_number', $dispatchedImeiArray)
                    ->where('category', $category)
                    ->where('dispatched_status', 'dispatched')
                    ->count();

                $counts[$category] = $deviceCount; // Store the count of devices dispatched

                // If devices are dispatched for this category, set the status to "Dispatched"
                if ($deviceCount > 0) {
                    $statuses[$category] = 'Dispatched';
                }
                // If no devices are dispatched, but count > 0 in requisition, set status to "Available"
                elseif ($deviceCount == 0 && $requisition->$category > 0) {
                    $statuses[$category] = 'Available';
                }
            }

            // Add to dispatched history with the correct counts and statuses
            $dispatchedHistory[] = [
                'name' => $requisition->user_name,
                'dispatched_imeis' => $requisition->dispatched_imeis,
                'master_count' => $counts['master'],
                'I_button_count' => $counts['I_button'],
                'buzzer_count' => $counts['buzzer'],
                'panick_button_count' => $counts['panick_button'],
                'dispatched_status' => $statuses, // This is the dispatched status array
            ];
        }

        // Return the dispatched history view
        return view('dispatched_historyv1.index', compact('dispatchedHistory'));
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

        // Initialize an array to store dispatched IMEI numbers
        $dispatchedImeiNumbers = [];

        // Fetch the already dispatched IMEIs for this requisition
        $dispatchedImeiList = explode(',', $requisition->dispatched_imeis ?? ''); // Fetch already dispatched IMEIs

        // Iterate over the device categories in the requisition
        foreach ($deviceMapping as $requisitionAttr => $category) {
            $quantityNeeded = $requisition->$requisitionAttr;

            // Skip if quantityNeeded is less than or equal to 0
            if ($quantityNeeded <= 0) {
                $dispatchMessages[] = "'$category' cannot be dispatched because the quantity requested is 0 or negative.";
                continue;
            }

            // Log the number of devices requested
            Log::info("Requisition for $category devices: $quantityNeeded requested.");

            // Check if the device category has already been fully dispatched
            $alreadyDispatched = 0;
            foreach ($dispatchedImeiList as $imei) {
                $device = Device::where('imei_number', $imei)->first();
                if ($device && $device->category == $category) {
                    $alreadyDispatched++;
                }
            }

            // If enough devices of this category have been dispatched already, skip dispatching again
            if ($alreadyDispatched >= $quantityNeeded) {
                $dispatchMessages[] = "Cannot dispatch more '$category' devices. All requested devices have already been dispatched.";
                continue;  // Skip dispatching this category
            }

            // Get all devices that are available (unmarked or not dispatched yet) or have been returned and marked as 'available'
            $availableDevices = Device::where('category', $category)
                ->where('dispatched_status', 'available') // Only consider devices that have been returned or are available for dispatch
                ->orderBy('device_id', 'asc') // Ensure correct order, use 'device_id' or another unique column
                ->get();

            // Log the available devices found
            Log::info("Available devices for category $category: " . $availableDevices->count());

            // Check if there are enough available devices
            if ($availableDevices->count() < ($quantityNeeded - $alreadyDispatched)) {
                // Not enough devices available for this category
                $dispatchMessages[] = "Not enough '$category' devices available for dispatch. Only {$availableDevices->count()} available.";
                continue;  // Skip dispatching this category if not enough devices
            }

            // If there are enough devices, mark them as dispatched
            $devicesToDispatch = $availableDevices->take($quantityNeeded - $alreadyDispatched);  // Select the exact number of devices needed

            foreach ($devicesToDispatch as $device) {
                // Check if the device has already been dispatched (based on IMEI) in any other requisition
                $existingDispatchedRequisition = DeviceRequisition::whereRaw("FIND_IN_SET(?, dispatched_imeis)", [$device->imei_number])->first();

                if ($existingDispatchedRequisition) {
                    // If this device has already been dispatched, skip it and add a message
                    $dispatchMessages[] = "Device with IMEI {$device->imei_number} has already been dispatched to another requisition and cannot be dispatched again.";
                    continue; // Skip dispatching this device
                }

                // Mark each device as dispatched
                $device->dispatched_status = 'dispatched';
                if ($device->save()) {
                    Log::info("Device with device_id {$device->device_id} marked as dispatched.");

                    // Add the IMEI number to the dispatched IMEI array
                    $dispatchedImeiNumbers[] = $device->imei_number;

                    // If dispatched_imeis is empty, update the requisition's dispatched_imeis field
                    if (empty($requisition->dispatched_imeis)) {
                        $requisition->dispatched_imeis = $device->imei_number; // Initialize the dispatched_imeis field with the first IMEI number
                    } else {
                        $requisition->dispatched_imeis .= ',' . $device->imei_number; // Append the new IMEI number
                    }
                } else {
                    Log::error("Failed to save device {$device->device_id}.");
                }
            }

            // Add success message for the dispatched devices
            $successMessages[] = "$category devices dispatched successfully. Dispatched: {$devicesToDispatch->count()} of " . ($quantityNeeded - $alreadyDispatched) . ".";
        }

        // Save the dispatched IMEI numbers to the requisition (if there were any dispatched devices)
        if (!empty($dispatchedImeiNumbers)) {
            $requisition->dispatched_imeis = implode(',', $dispatchedImeiNumbers); // Store as comma-separated values
            $requisition->save();

            // If any devices are dispatched, set the requisition's dispatched_status to 'dispatched'
            $requisition->dispatched_status = 'dispatched';
            $requisition->save();
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
