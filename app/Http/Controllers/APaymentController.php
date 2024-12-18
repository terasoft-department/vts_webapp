<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\paymentReport;
use Carbon\Carbon;
use Illuminate\Http\Request;

class APaymentController extends Controller
{

    public function index(Request $request)
    {
         // Initialize query to get all invoices
         $invoices = Invoice::query();

         // Apply date filters if provided
         if ($request->has('start_date') && $request->has('end_date')) {
             $invoices->whereBetween('invoice_date', [
                 Carbon::parse($request->start_date)->startOfDay(),
                 Carbon::parse($request->end_date)->endOfDay(),
             ]);
         }

         // Apply search query if provided (e.g., searching by invoice number)
         if ($request->has('search')) {
             $invoices->where('invoice_number', 'like', '%' . $request->search . '%');
         }

         // Paginate the invoices to prevent loading too many records at once
         $invoices = $invoices->paginate(10000);



        return view('Apayment_reports.index', compact('invoices'));
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
        return view('Apayment_reports.create'); // Create a view for the invoice creation form
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

        return redirect()->route('Apayment_reports.index')->with('success', 'Invoice created successfully.');
    }

    // Display a specific invoice
    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('Apayment_reports.show', compact('invoice')); // Create a view to display the invoice details
    }

    // Display form for editing an existing invoice
    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);
        return view('Apayment_reports.edit', compact('invoice')); // Create a view for editing the invoice
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
        $invoice->update(attributes: $request->all());

        return redirect()->route('Apayment_reports.index')->with('success', 'Invoice updated successfully.');
    }
}
