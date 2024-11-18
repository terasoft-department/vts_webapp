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
    // Display a listing of assignments
    public function index(Request $request)
    {
        $search = $request->query('search');
        $assignments = Assignment::when($search, function ($query, $search) {
            return $query->whereHas('customer', function ($q) use ($search) {
                $q->where('customername', 'like', "%{$search}%")
                  ->orWhere('plate_number', 'like', "%{$search}%");
            });
        })->paginate(10);

        $customers = Customer::all();
        $users = User::all();

        return view('assignments.index', compact('assignments', 'customers', 'users'));
    }

    // Show the form for creating a new assignment
    public function create()
    {
        $customers = Customer::all();
        $users = User::all();

        return view('assignments.create', compact('customers', 'users'));
    }

    // Store a newly created assignment in storage
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'customer_phone' => 'required',
            'customer_debt' => 'required|numeric',
            'plate_number' => 'required',
            'location' => 'required',
            'user_id' => 'required',
            'case_reported' => 'required',
            'assigned_by' => 'required',
        ]);

        Assignment::create($request->all());

        return redirect()->route('assignments.index')
                         ->with('success', 'Assignment created successfully.');
    }

    // Show the form for editing the specified assignment
    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        $customers = Customer::all();
        $users = User::all();

        return view('assignments.edit', compact('assignment', 'customers', 'users'));
    }

    // Update the specified assignment in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required',
            'customer_phone' => 'required',
            'customer_debt' => 'required|numeric',
            'plate_number' => 'required',
            'location' => 'required',
            'user_id' => 'required',
            'case_reported' => 'required',
            'assigned_by' => 'required',
        ]);

        $assignment = Assignment::findOrFail($id);
        $assignment->update($request->all());

        return redirect()->route('assignments.index')
                         ->with('success', 'Assignment updated successfully.');
    }

    // Remove the specified assignment from storage
    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();

        return redirect()->route('assignments.index')
                         ->with('success', 'Assignment deleted successfully.');
    }
}
