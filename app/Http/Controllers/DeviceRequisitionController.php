<?php

namespace App\Http\Controllers;

use App\Models\DeviceRequisition;
use Illuminate\Http\Request;

class DeviceRequisitionController extends Controller
{
    public function index()
    {
        $requisitions = DeviceRequisition::all();
        return view('device_requisitions.index', compact('requisitions'));
    }

    public function edit($id)
    {
        $requisition = DeviceRequisition::findOrFail($id);
        return view('device_requisitions.edit', compact('requisition'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $requisition = DeviceRequisition::findOrFail($id);
        $requisition->status = $request->status;
        $requisition->save();

        return redirect()->route('device_requisitions.index')->with('success', 'Requisition updated successfully.');
    }
}
