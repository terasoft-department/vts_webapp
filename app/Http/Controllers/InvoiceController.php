<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use App\Models\InvoicePayment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    // Display all invoices
    public function index(Request $request)
    {
        $query = InvoicePayment::query();

        if ($request->keyword) {
            $query->where('invoice_number', 'LIKE', "%{$request->keyword}%")
                  ->orWhereHas('customer', function($q) use ($request) {
                      $q->where('customername', 'LIKE', "%{$request->keyword}%");
                  });
        }

        if ($request->date) {
            $query->whereDate('due_date', $request->date);
        }

        if ($request->customer) {
            $query->where('customer_id', $request->customer);
        }

        $invoicePayments = $query->get();


        $customers = Customer::all();
        $invoices = Invoice::all();
        $invoicePayments = InvoicePayment::all();

        $query = Customer::query();

        return view('invoices.index', compact('invoices'));
    }

    // Handle payment
    public function pay($invoice_id)
    {
        $invoice = Invoice::findOrFail($invoice_id);
        $invoice->update(['status' => 'Paid']);
        return redirect()->back()->with('success', 'Invoice marked as paid.');
    }


    // Display form for creating a new invoice
    public function create()
    {
        return view('invoices.create'); // Create a view for the invoice creation form
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

        return redirect()->route('invoices.index')->with('success', 'Invoice created successfully.');
    }


    public function dashboard()
    {
        $weeklyRevenue = Invoice::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
                                ->sum('grand_total');

        return view('dashboard', compact('weeklyRevenue'));
    }


    // Display a specific invoice
    public function show($invoice_id)
    {
        $invoice = Invoice::findOrFail($invoice_id);
        return view('invoices.show', compact('invoice')); // Create a view to display the invoice details
    }

    // Display form for editing an existing invoice
    public function edit($invoice_id)
    {
        $invoice = Invoice::findOrFail($invoice_id);
        return view('invoices.edit', compact('invoice')); // Create a view for editing the invoice
    }

    // Update an existing invoice
    public function update(Request $request, $invoice_id)
    {
        // Validate the incoming request
        $request->validate([
            'invoice_number' => 'required|string|max:255',
            'invoice_date' => 'required|date',
            'grand_total' => 'required|numeric|min:0',
            'customername' => 'required|string|max:255',
        ]);

        // Find the invoice and update it
        $invoice = Invoice::findOrFail($invoice_id);
        $invoice->update($request->all());

        return redirect()->route('invoices.index')->with('success', 'Invoice updated successfully.');
    }
}


