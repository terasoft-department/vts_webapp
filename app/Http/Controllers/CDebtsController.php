<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\Request;

class CDebtsController extends Controller
{

    // Display all invoices
    public function index()
    {
        $customers = Customer::all();
        $invoices = Invoice::all();


        $query = Customer::query();


        return view('cdebts.index', compact('invoices'));
    }

    public function search(Request $request)
{
    // Initialize the query on the Invoice model
    $query = Invoice::query();

    // Filter by customer name if provided
    if ($request->filled('customername')) {
        $query->whereHas('customer', function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->input('customername') . '%');
        });
    }

    // Filter by invoice number if provided
    if ($request->filled('invoice_number')) {
        $query->where('invoice_number', 'like', '%' . $request->input('invoice_number') . '%');
    }

    // Filter by unpaid status if provided
    if ($request->input('status') == 'unpaid') {
        $query->where('status', '!=', 'Paid');
    }

    // Get the filtered invoices
    $invoices = $query->get();

    // Return the search results view with the filtered invoices
    return view('cdebts.index', compact('invoices'));
}


    // Handle payment
    public function pay($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->update(['status' => 'Paid']);
        return redirect()->back()->with('success', 'Invoice marked as paid.');
    }

    // Display form for creating a new invoice
    public function create()
    {
        return view('cdebts.create'); // Create a view for the invoice creation form
    }

    // Store a new invoice
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'invoice_number' => 'required|string|max:255',
            'invoice_date' => 'required|date',
            'grand_total' => 'required|numeric|min:0',
            'customername' => 'required|string|max:255',
        ]);

        // Create a new invoice
        Invoice::create($request->all());

        return redirect()->route('cdebts.index')->with('success', 'Invoice created successfully.');
    }

    // Display a specific invoice
    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('cdebts.show', compact('invoice')); // Create a view to display the invoice details
    }

    // Display form for editing an existing invoice
    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('cdebts.edit', compact('invoice')); // Create a view for editing the invoice
    }

    // Update an existing invoice
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'invoice_number' => 'required|string|max:255',
            'invoice_date' => 'required|date',
            'grand_total' => 'required|numeric|min:0',
            'customername' => 'required|string|max:255',
        ]);

        // Find the invoice and update it
        $invoice = Invoice::findOrFail($id);
        $invoice->update($request->all());

        return redirect()->route('cdebts.index')->with('success', 'Invoice updated successfully.');
    }
}
