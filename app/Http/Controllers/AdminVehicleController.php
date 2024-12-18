<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class AdminVehicleController extends Controller
{
    // Display a listing of the vehicles with search and filters
    public function index(Request $request)
{
    // Initialize query for vehicles
    $query = Vehicle::query();

    // Apply date filters if provided
    if ($request->filled('start_date') && $request->filled('end_date')) {
        // Ensure the dates are formatted properly for the query (optional depending on the input format)
        $startDate = \Carbon\Carbon::parse($request->start_date)->startOfDay();
        $endDate = \Carbon\Carbon::parse($request->end_date)->endOfDay();

        // Apply the date range filter to the query
        $query->whereBetween('created_at', [$startDate, $endDate]);
    }

    // Get filtered vehicles with pagination
    $vehicles = $query->paginate(10000);

    // Get the count of customers and vehicles
    $CustomersCount = Customer::count();
    $VehiclesCount = Vehicle::count();

    // Get all customers for the dropdown in the filter modal
    $customers = Customer::all();
    // Query to fetch customers
$query = Customer::query();

// // Filter by start date
// if ($request->has('start_date') && $request->start_date) {
//     $query->where('start_date', '>=', $request->start_date);
// }

// Filter by end date
if ($request->has('end_date') && $request->end_date) {
    $query->where('start_date', '<=', $request->end_date);
}

// Paginate results
$customers = $query->orderBy('start_date', 'asc')->paginate(10000);


    return view('advehicles.index', compact('vehicles', 'customers', 'CustomersCount', 'VehiclesCount'));
}


    // Show the form for creating a new vehicle
    public function create()
    {
        $customers = Customer::all();

        return view('advehicles.create', compact('customers'));
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

        return redirect()->route('advehicles.index')->with('success', 'Vehicle created successfully.');
    }

    // Show the details of a single vehicle
    public function show(Vehicle $vehicle)
    {
        return view('advehicles.show', compact('vehicle'));
    }

    // Show the form for editing a vehicle
    public function edit(Vehicle $vehicle)
    {
        $customers = Customer::all();
        return view('advehicles.edit', compact('vehicle', 'customers'));
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

        return redirect()->route('advehicles.index')->with('success', 'Vehicle updated successfully.');
    }

    // Remove the specified vehicle
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('advehicles.index')->with('success', 'Vehicle deleted successfully.');
    }
}
