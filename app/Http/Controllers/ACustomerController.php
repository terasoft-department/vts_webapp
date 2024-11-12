<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class ACustomerController extends Controller
{
    public function index()
    {
        // Fetch all customers
        $customers = Customer::all();
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();
        return view('Acustomers.index', compact('customers','CustomersCount','VehiclesCount'));
    }
    // public function index(Request $request)
    // {
    //     $query = Customer::query();

    //     // Apply search filter
    //     if ($request->has('search') && !empty($request->search)) {
    //         $query->where('customername', 'like', '%' . $request->search . '%')
    //               ->orWhere('tin_number', 'like', '%' . $request->search . '%');
    //     }

    //     // Apply date filters
    //     if ($request->has('start_date') && $request->has('end_date')) {
    //         $query->whereBetween('start_date', [$request->start_date, $request->end_date]);
    //     }

    //     $customers = $query->paginate(10); // Adjust pagination as needed

    //     if ($request->ajax()) {
    //         return view('customers.partials.customer_rows', compact('customers'))->render();
    //     }

    //     return view('customers.index', compact('customers'));
    // }

    public function store(Request $request)
    {
        // // Validate and create a new customer
        // $request->validate([
        //     'customername' => 'required|string',
        //     'address' => 'required|string',
        //     'customer_phone' => 'required|string',
        //     'tin_number' => 'required|string',
        //     'email' => 'required|email|unique:customers',
        //     'start_date' => 'required|date',
        // ]);

        Customer::create($request->all());

        return redirect()->route('Acustomers.index')->with('success', 'Customer added successfully.');
    }
    public function create()
    {
        // Retrieve all customers from the database
        $customers = Customer::all();

        // Pass customers to the create view
        return view('Acustomers.create', compact('customers'));
    }

    public function update(Request $request, $id)
    {
        // // Validate and update customer
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

        return redirect()->route('Acustomers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        // Delete customer
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('Acustomers.index')->with('success', 'Customer deleted successfully.');
    }
}

