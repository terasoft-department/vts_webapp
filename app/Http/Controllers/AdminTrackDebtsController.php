<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminTrackDebtsController extends Controller
{
    // Display all invoices with optional filtering and search
    public function index(Request $request)
    {
        $invoices = Invoice::query();

        // Apply date filters if provided
        if ($request->has('start_date') && $request->has('end_date')) {
            $invoices->whereBetween('invoice_date', [
                Carbon::parse($request->start_date)->startOfDay(),
                Carbon::parse($request->end_date)->endOfDay(),
            ]);
        }

        // Apply search query if provided
        if ($request->has('search')) {
            $invoices->where('invoice_number', 'like', '%' . $request->search . '%');
        }

        // Paginate the invoices to prevent loading too many records at once
        $invoices = $invoices->paginate(10000);

        return view('Admintdebts.index', compact('invoices'));
    }

    // Mark an invoice as paid
    public function pay($id)
    {
        $invoice = Invoice::findOrFail($id);
        $invoice->update(['status' => 'Paid']);

        return redirect()->back()->with('success', 'Invoice marked as paid.');
    }

    // Display form for creating a new invoice
    public function create()
    {
        return view('Admintdebts.create');
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

        return redirect()->route('Admintdebts.index')->with('success', 'Invoice created successfully.');
    }

    // Display details of a specific invoice
    public function show($id)
    {
        $invoice = Invoice::findOrFail($id);

        return view('Admintdebts.show', compact('invoice'));
    }

    // Display form for editing an existing invoice
    public function edit($id)
    {
        $invoice = Invoice::findOrFail($id);

        return view('Admintdebts.edit', compact('invoice'));
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

        return redirect()->route('Admintdebts.index')->with('success', 'Invoice updated successfully.');
    }

    // Export invoices to CSV
    public function download(Request $request)
    {
        $start_date = $request->query('start_date');
        $end_date = $request->query('end_date');

        $invoices = Invoice::query();

        if ($start_date) {
            $invoices->where('invoice_date', '>=', $start_date);
        }

        if ($end_date) {
            $invoices->where('invoice_date', '<=', $end_date);
        }

        $invoices = $invoices->get();

        $response = new StreamedResponse(function () use ($invoices) {
            $handle = fopen('php://output', 'w');
            // Add CSV header
            fputcsv($handle, ['Invoice Number', 'Invoice Date', 'Grand Total', 'Customer', 'Status']);

            // Add rows
            foreach ($invoices as $invoice) {
                fputcsv($handle, [
                    $invoice->invoice_number,
                    $invoice->invoice_date,
                    $invoice->grand_total,
                    $invoice->customername,
                    $invoice->status
                ]);
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="invoice_report.csv"');

        return $response;
    }
}
