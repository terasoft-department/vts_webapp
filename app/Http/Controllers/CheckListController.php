<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckList;

class CheckListController extends Controller
{
    public function index()
    {
        // Return the view without search results
        return view('checklists.index');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search checklists by vehicle name, category, or plate number
        $results = CheckList::where('vehicle_name', 'like', "%{$query}%")
            ->orWhere('category', 'like', "%{$query}%")
            ->orWhere('plate_number', 'like', "%{$query}%")
            ->get();

        // Return the search results to the view
        return view('checklists.index', compact('results'));
    }
}
