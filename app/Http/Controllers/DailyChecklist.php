<?php

namespace App\Http\Controllers;

use App\Models\CheckList;
use Illuminate\Http\Request;

class DailyChecklist extends Controller
{
    public function index()
    {
        $check_lists = CheckList::with('user')->get();
        // Return the view without search results
        return view('Adminchecklists.index');
    }

    // public function search(Request $request)
    // {
    //     $query = $request->input('query');

    //     // Search checklists by vehicle name, category, or plate number
    //     $results = CheckList::where('vehicle_id', 'like', "%{$query}%")
    //         ->orWhere('user_id', 'like', "%{$query}%")
    //         ->orWhere('plate_number', 'like', "%{$query}%")
    //         ->get();

    //     // Return the search results to the view
    //     return view('Adminchecklists.index', compact('results'));
    // }
    public function search(Request $request)
{
    $query = $request->input('query');
    $fromDate = $request->input('from_date');
    $toDate = $request->input('to_date');

    $results = Checklist::where(function ($q) use ($query) {
        $q->where('vehicle_name', 'like', "%$query%")
          ->orWhereHas('customer', function($q) use ($query) {
              $q->where('customername', 'like', "%$query%");
          });
    })
    ->whereBetween('check_date', [$fromDate, $toDate])
    ->get();

    return view('Adminchecklists.index', compact('results'));
}

}
