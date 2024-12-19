<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Customer;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class AssignmentController extends Controller
 {

    public function index(Request $request)
    {
        // Retrieve the search term from the request
        $search = $request->get('search');

        // Initialize the query for fetching assignments
        $assignments = Assignment::with(['customer', 'user', 'vehicle']) // Eager load relationships
            ->when($search, function ($query) use ($search) {
                // Apply search filter on 'case_reported', 'location', and 'customer_phone'
                $query->where('plate_number', 'like', "%{$search}%")
                      ->orWhere('location', 'like', "%{$search}%")
                      ->orWhere('customer_phone', 'like', "%{$search}%");
            });
        // $assignments = Assignment::with(['customer', 'user', 'vehicle']) // Eager load relationships
        // ->when($search, function ($query) use ($search) {
        //     // Apply search filter on 'case_reported', 'location', and 'customer_phone'
        //     $query->where('assignment_id', 'like', "%{$search}%")
        //           ->orWhere('plate_number', 'like', "%{$search}%")
        //           ->orWhere('customer_phone', 'like', "%{$search}%");
        // })
        // ->select('assignment_id', 'plate_number', 'customer_id', 'customer_phone', 'location', 'case_reported', 'user_id', 'assigned_by', 'status', 'accepted_at', 'created_at', 'updated_at') // Select fields to be fetched
        // ->get();

    // Now you can access the attributes like so
    // foreach ($assignments as $assignment) {
    //     $plateNumber = $assignment->plate_number;
    //     $customerName = $assignment->customer ? $assignment->customer->name : null; // Assuming 'name' is the field for customer's name
    //     $customerPhone = $assignment->customer ? $assignment->customer->customer_phone : null; // Assuming 'customer_phone' is a field in Customer model
    //     echo "Plate Number: $plateNumber, Customer Name: $customerName, Customer Phone: $customerPhone\n";
    // }
        // Determine page size, default to 10 if not specified
        $pageSize = $request->input('page_size', 10000);

        // Fetch paginated results
        $assignments = $assignments->paginate($pageSize);
        $assignments = Assignment::orderBy('created_at', 'desc')->paginate(10000);


        // Fetch related data for the filter dropdowns
        $customers = Customer::all();
        $users = User::all();
        $vehicles = Vehicle::all();

        // Return the view with the data
        return view('assignments.index', compact('assignments', 'customers', 'users', 'vehicles'));
    }



 // Display a listing of the resource


 public function store(Request $request)
{
    // Validate the request
    $validator = Validator::make($request->all(), [
        'plate_number' => 'required|string|max:255',
        'customer_id' => 'required|integer|exists:customers,customer_id',
        'customer_phone' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'user_id' => 'required|integer|exists:users,user_id',  // Ensure user_id exists in users table
        'case_reported' => 'required|string',
        'attachment' => 'nullable|file|mimes:pdf|max:2048',
        'assigned_by' => 'required|string',
    ]);

    // Return validation errors if validation fails
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    try {
        // Create a new assignment
        $assignment = new Assignment();
        $assignment->plate_number = $request->plate_number;
        $assignment->customer_id = $request->customer_id;
        $assignment->customer_phone = $request->customer_phone;
        $assignment->customer_debt = $request->customer_debt;
        $assignment->location = $request->location;
        $assignment->user_id = $request->user_id;
        $assignment->case_reported = $request->case_reported;
        $assignment->assigned_by = $request->assigned_by;

        // Handle file upload for attachment
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            if ($file->isValid()) {
                $fileName = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $fileName);
                $assignment->attachment = $fileName;
            }
        } else {
            $assignment->attachment = null;
        }

        // Save the assignment to the database
        $assignment->save();

        // Fetch the user based on the user_id and send an email
        $user = User::find($request->user_id);
        if ($user) {
            $this->sendAssignmentNotificationEmail($user, $assignment);
        }

        return redirect()->back()->with('success', 'Assignment registered successfully!');
    } catch (\Exception $e) {
        // Catch any exception and show error
        return redirect()->back()->with('error', 'Failed to create assignment: ' . $e->getMessage());
    }
}

private function sendAssignmentNotificationEmail(User $user, Assignment $assignment)
{
    // Prepare email subject and body
    $subject = 'New Assignment Assigned';
    $emailBody = "Dear {$user->name},\n\n"
        . "You have been assigned a new task:\n"
        . "Plate Number: {$assignment->plate_number}\n"
        . "Customer ID: {$assignment->customer_id}\n"
        . "Location: {$assignment->location}\n"
        . "Case Reported: {$assignment->case_reported}\n\n"
        . "Please log into your portal for more details.\n\n"
        . "Thank you for your attention.";

    // Send the email using Laravel's Mail facade
    try {
        Mail::raw($emailBody, function ($message) use ($user, $subject) {
            $message->to($user->email);  // Send to the user's email
            $message->subject($subject);
        });
    } catch (\Exception $e) {
        Log::error('Email sending failed: ' . $e->getMessage());  // Updated to use Log without the backslash
    }
}



    public function show($id)
    {
        try {
            $assignment = Assignment::findOrFail($id);
            return view('assignments.show', compact('assignment'));
        } catch (\Exception $e) {
            return redirect()->route('assignments.index')->withErrors('Assignment not found.');
        }
    }

    public function edit($id)
    {
        try {
            $assignment = Assignment::findOrFail($id);
            $customers = Customer::all();
            return view('assignments.edit', compact('assignment', 'customers'));
        } catch (\Exception $e) {
            return redirect()->route('assignments.index')->withErrors('Assignment not found.');
        }
    }

  public function update(Request $request, $id)
{
    // // Validate the request
    // $request->validate([

    //     'plate_number'  => 'required|string|max:255',
    //     'customer_id' => 'required|exists:customers,customer_id',
    //     'customer_phone'=> 'required|string|max:15',
    //     // 'customer_debt'=> 'required|numeric',
    //     'location'=> 'required|string|max:255',
    //     'user_id'=>'required|string|max:15',
    //     'case_reported'=>'required|string',
    //     'attachment' => 'nullable|file|mimes:pdf|max:2048',
    //     'assigned_by'=> 'required|string',
    //     //  'status'=> 'required|string',
    // ]);

    try {
        $assignment = Assignment::findOrFail($id);

        // Update the assignment with new data except for the attachment
        $data = $request->only([
            'plate_number',
            'customer_id',
            'customer_phone',
            // 'customer_debt',
            'location',
            'user_id',
            'case_reported',
            'attachment',
            'assigned_by',
            //  'status',
        ]);

        // Update the assignment
        $assignment->update($data);

        return redirect()->route('assignments.index')->with('success', 'Assignment updated successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors('Failed to update assignment.')->withInput();
    }
}
// -----------------------------------------NYONGEZA------------------------------------------------
// public function getCustomerDetails(Request $request)
// {
//     $plateNumber = $request->query('plate_number');

//     // Find the vehicle by plate number (Assuming 'Vehicle' model is available)
//     $vehicle = Vehicle::where('plate_number', $plateNumber)->first();

//     if ($vehicle) {
//         // Fetch customer details associated with the vehicle
//         $customer = Customer::find($vehicle->customer_id);
//         return response()->json([
//             'customer_name' => $customer ? $customer->customername : 'Unknown',
//             'customer_phone' => $customer ? $customer->phone : 'Unknown',
//         ]);
//     }

//     return response()->json(null);
// }
// -----------------------------------------NYONGEZA------------------------------------------------

    public function destroy($id)
    {
        try {
            $assignment = Assignment::findOrFail($id);
            // Delete attachment file if it exists
            if ($assignment->attachment) {
                Storage::disk('public')->delete($assignment->attachment);
            }
            $assignment->delete();
            return redirect()->route('assignments.index')->with('success', 'Assignment deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('assignments.index')->withErrors('Failed to delete assignment.');
        }
    }
}

