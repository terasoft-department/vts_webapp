<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MonitoringVehicleController extends Controller
{
     // Display a listing of the vehicles with search and filters
     public function index(Request $request)
     {
         // Increase memory limit for this script
         ini_set('memory_limit', '2048M'); // Set to a higher value if needed

         try {
             // Build the query for filtering
             $query = Vehicle::query();

             if ($request->has('start_date') && $request->start_date) {
                 $query->whereDate('created_at', '>=', $request->start_date);
             }

             if ($request->has('end_date') && $request->end_date) {
                 $query->whereDate('created_at', '<=', $request->end_date);
             }

             // Paginate the results to avoid loading all records into memory
             $vehicles = $query->with('customer')->paginate(10000); // 10 items per page

             // Fetch all customers and counts (if needed separately)
             $customers = Customer::all();
             $customersCount = Customer::count();
             $vehiclesCount = Vehicle::count();

             return view('mcvehicles.index', [
                 'vehicles' => $vehicles,
                 'customers' => $customers,
                 'CustomersCount' => $customersCount,
                 'VehiclesCount' => $vehiclesCount,
             ]);
         } catch (\Exception $e) {
             // Log the error for debugging
             Log::error('Error fetching vehicles: ' . $e->getMessage());

             // Return an error response or view
             return response()->json([
                 'status' => 'error',
                 'message' => 'An error occurred. Please try again later.',
             ], 500);
         }
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

            return redirect()->route('mcvehicles.index')->with('success', 'Vehicle added successfully!');
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

            return redirect()->route('mcvehicles.index')->with('success', 'Vehicle updated successfully!');
        }

        // Remove the specified vehicle from the database
        public function destroy($id)
        {
            $vehicle = Vehicle::findOrFail($id);
            $vehicle->delete();

            return redirect()->route('mcvehicles.index')->with('success', 'Vehicle deleted successfully!');
        }
    }
