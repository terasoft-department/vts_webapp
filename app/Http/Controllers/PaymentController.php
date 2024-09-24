<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
 use App\Exports\PaymentsExport;
 use App\Imports\PaymentsImport;
use App\Models\Customer;
use App\Models\Device;

 // Make sure to install the PDF package
class PaymentController extends Controller
{

    public function createPayment(Request $request)
    {

        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'device_id' => 'required|exists:devices,id',
            'payment_type' => 'required|in:lease,purchase',
        ]);

        // Malipo ya awali kulingana na aina ya mteja
        if ($request->payment_type === 'lease') {
            $initialPayment = 45000;
            $monthlyPayment = 45000;
        } else {
            $initialPayment = 380000;
            $monthlyPayment = 20000;
        }

        $nextDueDate = Carbon::now()->addMonths($request->payment_type === 'lease' ? 1 : 4);

        Payment::create([
            'customer_id' => $request->customer_id,
            'device_id' => $request->device_id,
            'payment_type' => $request->payment_type,
            'initial_payment' => $initialPayment,
            'monthly_payment' => $monthlyPayment,
            'next_due_date' => $nextDueDate,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Payment created successfully');
    }
    public function create()
{
    $customers = Customer::all(); // Fetch all customers
    $devices = Device::all(); // Fetch all devices
    return view('payments.create', compact('customers', 'devices'));
}
public function edit(Payment $payment)
{
    $customers = Customer::all(); // Fetch all customers
    $devices = Device::all(); // Fetch all devices
    return view('payments.edit', compact('payment', 'customers', 'devices'));
}

    public function index()
    {
        $payments = Payment::with('customer', 'device')->get();

        return view('payments.index', compact('payments'));
    }
    public function updatePaymentStatus()
    {
        $payments = Payment::where('next_due_date', '<', now())
                            ->where('status', 'pending')
                            ->get();

        foreach ($payments as $payment) {
            // If payment is overdue, mark as overdue
            $payment->update(['status' => 'overdue']);
        }

        return redirect()->back()->with('success', 'Payments updated successfully');
    }

    public function pay(Request $request, Payment $payment)
    {
        $payment->update([
            'status' => 'paid',
            'next_due_date' => Carbon::parse($payment->next_due_date)->addMonth(),
        ]);

        return redirect()->back()->with('success', 'Payment made successfully');
    }
    public function bulkImport(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:xlsx,csv',
        ]);

        Excel::import(new PaymentsImport, $request->file('file'));

        return redirect()->back()->with('success', 'Payments imported successfully');
    }

    public function export()
    {
        return Excel::download(new PaymentsExport, 'payments.xlsx');
    }

    public function exportCsv()
    {
        return Excel::download(new PaymentsExport, 'payments.csv');
    }

    public function exportExcel()
    {
        return Excel::download(new PaymentsExport, 'payments.xlsx');
    }
}
