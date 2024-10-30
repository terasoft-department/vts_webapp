<?php

namespace App\Http\Controllers;

use App\Models\DeviceRequisition;
use Illuminate\Http\Request;

class AdminDispatchController extends Controller
{
    public function index()
    {
        $requisitions = DeviceRequisition::with('user')->get();
        return view('Admindevice_requisitions.index', compact('requisitions'));
    }

    public function create()
    {
        // Return the form view to create a new requisition
        return view('Admindevice_requisitions.create');
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

        return redirect()->route('Admindevice_requisitions.index')->with('success', 'Requisition created successfully.');
    }

    public function edit($id)
    {
        $requisition = DeviceRequisition::findOrFail($id);
        return view('Admindevice_requisitions.edit', compact('requisition'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $requisition = DeviceRequisition::findOrFail($id);
        $requisition->status = $request->status;
        $requisition->save();

        return redirect()->route('Admindevice_requisitions.index')->with('success', 'Requisition updated successfully.');
    }
}
