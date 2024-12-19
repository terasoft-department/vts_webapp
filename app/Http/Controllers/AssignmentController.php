<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Customer;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;  // Ensure this is imported
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
     // Validate incoming request
     $request->validate([
         'plate_number' => 'required|string|max:255',
         'customer_id' => 'required|integer|exists:customers,customer_id',
         'customer_phone' => 'required|string|max:255',
         'location' => 'required|string|max:255',
         'user_id' => 'required|string',
         'case_reported' => 'required|string',
         'attachment' => 'nullable|file|mimes:pdf|max:2048',
         'assigned_by'=> 'required|string',
     ]);

     try {
         // Create new assignment
         $assignment = new Assignment();
         $assignment->fill($request->only([
             'plate_number', 'customer_id', 'customer_phone', 'customer_debt',
             'location', 'user_id', 'case_reported', 'assigned_by'
         ]));

         // Handle file upload
         if ($request->hasFile('attachment')) {
             $file = $request->file('attachment');
             if ($file->isValid()) {
                 $fileName = time() . '-' . $file->getClientOriginalName();
                 $file->move(public_path('uploads'), $fileName);
                 $assignment->attachment = $fileName;
             }
         }

         // Save assignment
         $assignment->save();

         // Send email to the user
         $user = User::find($request->user_id);
         if ($user) {
             $this->sendAssignmentNotificationEmail($user, $assignment);
             // Success message for email
             session()->flash('success_email', 'Email sent successfully to the user.');
         }

         // Success message for assignment
         session()->flash('success', 'Assignment registered successfully!');
     } catch (\Exception $e) {
         // Error message if assignment or email fails
         session()->flash('error', 'Failed to register the assignment or send the email. Error: ' . $e->getMessage());
     }

     return redirect()->back();
 }


 // Email Notification Logic
 private function sendAssignmentNotificationEmail(User $user, Assignment $assignment)
{
    $subject = 'New Assignment Assigned';
    $emailBody = "Dear {$user->name},\n\n"
        . "You have been assigned a new task:\n"
        . "Plate Number: {$assignment->plate_number}\n"
        . "Customer ID: {$assignment->customer_id}\n"
        . "Location: {$assignment->location}\n"
        . "Case Reported: {$assignment->case_reported}\n\n"
        . "Please log into your portal for more details.\n\n"
        . "Thank you for your attention.";

    // Send the email
    try {
        Mail::raw($emailBody, function ($message) use ($user, $subject) {
            $message->to($user->email);
            $message->subject($subject);
        });
    } catch (\Exception $e) {
        // Log the error message in the session or display a message
        session()->flash('error', 'Failed to send the assignment notification email. Error: ' . $e->getMessage());
        throw $e;  // Re-throw the exception to be caught by the main try-catch
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

