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
        // Get search term from request
        $search = $request->get('search');

        // Initialize query with optional search filter
        $customers = Customer::with(['customer', 'user', 'vehicle'])
        ->when($search, function ($query) use ($search) {
            // Apply search filter on 'case_reported', 'location', and 'customer_phone'
            $query->where('customername', 'like', "%{$search}%")
                  ->orWhere('customer_phone', 'like', "%{$search}%")
                  ->orWhere('address', 'like', "%{$search}%");
        });

            // ->paginate($request->input('page_size', 10000)); // Default to 10,000 per page
            $pageSize = $request->input('page_size', 10);
        // Count related data for stats
          // Fetch paginated results
        //   $customers = $customers->paginate($pageSize);
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();
        $customers = Customer::all();
        $users = User::all();
        $vehicles = Vehicle::all();
        $InvoicePayment = InvoicePayment::all();

        return view('customers.index', compact('customers', 'CustomersCount', 'VehiclesCount','customers', 'users', 'vehicles','InvoicePayment'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $customers = Customer::where('customername', 'like', "%{$query}%")
                             ->orWhere('customer_phone', 'like', "%{$query}%")
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
