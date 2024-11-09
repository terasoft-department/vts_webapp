<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    // Display a listing of the vehicles with search and filters
    public function index(Request $request)
    {
        // Store search parameters in session for persistence
        session([
            'search' => $request->search,
            'customer_id' => $request->customer_id,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
        ]);

        // Define the query with eager loading of related 'customer'
        $vehicles = Vehicle::with('customer');

        // Apply search filter
        if ($request->filled('search')) {
            $vehicles->where(function ($query) use ($request) {
                $query->where('vehicle_name', 'like', '%' . $request->search . '%')
                      ->orWhere('plate_number', 'like', '%' . $request->search . '%');
            });
        }

        // Apply customer filter
        if ($request->filled('customer_id')) {
            $vehicles->where('customer_id', $request->customer_id);
        }

        // Apply date range filter
        if ($request->filled('from_date') && $request->filled('to_date')) {
            $vehicles->whereBetween('created_at', [$request->from_date, $request->to_date]);
        }

        // Paginate results
        $vehicles = $vehicles->paginate(10);

        // Fetch customers for the filter dropdown
        $customers = Customer::all();

        return view('vehicles.index', compact('vehicles', 'customers'));
    }

    public function create()
    {
        // Fetch customers for the create form dropdown
        $customers = Customer::all();
        return view('vehicles.create', compact('customers'));
    }

    public function store(Request $request)
    {
        // Validate and create a new vehicle
        $request->validate([
            'vehicle_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'plate_number' => 'required|string|max:255',
        ]);

        try {
            Vehicle::create($request->only([
                'vehicle_name', 'category', 'customer_id', 'plate_number'
            ]));

            return redirect()->route('vehicles.index')->with('success', 'Vehicle created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error creating vehicle: ' . $e->getMessage());
        }
    }

    public function show(Vehicle $vehicle)
    {
        return view('vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        // Fetch customers for the edit form dropdown
        $customers = Customer::all();
        return view('vehicles.edit', compact('vehicle', 'customers'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        // Validate and update vehicle
        $request->validate([
            'vehicle_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'plate_number' => 'required|string|max:255',
        ]);

        try {
            $vehicle->update($request->only([
                'vehicle_name', 'category', 'customer_id', 'plate_number'
            ]));

            return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error updating vehicle: ' . $e->getMessage());
        }
    }

    public function destroy(Vehicle $vehicle)
    {
        try {
            $vehicle->delete();
            return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors('Error deleting vehicle: ' . $e->getMessage());
        }
    }
}


