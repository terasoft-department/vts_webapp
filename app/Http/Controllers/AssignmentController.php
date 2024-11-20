<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of assignments.
     */
    public function index()
    {
        $assignments = Assignment::all();
        return view('assignments.index', compact('assignments'));
    }

    /**
     * Show the form for creating a new assignment.
     */
    public function create()
    {
        return view('assignments.create');
    }

    /**
     * Store a newly created assignment in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'plate_number' => 'nullable|string',
            'customer_id' => 'nullable|integer',
            'customer_phone' => 'nullable|string',
            'customer_debt' => 'nullable|numeric|between:0,99999999.99',
            'location' => 'nullable|string',
            'user_id' => 'nullable|string',
            'case_reported' => 'nullable|string',
            'attachment' => 'nullable|string',
            'assigned_by' => 'nullable|string',
            'status' => 'nullable|string',
            'accepted_at' => 'nullable|date',
        ]);

        Assignment::create($validatedData);

        return redirect()->route('assignments.index')->with('success', 'Assignment created successfully.');
    }

    /**
     * Display the specified assignment.
     */
    public function show(Assignment $assignment)
    {
        return view('assignments.show', compact('assignment'));
    }

    /**
     * Show the form for editing the specified assignment.
     */
    public function edit(Assignment $assignment)
    {
        return view('assignments.edit', compact('assignment'));
    }

    /**
     * Update the specified assignment in storage.
     */
    public function update(Request $request, Assignment $assignment)
    {
        $validatedData = $request->validate([
            'plate_number' => 'nullable|string',
            'customer_id' => 'nullable|integer',
            'customer_phone' => 'nullable|string',
            'customer_debt' => 'nullable|numeric|between:0,99999999.99',
            'location' => 'nullable|string',
            'user_id' => 'nullable|string',
            'case_reported' => 'nullable|string',
            'attachment' => 'nullable|string',
            'assigned_by' => 'nullable|string',
            'status' => 'nullable|string',
            'accepted_at' => 'nullable|date',
        ]);

        $assignment->update($validatedData);

        return redirect()->route('assignments.index')->with('success', 'Assignment updated successfully.');
    }

    /**
     * Remove the specified assignment from storage.
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();

        return redirect()->route('assignments.index')->with('success', 'Assignment deleted successfully.');
    }
}
