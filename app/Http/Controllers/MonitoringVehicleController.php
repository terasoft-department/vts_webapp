<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class MonitoringVehicleController extends Controller
{
    // Display a listing of the vehicles with search and filters
    public function index(Request $request)
    {
        // Define base query with eager loading of related 'customer'
        $vehicles = Vehicle::with('customer');
        $CustomersCount = Customer::count();
        $VehiclesCount = Vehicle::count();
        // Store search parameters in session
        session([
            'search' => $request->search,
            'customer_id' => $request->customer_id,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date
        ]);

        // Apply search filter
        if ($request->filled('search')) {
            $vehicles = $vehicles->where(function ($query) use ($request) {
                $query->where('vehicle_name', 'like', '%' . $request->search . '%')
                    ->orWhere('plate_number', 'like', '%' . $request->search . '%');
            });
        }

        // Apply customer filter
        if ($request->filled('customer_id')) {
            $vehicles = $vehicles->where('customer_id', $request->customer_id);
        }

        // Apply date range filter
        if ($request->filled('from_date') && $request->filled('to_date')) {
            $vehicles = $vehicles->whereBetween('created_at', [$request->from_date, $request->to_date]);
        }

        // Paginate the results to get 10 per page
        $vehicles = $vehicles->paginate(10);

        // Fetch customers for the filter dropdown
        $customers = Customer::all();

        return view('mcvehicles.index', compact('vehicles', 'customers','CustomersCount','VehiclesCount'));
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
        // $request->validate([
        //     'vehicle_name' => 'required|string',
        //     'category' => 'required|string',
        //     'customer_id' => 'required|exists:customers,customer_id',
        //     'plate_number' => 'required|string',
        // ]);

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

        return redirect()->route('mcvehicles.index')->with('success', 'Vehicle updated successfully.');
    }

    // Remove the specified vehicle
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('mcvehicles.index')->with('success', 'Vehicle deleted successfully.');
    }
}
