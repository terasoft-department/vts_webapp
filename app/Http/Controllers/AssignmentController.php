<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Customer;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail; // Import Mail facade
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    $request->validate([
        'plate_number' => 'required|string|max:255',
        'customer_id' => 'required|integer|exists:customers,customer_id',
        'customer_phone' => 'required|string|max:255',
        'location' => 'required|string|max:255',
        'user_id' => 'required|string|exists:users,user_id',
        'case_reported' => 'required|string',
        'attachment' => 'nullable|file|mimes:pdf|max:2048',
        'assigned_by'=> 'required|string',
    ]);

    try {
        // Create the assignment
        $assignment = new Assignment();
        $assignment->plate_number = $request->plate_number;
        $assignment->customer_id = $request->customer_id;
        $assignment->customer_phone = $request->customer_phone;
        $assignment->location = $request->location;
        $assignment->user_id = $request->user_id;
        $assignment->case_reported = $request->case_reported;
        $assignment->assigned_by = $request->assigned_by;

        // Handle file upload
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            if ($file->isValid()) {
                $fileName = time() . '-' . $file->getClientOriginalName();
                $file->move(public_path('uploads'), $fileName);
                $assignment->attachment = $fileName;
            }
        }

        // Save the assignment
        $assignment->save();

        // Send the email notification
        $this->sendAssignmentNotification($assignment);

        // Store success message in session, combining both actions
        return redirect()->back()->with('success', 'Assignment registered and email sent successfully!');
    } catch (Exception $e) {
        Log::error('Error creating assignment: ' . $e->getMessage());

        // Store error message in session
        return redirect()->back()->with('error', 'Error: ' . $e->getMessage());
    }
}


 /**
  * Send email notification to the assigned user.
  */
  private function sendAssignmentNotification(Assignment $assignment)
{
    // Find the user to whom the assignment is assigned
    $user = User::find($assignment->user_id);
    if (!$user) {
        Log::error('Assigned user not found.');
        return;
    }

    // Create the email subject and body with both success message and assignment details
    $subject = 'New Assignment Notification';
    $emailBody = "Dear {$user->name},\n\n"
        . "A new assignment has been successfully registered for you.\n\n"
        . "Details:\n"
        . "Plate Number: {$assignment->plate_number}\n"
        . "Location: {$assignment->location}\n"
        . "Case Reported: {$assignment->case_reported}\n\n"
        . "Please log in to your portal for confirmation.\n\n"
        . "Best regards,\n"
        . "Your App Team";

    try {
        // Send the email using the Laravel Mail facade
        Mail::raw($emailBody, function ($message) use ($user, $subject) {
            $message->to($user->email);
            $message->subject($subject);
        });

        Log::info("Assignment email sent to {$user->email}");
    } catch (Exception $e) {
        Log::error('Failed to send email: ' . $e->getMessage());
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

