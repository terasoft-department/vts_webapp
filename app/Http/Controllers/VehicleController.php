<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    // Display a listing of the vehicles with search and filters
    // public function index(Request $request)
    // {
    //     // Define base query with eager loading of related 'customer'
    //     $vehicles = Vehicle::with('customer');
    //     $CustomersCount = Customer::count();
    //     $VehiclesCount = Vehicle::count();
    //     // Store search parameters in session
    //     session([
    //         'search' => $request->search,
    //         'customer_id' => $request->customer_id,
    //         'from_date' => $request->from_date,
    //         'to_date' => $request->to_date
    //     ]);

    //     // Apply search filter
    //     if ($request->filled('search')) {
    //         $vehicles = $vehicles->where(function ($query) use ($request) {
    //             $query->where('vehicle_name', 'like', '%' . $request->search . '%')
    //                 ->orWhere('plate_number', 'like', '%' . $request->search . '%');
    //         });
    //     }

    //     // Apply customer filter
    //     if ($request->filled('customer_id')) {
    //         $vehicles = $vehicles->where('customer_id', $request->customer_id);
    //     }

    //     // Apply date range filter
    //     if ($request->filled('from_date') && $request->filled('to_date')) {
    //         $vehicles = $vehicles->whereBetween('created_at', [$request->from_date, $request->to_date]);
    //     }

    //     // Paginate the results to get 10 per page
    //     $vehicles = $vehicles->paginate(10);

    //     // Fetch customers for the filter dropdown
    //     $customers = Customer::all();

    //     return view('vehicles.index', compact('vehicles', 'customers','CustomersCount','VehiclesCount'));
    // }

//     public function index(Request $request)
//     {
//  // Initialize the base query with eager loading for related 'customer' data
// $vehicles = Vehicle::with('customer');

// // Get counts for customers and vehicles
// $CustomersCount = Customer::count();
// $VehiclesCount = Vehicle::count();

// // Store search parameters in session for easy access
// session([
//     'search' => $request->input('search'),
//     'customer_id' => $request->input('customer_id'),
//     'from_date' => $request->input('from_date'),
//     'to_date' => $request->input('to_date'),
// ]);

// // Apply search filters
// if ($request->filled('search')) {
//     $vehicles->where(function ($query) use ($request) {
//         $query->where('vehicle_name', 'like', '%' . $request->input('search') . '%')
//               ->orWhere('plate_number', 'like', '%' . $request->input('search') . '%');
//     });
// }

// // Filter by customer ID
// if ($request->filled('customer_id')) {
//     $vehicles->where('customer_id', $request->input('customer_id'));
// }

// // Apply date range filter
// if ($request->filled('from_date') && $request->filled('to_date')) {
//     $vehicles->whereBetween('created_at', [$request->input('from_date'), $request->input('to_date')]);
// }

// // Determine page size and "Show All" option
// if ($request->input('show_all')) {
//     $vehicles = $vehicles->get(); // Fetch all records without pagination
// } else {
//     $pageSize = $request->input('page_size', 10000); // Default to 10 items per page if not specified
//     $vehicles = $vehicles->paginate($pageSize);
// }

// // Fetch all customers for the filter dropdown
// $customers = Customer::all();


//  return view('vehicles.index', compact('vehicles', 'customers', 'CustomersCount', 'VehiclesCount'));

// }

public function index(Request $request)
{
    ini_set('memory_limit', '256M'); // Increase memory to 256 MB
    $query = Vehicle::query();

    // Filter by start date if provided
    if ($request->has('start_date')) {
        $query->where('created_at', '>=', $request->input('start_date'));
    }

    // Filter by end date if provided
    if ($request->has('end_date')) {
        $query->where('created_at', '<=', $request->input('end_date'));
    }

    // Get all vehicles with the applied filters
    $vehicles = $query->paginate(10);

    // Retrieve all customers for the "Add Vehicle" modal
    $customers = Customer::all();

    // Count the number of customers and vehicles for the operation summary
    $CustomersCount = Customer::count();
    $VehiclesCount = Vehicle::count();

    // Pass the data to the view
    return view('vehicles.index', compact('vehicles', 'customers', 'CustomersCount', 'VehiclesCount'));
}

    // Show the form for creating a new vehicle
    public function create()
    {
        $customers = Customer::all();
        return view('vehicles.create', compact('customers'));
    }

    // Store a newly created vehicle in the database
    public function store(Request $request)
    {
        // $request->validate([
        //     'vehicle_name' => 'required|string',
        //     'category' => 'required|string',
        //     'customer_id' => 'required|exists:customers,customer_id',
        //     'plate_number' => 'required|string',
        // ]);

        Vehicle::create($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully.');
    }

    // Show the details of a single vehicle
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    // Show the form for editing a vehicle
    public function edit(Vehicle $vehicle)
    {
        $customers = Customer::all();
        return view('vehicles.edit', compact('vehicle', 'customers'));
    }

    // Update the specified vehicle
    public function update(Request $request, Vehicle $vehicle)
    {
        // $request->validate([
        //     'vehicle_name' => 'required|string',
        //     'category' => 'required|string',
        //     'customer_id' => 'required|exists:customers,customer_id',
        //     'plate_number' => 'required|string',
        // ]);

        $vehicle->update($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully.');
    }

    // Remove the specified vehicle
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
    }
}
