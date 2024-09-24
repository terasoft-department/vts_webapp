<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AssignmentController extends Controller
{
    // Show all assignments for admin/project managers
    public function index()
    {
        $assignments = Assignment::all();
        return view('assignments.index', compact('assignments'));
    }

    // Show assignments for a specific user (e.g. technician or monitoring officer)
    public function userAssignments()
    {
        $userId = Auth::id(); // Get the authenticated user's ID
        $assignments = Assignment::where('user_id', $userId)->get();
        return view('assignments.user_assignments', compact('assignments'));
    }

    // Show form for creating a new assignment
    public function create()
    {
        $customers = Customer::all();
        $users = User::all();
        return view('assignments.create', compact('customers', 'users'));
    }

    // Store a new assignment
    public function store(Request $request)
    {
        Log::info($request->all());
        $request->validate([
            'customer_id' => 'required|integer',
            'plate_number' => 'required|string',
            'customer_phone' => 'required|string|max:15',
            'location' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'status' => 'required|string',
        ]);

        Assignment::create($request->all());

        return redirect()->route('assignments.index')->with('success', 'Assignment created successfully.');
    }

    // Show assignment details
    public function show($id)
    {
        $assignment = Assignment::findOrFail($id);
        return view('assignments.show', compact('assignment'));
    }

    // Show form to edit an assignment
    public function edit($id)
    {
        $assignment = Assignment::findOrFail($id);
        $customers = Customer::all();
        $users = User::all();
        return view('assignments.edit', compact('assignment', 'customers', 'users'));
    }


    // Update an assignment
    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required|integer',
            'plate_number' => 'required|string',
            'customer_phone' => 'required|string|max:15',
            'location' => 'required|string|max:255',
            'user_id' => 'required|integer',
            'status' => 'required|string',
        ]);


        $assignment = Assignment::findOrFail($id);
        $assignment->update($request->all());

        return redirect()->route('assignments.index')->with('success', 'Assignment updated successfully.');
    }

    // Delete an assignment
    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();
        return redirect()->route('assignments.index')->with('success', 'Assignment deleted successfully.');
    }





}
