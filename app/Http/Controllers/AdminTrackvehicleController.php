<?php

namespace App\Http\Controllers;

use App\Models\CheckList;
use Illuminate\Http\Request;

class AdminTrackvehicleController extends Controller
{

    public function index()
    {
        // Return the view without search results
        return view('Admintrackvehicle.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search trackvehicle by vehicle name, category, or plate number
        $results = CheckList::where('vehicle_id', 'like', "%{$query}%")
            ->orWhere('user_id', 'like', "%{$query}%")
            ->orWhere('plate_number', 'like', "%{$query}%")
            ->get();

        // Return the search results to the view
        return view('Admintrackvehicle.index', compact('results'));
    }
}
