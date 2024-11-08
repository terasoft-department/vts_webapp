<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\DeviceRequisition;
use App\Models\User;
use Illuminate\Http\Request;

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

    $request->validate([
        'status' => 'required|string|in:Pending,Approved,Rejected',
    ]);

    // Check if the status is Approved and deduct from inventory
    if ($request->status == 'Approved') {
        // Assuming you have a method to deduct device quantities
        $this->deductDevicesFromInventory($requisition);
    }

    // Update the requisition status
    $requisition->status = $request->status;
    $requisition->save();

    return redirect()->route('device_requisitions.index')->with('success', 'Requisition updated successfully.');
}

private function deductDevicesFromInventory($requisition)
{
    // Example deduction logic
    // Update your inventory here based on the requisition details
    $master = Device::where('category', $requisition->master)->first();
    if ($master) {
        $master->quantity -= 1; // Adjust this logic as needed
        $master->save();
    }

    // Repeat for I-Button, Buzzer, and Panic Button as necessary
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
