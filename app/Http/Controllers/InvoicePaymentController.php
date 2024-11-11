<?php

namespace App\Http\Controllers;

use App\Models\InvoicePayment;
use App\Models\Customer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class InvoicePaymentController extends Controller
{
    /**
     * Display a listing of the invoice payments.
     */
    public function index(Request $request)
    {
        $invoicePayments = InvoicePayment::with('customer'); // Eager load customer for optimization

        // Filter by customer and due date if provided
        if ($request->filter_customer) {
            $invoicePayments->where('customer_id', $request->filter_customer);
        }

        if ($request->filter_due_date) {
            $invoicePayments->whereDate('due_date', $request->filter_due_date);
        }

        // Paginate results for better UX
        $invoicePayments = $invoicePayments->paginate(10);

        // Fetch customers for filter dropdown
        $customers = Customer::all();

        return view('invoice_payments.index', compact('invoicePayments', 'customers'));
    }

    /**
     * Show the form for creating a new invoice payment.
     */
    public function create()
    {
        $currentYear = Carbon::now()->year;
        $lastInvoice = InvoicePayment::latest()->first();
        $nextInvoiceNumber = $lastInvoice ? ((int) substr($lastInvoice->invoice_number, -3)) + 1 : 1;
        $nextInvoiceNumberFormatted = 'TTEL/' . $currentYear . '/' . str_pad($nextInvoiceNumber, 3, '0', STR_PAD_LEFT);

        $customers = Customer::all();

        return view('invoice_payments.create', compact('nextInvoiceNumberFormatted', 'customers'));
    }

    /**
     * Store a newly created invoice payment.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,customer_id',
            'due_date' => 'required|date',
            'prepared_by' => 'required|string',
            'plate_number' => 'required|string',
            'tin_number' => 'required|string',
            'descriptions' => 'required|string',
            'num_cars' => 'required|integer|min:1',
            'periods' => 'required|integer|min:1',
            'from' => 'required|date',
            'to' => 'required|date',
            'payment_type' => 'required|string',
            'debt' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'items.*.description' => 'required|string',
            'items.*.num_cars' => 'required|integer',
            'items.*.period' => 'required|integer',
            'items.*.from_date' => 'required|date',
            'items.*.to_date' => 'required|date',
            'items.*.payment_type' => 'required|string',
            'items.*.debt' => 'required|numeric',
            'items.*.unit_price' => 'required|numeric',
            'items.*.gross_value' => 'required|numeric',
            'items.*.vat_value' => 'required|numeric',
            'items.*.vat_inclusive' => 'required|numeric',
            'items.*.total_value' => 'required|numeric',
        ]);

        DB::beginTransaction();

        try {
            $currentYear = Carbon::now()->year;
            $lastInvoice = InvoicePayment::latest()->first();
            $nextInvoiceNumber = $lastInvoice ? ((int) substr($lastInvoice->invoice_number, -3)) + 1 : 1;
            $nextInvoiceNumberFormatted = 'TTEL/' . $currentYear . '/' . str_pad($nextInvoiceNumber, 3, '0', STR_PAD_LEFT);

            $grossValue = $request->num_cars * $request->unit_price * $request->periods;
            $vatValue = $grossValue * 0.18;
            $vatInclusive = $vatValue + $grossValue;
            $totalValue = $request->debt + $vatInclusive;

            InvoicePayment::create(array_merge($request->all(), [
                'invoice_number' => $nextInvoiceNumberFormatted,
                'gross_value' => $grossValue,
                'vat_value' => $vatValue,
                'vat_inclusive' => $vatInclusive,
                'total_value' => $totalValue,
            ]));

            DB::commit();

            return redirect()->route('invoice_payments.index')->with('success', 'Invoice Payment created successfully.');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('invoice_payments.index')->with('error', 'Failed to create Invoice Payment.');
        }
    }

    /**
     * Display the specified invoice payment.
     */
    public function show($id)
    {
        $invoice = InvoicePayment::findOrFail($id);
        return response()->json(['invoice' => $invoice], 200);
    }

    /**
     * Show the form for editing an invoice payment.
     */
    public function edit($id)
    {
        $invoicePayment = InvoicePayment::findOrFail($id);
        $customers = Customer::all();

        return view('invoice_payments.edit', compact('invoicePayment', 'customers'));
    }

    /**
     * Remove the specified invoice payment.
     */
    public function destroy($id)
    {
        $invoice = InvoicePayment::findOrFail($id);
        $invoice->delete();

        return response()->json(['success' => 'Invoice deleted successfully.'], 200);
    }
}
