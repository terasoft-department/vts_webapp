<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Customer;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AAssignmentsController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all(); // Fetch all vehicles
        $users = User::where('role', 'technician')->get(); // Fetch only users with role 'technician'
        $customers = Customer::all(); // Fetch all customers
        $assignments = Assignment::all(); // Fetch all assignments
        $assignments = Assignment::paginate(10); // Adjust the number as needed
        return view('Aassignments.index', compact('customers', 'vehicles', 'assignments', 'users'));

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
            ]);

            $assignment = new Assignment();
            $assignment->plate_number = $request->plate_number;
            $assignment->customer_id = $request->customer_id;
            $assignment->customer_phone = $request->customer_phone;
            $assignment->customer_debt = $request->customer_debt;
            $assignment->location = $request->location;
            $assignment->user_id = $request->user_id;
            $assignment->case_reported = $request->case_reported;

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
                return view('Aassignments.show', compact('assignment'));
            } catch (\Exception $e) {
                return redirect()->route('Aassignments.index')->withErrors('Assignment not found.');
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
            'location'=> 'requed|string|max:255',
            'user_id'=>'required|string|max:15',
            'case_reported'=>'required|string|max:15',
            'attachment'=>'required|string|max:15',
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
            ]);

            // Update the assignment
            $assignment->update($data);

            return redirect()->route('Aassignments.index')->with('success', 'Assignment updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Failed to update assignment.')->withInput();
        }
    }


        public function destroy($id)
        {
            try {
                $assignment = Assignment::findOrFail($id);
                // Delete attachment file if it exists
                if ($assignment->attachment) {
                    Storage::disk('public')->delete($assignment->attachment);
                }
                $assignment->delete();
                return redirect()->route('Aassignments.index')->with('success', 'Assignment deleted successfully.');
            } catch (\Exception $e) {
                return redirect()->route('Aassignments.index')->withErrors('Failed to delete assignment.');
            }
        }
    }