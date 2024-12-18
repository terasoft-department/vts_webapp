<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{


    public function index(Request $request)
    {
        // Fetch customers with pagination (e.g., 10 customers per page)

        $customers = Customer::paginate(10000);
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();
// Query to fetch customers
$query = Customer::query();

// Filter by start date
if ($request->has('start_date') && $request->start_date) {
    $query->where('start_date', '>=', $request->start_date);
}

// Filter by end date
if ($request->has('end_date') && $request->end_date) {
    $query->where('start_date', '<=', $request->end_date);
}

// Paginate results
$customers = $query->orderBy('start_date', 'asc')->paginate(10000);

// Return view with filtered customers
        return view('Admincustomers.index', compact('customers', 'CustomersCount', 'VehiclesCount'));
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $customers = Customer::where('customername', 'like', '%' . $query . '%')
                            ->orWhere('customer_phone', 'like', '%' . $query . '%')
                            ->paginate(10000);

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
