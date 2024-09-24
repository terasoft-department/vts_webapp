<?php

namespace App\Http\Controllers;
use App\Models\InvoicePayment;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvoicePaymentController extends Controller
{
    public function create()
    {
        return view('invoices.create'); // Assuming you have a view for the form
    }
    /**
     * Handle form submission and store the data in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'customer_name' => 'required|string|max:255',
           'invoice_id' => [
                'required',
                'string',
                'regex:/^TTEL\/\d{4}\/\d{3}$/'
            ],
            'due_date' => 'required|date',
           'prepared_by' => 'required|string|max:255',
           'plate_number' => [
            'required',
            'string',
            'regex:/^T-\d{3}-[A-Z]{3}$/'
        ],
        'tin_number' => [
            'required',
            'string',
            'regex:/^\d{3}-\d{3}-\d{3}$/'
        ],
        'descriptions'=>'required|string|max:255',
            'num_cars' => 'required|integer',
            'periods' => 'required|integer',
            'payment_type' => 'required|in:lease,purchase',
            'unit_price' => 'required|numeric',
            'gross_value' => 'required|numeric',
            'vat_value' => 'required|numeric',
            'total_value' => 'required|numeric',
        ]);

        // // Calculate Gross Value, VAT, and Total Value
        // $grossValue = $request->num_cars * $request->periods * $request->unit_price;
        // $vatValue = $grossValue * 0.18; // 18% VAT
        // $totalValue = $grossValue + $vatValue;

        // Store the data in the database
        // InvoicePayment::create([
        //     'customer_name' => $request->customer_name,
        //     'invoice_id' => $request->invoice_id,
        //     'due_date' => $request->due_date,
        //     'prepared_by' => $request->prepared_by,
        //     'plate_number'=> $request->plate_number,
        //     'tin_number' => $request->tin_number,
        //     'descriptions'=> $request->descriptions,
        //     'num_cars' => $request->num_cars,
        //     'periods' => $request->periods,
        //     'unit_price' => $request->unit_price,
        //     'gross_value' => $grossValue,
        //     'vat_value' => $vatValue,
        //     'total_value' => $totalValue,
        // ]);

        // Redirect to a success page or back to the form
        // return redirect()->back()->with('success', 'invoice recorded successfully!');

        InvoicePayment::create($request->all());

        return redirect()->route('invoices.index')->with('success', 'Invoice payment saved successfully.');
    }
}
