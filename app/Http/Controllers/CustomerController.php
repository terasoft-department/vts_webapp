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
    

    public function index()
    {
        // Fetch customers with pagination (e.g., 10 customers per page)
        ini_set('memory_limit', '2048M'); // Increase to 2GB
        $customers = Customer::all();
        $customers = Customer::paginate(10000);
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();

        return view('customers.index', compact('customers', 'CustomersCount', 'VehiclesCount'));
    }

    public function search(Request $request)
    {
        $customers = Customer::all();
        $query = $request->input('query');
        $customers = Customer::where('customername', 'like', '%' . $query . '%')
                            ->orWhere('customer_phone', 'like', '%' . $query . '%')
                            ->orWhere('address', 'like', "%{$query}%")
                            ->orWhere('start_date', 'like', "%{$query}%")
                             ->paginate(10000);

        return response()->json(['customers' => $customers]);
    }

    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer added successfully.');
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }


    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
