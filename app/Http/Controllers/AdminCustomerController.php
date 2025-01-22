<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\InvoicePayment;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
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
        $query = $request->get('query');
        $customers = Customer::where('customername', 'like', '%' . $query . '%')
                            ->orWhere('customer_phone', 'like', '%' . $query . '%')
                            ->paginate(10);

        return response()->json(['Admincustomers' => $customers]);
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('Admincustomers.index')->with('success', 'Customer added successfully.');
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return redirect()->route('Admincustomers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('Admincustomers.index')->with('success', 'Customer deleted successfully.');
    }
}
