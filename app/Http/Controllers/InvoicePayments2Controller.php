<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\InvoicePayment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvoicePayments2Controller extends Controller
{

    public function index(Request $request)
{
    $invoicePayments = InvoicePayment::query();

    // Apply filtering if necessary
    if ($request->filter_customer) {
        $invoicePayments->where('customer_id', $request->filter_customer);
    }

    if ($request->filter_due_date) {
        $invoicePayments->whereDate('due_date', $request->filter_due_date);
    }

    // Use paginate instead of get() for pagination
    $invoicePayments = $invoicePayments->paginate(10);

    // Fetch customers for the filter dropdown
    $customers = Customer::all();

    return view('invoice_payments2.index', compact('invoicePayments', 'customers'));
}


public function create()
{
    // Generate the next invoice number
    $currentYear = Carbon::now()->year; // Get the current year
    $lastInvoice = InvoicePayment::latest()->first();
    $nextInvoiceNumber = $lastInvoice ? ((int) substr($lastInvoice->invoice_number, -3)) + 1 : 1; // Get the last 3 digits of the last invoice

    // Format the new invoice number as TTEL/YYYY/NNN
    $nextInvoiceNumberFormatted = 'TTEL/' . $currentYear . '/' . str_pad($nextInvoiceNumber, 3, '0', STR_PAD_LEFT);

    // Fetch all customers for the dropdown
    $customers = Customer::all();

    return view('invoice_payments2.create', compact('nextInvoiceNumberFormatted', 'customers'));
}
public function show($id)
{
    $invoice = InvoicePayment::findOrFail($id);
    return response()->json($invoice); // Return the invoice as JSON
}

    public function edit($id)
    {
        $invoicePayment = InvoicePayment::findOrFail($id);
        $customers = Customer::all(); // Fetch all customers
        return response()->json($invoicePayment); // Return the invoice data for editing
        // return view('invoice_payments2.edit', compact('invoicePayment', 'customers'));
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'status'=>'required',
            'customer_id' => 'required', // Ensure customer_id is provided
            'due_date' => 'required|date',
            'prepared_by' => 'required',
            'plate_number' => 'required',
            'tin_number' => 'required',
            'descriptions' => 'required',
           'num_cars' => 'required|integer|min:1',
            'periods' => 'required|integer|min:1',
            'from' => 'required|date',
            'to' => 'required|date',
            'payment_type' => 'required',
            'debt' => 'required|numeric',
            'unit_price' => 'required|numeric',
        ]);

        // Generate the next invoice number
        $currentYear = Carbon::now()->year; // Get the current year
        $lastInvoice = InvoicePayment::latest()->first();
        $nextInvoiceNumber = $lastInvoice ? ((int) substr($lastInvoice->invoice_number, -3)) + 1 : 1; // Increment last invoice number
        $nextInvoiceNumberFormatted = 'TTEL/' . $currentYear . '/' . str_pad($nextInvoiceNumber, 3, '0', STR_PAD_LEFT);

        // Calculate gross value, VAT value, and total value
        $numCars = $request->num_cars;
        $periods = $request->periods;
        $unitPrice = $request->unit_price;
        $debt = $request->debt;


        $grossValue = $numCars * $unitPrice * $periods;
        $vatValue = $grossValue * 0.18;
        $vat_Inclusive = $vatValue + $grossValue;
        $totalValue = $debt + $vat_Inclusive ;

        // Create the invoice payment entry
        InvoicePayment::create(array_merge($request->all(), [
          'invoice_number' => $nextInvoiceNumberFormatted, // Set the generated invoice number
        'gross_value' => $grossValue, // Total before VAT
        'vat_value' => $vatValue, // VAT amount
        'vat_Inclusive' => $vat_Inclusive, // Gross + VAT
        'total_value' => $totalValue, // Total value with debt included
        ]));

        return redirect()->route('invoice_payments2.index')->with('success', 'Invoice Payment created successfully.');
    }
    public function destroy($id)
{
    $invoice = InvoicePayment::findOrFail($id);
    $invoice->delete();

    return response()->json(['success' => 'Invoice deleted successfully.']);
}

}
