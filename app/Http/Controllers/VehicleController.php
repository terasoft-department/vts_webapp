<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Customer;

class VehicleController extends Controller
{
    // Display a listing of the vehicles
    public function index(Request $request)
    {
        $query = Vehicle::query();

        if ($request->has('start_date') && $request->start_date) {
            $query->whereDate('created_at', '>=', $request->start_date);
        }

        if ($request->has('end_date') && $request->end_date) {
            $query->whereDate('created_at', '<=', $request->end_date);
        }
        $vehicles = Vehicle::with('customer')->paginate(10000); // 10 items per page
        $vehicles = $query->with('customer')->get();
        $customers = Customer::all();

        return view('vehicles.index', [
            'vehicles' => $vehicles,
            'customers' => $customers,
            'CustomersCount' => Customer::count(),
            'VehiclesCount' => Vehicle::count(),
        ]);
    }

    // Store a newly created vehicle in the database
    public function store(Request $request)
    {
        $request->validate([
            'vehicle_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'plate_number' => 'required|string|unique:vehicles,plate_number|max:10',
        ]);

        Vehicle::create($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Vehicle added successfully!');
    }

    // Update the specified vehicle in the database
    public function update(Request $request, $id)
    {
        $request->validate([
            'vehicle_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'customer_id' => 'required|exists:customers,id',
            'plate_number' => 'required|string|max:10|unique:vehicles,plate_number,' . $id,
        ]);

        $vehicle = Vehicle::findOrFail($id);
        $vehicle->update($request->all());

        return redirect()->route('vehicles.index')->with('success', 'Vehicle updated successfully!');
    }

    // Remove the specified vehicle from the database
    public function destroy($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->delete();

        return redirect()->route('vehicles.index')->with('success', 'Vehicle deleted successfully!');
    }
}
