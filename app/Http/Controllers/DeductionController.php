<?php

namespace App\Http\Controllers;

use App\Models\tdebts;
use Illuminate\Http\Request;

class DeductionController extends Controller
{
    // Index to show all debts
    public function index()
    {
        $deductions = tdebts::all(); // Fetch all debts
        return view('deductions.index', compact('deductions'));
    }

    // Store a new debt record
    public function store(Request $request)
    {
        $request->validate([
            'invoice_number' => 'required|string|max:255',
            'invoice_date' => 'required|date',
            'grand_total' => 'required|integer',
            'deduction' => 'nullable|integer',
            'customername' => 'required|string|max:255',
            'status' => 'required|in:Paid,Not Paid',
        ]);

        tdebts::create($request->all());

        return redirect()->back()->with('success', 'Debt added successfully.');
    }

    // Edit debt record
    public function edit($id)
    {
        $deductions = tdebts::findOrFail($id);
        return view('deductions.edit', compact('deductions'));
    }

    // Update an existing debt
    public function update(Request $request, $id)
    {
        $tdebt = tdebts::findOrFail($id);

        $request->validate([
            'invoice_number' => 'required|string|max:255',
            'invoice_date' => 'required|date',
            'grand_total' => 'required|integer',
            'deduction' => 'nullable|integer',
            'customername' => 'required|string|max:255',
            'status' => 'required|in:Paid,Not Paid',
        ]);

        $tdebt->update($request->all());

        return redirect()->back()->with('success', 'Debt updated successfully.');
    }

    // Delete a debt record
    public function destroy($id)
    {
        tdebts::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Debt deleted successfully.');
    }
}
