<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CustomerController extends Controller
{
    public function index()
    {
    //     Route::get('/get-customer-details', function (Request $request) {
    //     $plateNumber = $request->query('plate_number');

    //     // Find customer based on the plate number
    //     $customer = Customer::where('plate_number', $plateNumber)->first();

    //     if ($customer) {
    //         return response()->json([
    //             'success' => true,
    //             'customer' => [
    //                 'id' => $customer->id,
    //                 'phone' => $customer->phone,
    //                 'debt' => $customer->debt
    //             ]
    //         ]);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Customer not found'
    //         ]);
    //     }
    // });
        // Fetch customers with pagination (e.g., 10 customers per page)
        $customers = Customer::all();
        $customers = Customer::paginate(10);
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();

        return view('customers.index', compact('customers', 'CustomersCount', 'VehiclesCount'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $customers = Customer::where('customername', 'like', '%' . $query . '%')
                            ->orWhere('customer_phone', 'like', '%' . $query . '%')
                            ->paginate(10);

        return response()->json(['customers' => $customers]);
    }
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
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
    // public function getCustomerDetails(Request $request)
    // {
    //     $plateNumber = $request->query('plate_number');
    //     $vehicle = Vehicle::where('plate_number', $plateNumber)->first();

    //     if ($vehicle && $vehicle->customer) {
    //         return response()->json([
    //             'success' => true,
    //             'customer' => [
    //                 'id' => $vehicle->customer->customer_id,
    //                 'phone' => $vehicle->customer->customer_phone,
    //                 // 'debt' => $vehicle->customer->debt,
    //             ],
    //         ]);
    //     } else {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Customer details not found for this plate number',
    //         ]);
    //     }
    // }



    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
