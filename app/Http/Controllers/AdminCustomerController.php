<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{

    public function index()
    {
        // Fetch all customers
        $customers = Customer::all();
        return view('Admincustomers.index', compact('customers'));
    }

    public function store(Request $request)
    {
        // Validate and create a new customer
        $request->validate([
            'customername' => 'required|string',
            'address' => 'required|string',
            'customer_phone' => 'required|string',
            'tin_number' => 'required|string',
            'email' => 'required|email|unique:customers',
            'start_date' => 'required|date',
        ]);

        Customer::create($request->all());

        return redirect()->route('Admincustomers.index')->with('success', 'Customer added successfully.');
    }
    public function create()
    {
        // Retrieve all customers from the database
        $customers = Customer::all();

        // Pass customers to the create view
        return view('Admincustomers.create', compact('customers'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update customer
        $request->validate([
            'customername' => 'required|string',
            'address' => 'required|string',
            'customer_phone' => 'required|string',
            'tin_number' => 'required|string',
            'email' => 'required|email',
            'start_date' => 'required|date',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('Admincustomers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        // Delete customer
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('Admincustomers.index')->with('success', 'Customer deleted successfully.');
    }
}
