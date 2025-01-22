<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class MCustomerController extends Controller
{

    public function index()
    {
        // Fetch customers with pagination (e.g., 10 customers per page)
        $customers = Customer::all();
        $customers = Customer::paginate(10000);
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();

        return view('Mcustomers.index', compact('customers', 'CustomersCount', 'VehiclesCount'));
    }

    public function search(Request $request)
    {
        $customers = Customer::all();
        $query = $request->input('query');
        $customers = Customer::where('customername', 'like', '%' . $query . '%')
                            ->orWhere('customer_phone', 'like', '%' . $query . '%')
                            ->orWhere('address', 'like', "%{$query}%")
                            ->orWhere('start_date', 'like', "%{$query}%")
                             ->paginate(10);

        return response()->json(['Mcustomers' => $customers]);
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('Mcustomers.index')->with('success', 'Customer added successfully.');
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return redirect()->route('Mcustomers.index')->with('success', 'Customer updated successfully.');
    }


    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('Mcustomers.index')->with('success', 'Customer deleted successfully.');
    }
}
