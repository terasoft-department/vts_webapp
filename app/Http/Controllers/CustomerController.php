<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\InvoicePayment;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        // Initialize the base query for customers
        $query = Customer::query();

        // Filter by start date if provided
        if ($request->filled('from_date')) {
            $query->whereDate('created_at', '>=', $request->input('from_date'));
        }

        // Filter by end date if provided
        if ($request->filled('to_date')) {
            $query->whereDate('created_at', '<=', $request->input('to_date'));
        }

        // Apply search filter
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($query) use ($search) {
                $query->where('customername', 'like', "%{$search}%")
                    ->orWhere('customer_phone', 'like', "%{$search}%")
                    ->orWhere('address', 'like', "%{$search}%")
                    ->orWhere('start_date', 'like', "%{$search}%");
            });
        }

        // Pagination
        $pageSize = $request->input('page_size', 10);
        $customers = $query->paginate($pageSize);

        // Counts for related data
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();

        // Retrieve related data for dropdowns or summaries
        $users = User::all();
        $vehicles = Vehicle::all();
        $InvoicePayment = InvoicePayment::all();

        // Pass the data to the view
        return view('customers.index', compact(
            'customers',
            'CustomersCount',
            'VehiclesCount',
            'users',
            'vehicles',
            'InvoicePayment'
        ));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $customers = Customer::where('customername', 'like', "%{$query}%")
                             ->orWhere('customer_phone', 'like', "%{$query}%")
                             ->orWhere('start_date', 'like', "%{$query}%")
                             ->paginate(10); // Optional: Adjust pagination limit as needed

        return response()->json(['customers' => $customers]);
    }

    public function store(Request $request)
    {
        // Validate incoming data
        $request->validate([
           'customername' => 'required|string|max:255',
            'address' => 'required|string|max:500',
          'customer_phone' => 'required|string|max:15',
          'tin_number' => 'nullable|string|max:20',
           'email' => 'nullable|email|max:255',
          'start_date' => 'required|date',
        ]);

        try {
            Customer::create($request->all());
            return redirect()->route('customers.index')->with('success', 'Customer added successfully.');
        } catch (\Exception $e) {
            Log::error("Failed to create customer: " . $e->getMessage());
            return redirect()->back()->withErrors('Failed to add customer.')->withInput();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
        'customername' => 'required|string|max:255',
        'address' => 'required|string|max:500',
        'customer_phone' => 'required|string|max:15',
        'tin_number' => 'nullable|string|max:20',
        'email' => 'nullable|email|max:255',
        'start_date' => 'required|date',
        ]);

        try {
            $customer = Customer::findOrFail($id);
            $customer->update($request->all());
            return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
        } catch (\Exception $e) {
            Log::error("Failed to update customer with ID {$id}: " . $e->getMessage());
            return redirect()->back()->withErrors('Failed to update customer.')->withInput();
        }
    }

    public function show($id)
    {
        try {
            $assignment = Customer::findOrFail($id);
            return view('customers.show', compact('customers'));
        } catch (\Exception $e) {
            return redirect()->route('customers.index')->withErrors('customers not found.');
        }
    }
    public function destroy($id)
    {
        try {
            $customer = Customer::findOrFail($id);
            $customer->delete();
            return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
        } catch (\Exception $e) {
            Log::error("Failed to delete customer with ID {$id}: " . $e->getMessage());
            return redirect()->route('customers.index')->withErrors('Failed to delete customer.');
        }
    }
}
