<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Customer;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
 {

public function index(Request $request)
{

    $search = $request->get('search');

    // Fetching assignments with pagination and search functionality
    $assignments = Assignment::when($search, function ($query) use ($search) {
            $query->where('case_reported', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%")
                  ->orWhere('customer_phone', 'like', "%{$search}%");
        })
        ->paginate(10); // Change the number to whatever suits your needs

    // Fetching related customers and users
    $customers = Customer::all();
    $users = User::all();
    $vehicles = Vehicle::all();

    return view('assignments.index', compact('assignments', 'customers', 'users', 'vehicles'));
}


 // Display a listing of the resource


 public function store(Request $request)
    {
        $request->validate([
            'plate_number' => 'required|string|max:255',
            'customer_id' => 'required|integer|exists:customers,customer_id',
            'customer_phone' => 'required|string|max:15',
            'customer_debt' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'user_id' => 'required|string',
            'case_reported' => 'required|string',
            'attachment' => 'nullable|file|mimes:pdf|max:2048',
            'assigned_by'=> 'required|string',
            // 'status'=> 'required|string',

        ]);

        $assignment = new Assignment();
        $assignment->plate_number = $request->plate_number;
        $assignment->customer_id = $request->customer_id;
        $assignment->customer_phone = $request->customer_phone;
        $assignment->customer_debt = $request->customer_debt;
        $assignment->location = $request->location;
        $assignment->user_id = $request->user_id;
        $assignment->case_reported = $request->case_reported;
        $assignment->assigned_by = $request->assigned_by;
        // $assignment->status = $request->status;

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            if ($file->isValid()) {
                // Generate a unique file name with extension
                $fileName = time() . '-' . $file->getClientOriginalName();
                // Move the file to public/uploads directory
                $file->move(public_path('uploads'), $fileName);
                // Store the file name in the database
                $assignment->attachment = $fileName;
            }
        } else {
            $assignment->attachment = null;
        }

        $assignment->save();

        return redirect()->back()->with('success', 'Assignment registered successfully!');
    }

    public function show($id)
    {
        try {
            $assignment = Assignment::findOrFail($id);
            return view('assignments.show', compact('assignment'));
        } catch (\Exception $e) {
            return redirect()->route('assignments.index')->withErrors('Assignment not found.');
        }
    }

    public function edit($id)
    {
        try {
            $assignment = Assignment::findOrFail($id);
            $customers = Customer::all();
            return view('assignments.edit', compact('assignment', 'customers'));
        } catch (\Exception $e) {
            return redirect()->route('assignments.index')->withErrors('Assignment not found.');
        }
    }

  public function update(Request $request, $id)
{
    // Validate the request
    $request->validate([

        'plate_number'  => 'required|string|max:255',
        'customer_id' => 'required|exists:customers,customer_id',
        'customer_phone'=> 'required|string|max:15',
        'customer_debt'=> 'required|numeric',
        'location'=> 'required|string|max:255',
        'user_id'=>'required|string|max:15',
        'case_reported'=>'required|string',
        'attachment' => 'nullable|file|mimes:pdf|max:2048',
        'assigned_by'=> 'required|string',
        //  'status'=> 'required|string',
    ]);

    try {
        $assignment = Assignment::findOrFail($id);

        // Update the assignment with new data except for the attachment
        $data = $request->only([
            'plate_number',
            'customer_id',
            'customer_phone',
            'customer_debt',
            'location',
            'user_id',
            'case_reported',
            'attachment',
            'assigned_by',
            //  'status',
        ]);

        // Update the assignment
        $assignment->update($data);

        return redirect()->route('assignments.index')->with('success', 'Assignment updated successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors('Failed to update assignment.')->withInput();
    }
}
// -----------------------------------------NYONGEZA------------------------------------------------
public function getCustomerDetails(Request $request)
{
    $plateNumber = $request->query('plate_number');

    // Find the vehicle by plate number (Assuming 'Vehicle' model is available)
    $vehicle = Vehicle::where('plate_number', $plateNumber)->first();

    if ($vehicle) {
        // Fetch customer details associated with the vehicle
        $customer = Customer::find($vehicle->customer_id);
        return response()->json([
            'customer_name' => $customer ? $customer->customername : 'Unknown',
            'customer_phone' => $customer ? $customer->phone : 'Unknown',
        ]);
    }

    return response()->json(null);
}
// -----------------------------------------NYONGEZA------------------------------------------------

    public function destroy($id)
    {
        try {
            $assignment = Assignment::findOrFail($id);
            // Delete attachment file if it exists
            if ($assignment->attachment) {
                Storage::disk('public')->delete($assignment->attachment);
            }
            $assignment->delete();
            return redirect()->route('assignments.index')->with('success', 'Assignment deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('assignments.index')->withErrors('Failed to delete assignment.');
        }
    }
}
