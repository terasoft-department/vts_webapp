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

         // Handle search and filtering logic here
         $vehicles = Vehicle::with('customer')->get();
         $customers = Customer::all(); // Ensure you have a Customer model and data


         $query = Vehicle::query();

         session([
             'search' => $request->search,
             'customer_id' => $request->customer_id,
             'from_date' => $request->from_date,
             'to_date' => $request->to_date
         ]);

         if ($request->search) {
             $query->where('vehicle_name', 'like', '%' . $request->search . '%')
                   ->orWhere('plate_number', 'like', '%' . $request->search . '%');
         }

         if ($request->customer_id) {
             $query->where('customer_id', $request->customer_id);
         }

         if ($request->from_date && $request->to_date) {
             $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
         }

         $vehicles = $query->get();
         $customers = Customer::all();  // Fetching all customers here

         // Fetch customers for the filter dropdown
         $customers = Customer::all();

         // Basic vehicle query
         $vehicles = Vehicle::with('customer');

         // Apply search filter
         if ($request->filled('search')) {
             $vehicles = $vehicles->where('vehicle_name', 'like', '%' . $request->search . '%')
                                 ->orWhere('plate_number', 'like', '%' . $request->search . '%');
         }

         // Apply customer filter
         if ($request->filled('customer_id')) {
             $vehicles = $vehicles->where('customer_id', $request->customer_id);
         }

         // Apply date range filter
         if ($request->filled('from_date') && $request->filled('to_date')) {
             $vehicles = $vehicles->whereBetween('created_at', [$request->from_date, $request->to_date]);
         }

         // Paginate results
         $vehicles = $vehicles->paginate(10);

         return view('vehicles.index', compact('vehicles', 'customers'));
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
         $request->validate([
             'vehicle_name' => 'required|string|max:255',
             'category' => 'required|string|max:255',
             'customer_id' => 'required|exists:customers,customer_id',
             'plate_number' => 'required|string|max:255',

         ]);

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
         $request->validate([
             'vehicle_name' => 'required|string|max:255',
             'category' => 'required|string|max:255',
             'customer_id' => 'required|exists:customers,customer_id',
             'plate_number' => 'required|string|max:255',

         ]);

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
