<?php

namespace App\Http\Controllers;

use App\Models\JobCard;
use Illuminate\Http\Request;

class AJobCardController extends Controller
{

 // Show the job cards list view
//  public function index()
//  {
//      // Get all job cards from the database
//      $jobCards = JobCard::all();

//      // Return the view with job cards data
//      return view('Ajobcards.index', compact('jobCards'));
//  }
public function index(Request $request)
{
    $query = JobCard::query();

    // Apply search filter
    if ($request->has('search') && $request->search) {
        $query->where(function ($q) use ($request) {
            $q->where('Clientname', 'like', '%' . $request->search . '%')
              ->orWhere('ContactPerson', 'like', '%' . $request->search . '%')
              ->orWhere('VehicleRegNo', 'like', '%' . $request->search . '%');
        });
    }

    // Apply date range filter
    if ($request->has('from_date') && $request->from_date) {
        $query->whereDate('created_at', '>=', $request->from_date);
    }
    if ($request->has('to_date') && $request->to_date) {
        $query->whereDate('created_at', '<=', $request->to_date);
    }

    $jobCards = $query->get();

    return view('Ajobcards.index', compact('jobCards'));
}




 // Show the form for creating a new job card
 public function create()
 {
     // Return the view to add a new job card
     return view('Ajobcards.create');
 }

 // Store a newly created job card in the database
 public function store(Request $request)
 {
     // Validate the form data
     $validated = $request->validate([
         'clientName' => 'required|string|max:255',
         'tel' => 'required|string|max:255',
         'contactPerson' => 'required|string|max:255',
         'title' => 'required|string|max:255',
         'mobilePhone' => 'required|string|max:255',
         'vehicleRegNo' => 'required|string|max:255',
         'physicalLocation' => 'required|string|max:255',
         'deviceID' => 'required|string|max:255',
         'problemReported' => 'required|string',
         'serviceType' => 'required|string|max:255',
         'clientComment' => 'nullable|string',
     ]);

     // Create the job card using the validated data
     JobCard::create($validated);

     // Redirect back with a success message
     return redirect()->route('Ajobcards.index')->with('success', 'Job Card added successfully!');
 }

 // Show a specific job card
 // public function show($id)
 // {
 //     // Find the job card by ID
 //     $jobCard = JobCard::findOrFail($id);

 //     // Return the view with the job card data
 //     return view('jobcards.show', compact('jobCard'));
 // }

 // Show the form for editing a specific job card
 public function edit($id)
 {
     // Find the job card by ID
     $jobCard = JobCard::findOrFail($id);

     // Return the edit view with the job card data
     return view('Ajobcards.edit', compact('jobCard'));
 }

 // Update a specific job card in the database
 public function update(Request $request, $id)
 {
     // Validate the form data
     $validated = $request->validate([
         'clientName' => 'required|string|max:255',
         'tel' => 'required|string|max:255',
         'contactPerson' => 'required|string|max:255',
         'title' => 'required|string|max:255',
         'mobilePhone' => 'required|string|max:255',
         'vehicleRegNo' => 'required|string|max:255',
         'physicalLocation' => 'required|string|max:255',
         'deviceID' => 'required|string|max:255',
         'problemReported' => 'required|string',
         'serviceType' => 'required|string|max:255',
         'clientComment' => 'nullable|string',
     ]);

     // Find the job card by ID and update it
     $jobCard = JobCard::findOrFail($id);
     $jobCard->update($validated);

     // Redirect back with a success message
     return redirect()->route('Ajobcards.index')->with('success', 'Job Card updated successfully!');
 }

 // Delete a specific job card
 public function destroy($id)
 {
     // Find the job card by ID and delete it
     $jobCard = JobCard::findOrFail($id);
     $jobCard->delete();

     // Redirect back with a success message
     return redirect()->route('Ajobcards.index')->with('success', 'Job Card deleted successfully!');
 }
}
