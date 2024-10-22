<?php

namespace App\Http\Controllers;

use App\Models\CheckList;
use Illuminate\Http\Request;

class TrackVehicleController extends Controller
{
    public function index()
    {
        // Return the view without search results
        return view('trackvehicle.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search trackcehicle by vehicle name, category, or plate number
        $results = CheckList::where('vehicle_id', 'like', "%{$query}%")
            ->orWhere('user_id', 'like', "%{$query}%")
            ->orWhere('plate_number', 'like', "%{$query}%")
            ->get();

        // Return the search results to the view
        return view('trackvehicle.index', compact('results'));
    }
}
