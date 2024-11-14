<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class MCustomerController extends Controller
{

    public function index()
    {
        // Fetch all customers
        $customers = Customer::all();
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();
        return view('Mcustomers.index', compact('customers','CustomersCount','VehiclesCount'));
    }

    public function search(Request $request)
{
    $query = $request->input('query');
    $customers = Customer::where('customername', 'like', '%' . $query . '%')
                        ->orWhere('customer_phone', 'like', '%' . $query . '%')
                        ->paginate(10); // You can also paginate search results if needed

    return response()->json(['customers' => $customers]);
}


    public function store(Request $request)
    {
        // Validate and create a new customer
        // $request->validate([
        //     'customername' => 'required|string',
        //     'address' => 'required|string',
        //     'customer_phone' => 'required|string',
        //     'tin_number' => 'required|string',
        //     'email' => 'required|email|unique:customers',
        //     'start_date' => 'required|date',
        // ]);

        Customer::create($request->all());

        return redirect()->route('Mcustomers.index')->with('success', 'Customer added successfully.');
    }
    public function create()
    {
        // Retrieve all customers from the database
        $customers = Customer::all();

        // Pass customers to the create view
        return view('invoices.create', compact('customers'));
    }

    public function update(Request $request, $id)
    {
         //Validate and update customer
        // $request->validate([
        //     'customername' => 'required|string',
        //     'address' => 'required|string',
        //     'customer_phone' => 'required|string',
        //     'tin_number' => 'required|string',
        //     'email' => 'required|email',
        //     'start_date' => 'required|date',
        // ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('Mcustomers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        // Delete customer
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('Mcustomers.index')->with('success', 'Customer deleted successfully.');
    }
}
