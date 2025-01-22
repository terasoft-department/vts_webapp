<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class MonitoringVehicleController extends Controller
{
    public function index(Request $request)
    {
        // Initialize the base query with eager loading for related 'customer' data
        $vehicles = Vehicle::with('customer');

        // Get count of customers and vehicles
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();

        // Store search parameters in session for easy access
        session([
            'search' => $request->search,
            'customer_id' => $request->customer_id,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date
        ]);

        // Apply search filters
        if ($request->filled('search')) {
            $vehicles->where(function ($query) use ($request) {
                $query->where('vehicle_name', 'like', '%' . $request->search . '%')
                    ->orWhere('plate_number', 'like', '%' . $request->search . '%');
            });
        }

        // Filter by customer ID
        if ($request->filled('customer_id')) {
            $vehicles->where('customer_id', $request->customer_id);
        }

        // Apply date range filter
        if ($request->filled('from_date') && $request->filled('to_date')) {
            $vehicles->whereBetween('created_at', [$request->from_date, $request->to_date]);
        }

        // Paginate or fetch all records based on the request
        $vehicles = $request->input('show_all')
            ? $vehicles->get()
            : $vehicles->paginate($request->input('page_size', 10000)); // Default to 10 per page

        // Fetch customers for the filter dropdown
        $customers = Customer::all();

        return view('mcvehicles.index', compact('vehicles', 'customers', 'CustomersCount', 'VehiclesCount'));
    }

    // Show the form for creating a new vehicle
    public function create()
    {
        $customers = Customer::all();
        return view('mcvehicles.create', compact('customers'));
    }

    // Store a newly created vehicle in the database
    public function store(Request $request)
    {
        // Create the vehicle
        Vehicle::create($request->all());

        return redirect()->route('mcvehicles.index')->with('success', 'Vehicle created successfully.');
    }

    // Show the details of a single vehicle
    public function show(Vehicle $vehicle)
    {
        return view('mcvehicles.show', compact('vehicle'));
    }

    // Show the form for editing a vehicle
    public function edit(Vehicle $vehicle)
    {
        $customers = Customer::all();
        return view('mcvehicles.edit', compact('vehicle', 'customers'));
    }

    // Update the specified vehicle in the database
    public function update(Request $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());

        return redirect()->route('mcvehicles.index')->with('success', 'Vehicle updated successfully.');
    }

    // Remove the specified vehicle from the database
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('mcvehicles.index')->with('success', 'Vehicle deleted successfully.');
    }
}

