<?php

namespace App\Http\Controllers;

use App\Models\PaymentReport;
use Illuminate\Http\Request;

class PaymentReportController extends Controller
{
    // Display the listing of the payment reports
    public function index()
    {
        $paymentReports = PaymentReport::all(); // Fetch all payment reports
        return view('payment_reports.index', compact('paymentReports')); // Return the view
    }
    public function create()
{
    return view('payment_reports.create'); // Return the view for creating a new payment report
}


    // Store a newly created payment report in storage
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'invoice_id' => 'required|string|max:255',
            'due_date' => 'required|date',
            'prepared_by' => 'required|string|max:255',
            'plate_number' => 'required|string|max:20',
            'tin_number' => 'required|string|max:20',
            'descriptions' => 'required|string',
            'num_cars' => 'required|integer|min:1',
            'periods' => 'required|integer|min:1',
            'from' => 'required|date',
            'to' => 'required|date',
            'payment_type' => 'required|in:lease,purchase',
            'unit_price' => 'required|numeric',
            'gross_value' => 'required|numeric',
            'vat_value' => 'required|numeric',
            'total_value' => 'required|numeric',
        ]);

        PaymentReport::create($validatedData); // Save validated data

        return redirect()->route('payment_reports.index')->with('success', 'Payment report saved successfully.'); // Redirect with success message
    }
}
