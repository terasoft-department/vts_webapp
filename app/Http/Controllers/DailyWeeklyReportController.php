<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DailyWeeklyReport;
use Illuminate\Http\Request;

class DailyWeeklyReportController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        $reports = DailyWeeklyReport::all();
        return view('daily_weekly_reports.index', compact('customers','reports'));
    }

    public function create()
    {
        $customers = Customer::all(); // Retrieve all customers
        $reports = DailyWeeklyReport::all();
        return view('daily_weekly_reports.create', compact('customers','reports'));
    }


public function uploadReport(Request $request)
{
    // Validate the file (ensure it's a PDF)
    $request->validate([
        'pdf' => 'required|mimes:pdf|max:10240', // max 10MB
    ]);

    // Store the uploaded PDF file
    $pdfPath = $request->file('pdf')->store('public/reports'); // Store in storage/app/public/reports

    // Save report details with the PDF path
    DailyWeeklyReport::create([
        'reported_date' => $request->reported_date,
        'customer_id' => $request->customer_id,
        'bus_plate_number' => $request->bus_plate_number,
        'contact' => $request->contact,
        'reported_by' => $request->reported_by,
        'reported_case' => $request->reported_case,
        'assigned_technician' => $request->assigned_technician,
        'findings' => $request->findings,
        'response_status' => $request->response_status,
        'response_date' => $request->response_date,
        'pdf_path' => $pdfPath, // Store the path of the uploaded PDF
    ]);

    return back()->with('success', 'Report uploaded successfully!');
}

public function viewReport($id)
{
    $report = DailyWeeklyReport::findOrFail($id);

    // Ensure the PDF file exists before attempting to serve it
    if (file_exists(storage_path('app/' . $report->pdf_path))) {
        return response()->file(storage_path('app/' . $report->pdf_path));
    }

    return abort(404, 'PDF not found');
}


    public function store(Request $request)
{
    $request->validate([
        'reported_date' => 'required|date',
        'customer_id' => 'required|exists:customers,customer_id', // Ensure customer exists
        'bus_plate_number' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'reported_by' => 'required|string|max:255',
        'reported_case' => 'required|string|max:255',
        'assigned_technician' => 'required|string|max:255',
        'findings' => 'nullable|file|mimes:pdf|max:10240',
        'response_status' => 'required|string|max:255',
        'response_date' => 'required|date',
    ]);

    $report = new DailyWeeklyReport();
    $report->reported_date = $request->reported_date;
    $report->customer_id = $request->customer_id;
    $report->bus_plate_number = $request->bus_plate_number;
    $report->contact = $request->contact;
    $report->reported_by = $request->reported_by;
    $report->reported_case = $request->reported_case;
    $report->assigned_technician = $request->assigned_technician;
    $report->response_status = $request->response_status;
    $report->response_date = $request->response_date;

    // Handle file upload for findings
    if ($request->hasFile('findings')) {
        $file = $request->file('findings');
        $filePath = $file->store('uploads', 'public');
        $report->findings = $filePath;
    }

    $report->save();

    return redirect()->route('daily_weekly_reports.index')->with('success', 'Report created successfully.');
}

    public function edit(DailyWeeklyReport $dailyWeeklyReport)
    {
        $customers = Customer::all(); // Retrieve all customers
        return view('daily_weekly_reports.edit', compact('dailyWeeklyReport', 'customers'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'reported_date' => 'required|date',
        'customer_id' => 'required|exists:customers,customer_id', // Ensure customer exists
        'bus_plate_number' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'reported_by' => 'required|string|max:255',
        'reported_case' => 'required|string|max:255',
        'assigned_technician' => 'required|string|max:255',
        'findings' => 'nullable|file|mimes:pdf|max:10240',
        'response_status' => 'required|string|max:255',
        'response_date' => 'required|date',
    ]);

    $report = DailyWeeklyReport::findOrFail($id);
    $report->reported_date = $request->reported_date;
    $report->customer_id = $request->customer_id;
    $report->bus_plate_number = $request->bus_plate_number;
    $report->contact = $request->contact;
    $report->reported_by = $request->reported_by;
    $report->reported_case = $request->reported_case;
    $report->assigned_technician = $request->assigned_technician;
    $report->response_status = $request->response_status;
    $report->response_date = $request->response_date;

    // Handle file upload for findings
    if ($request->hasFile('findings')) {
        $file = $request->file('findings');
        $filePath = $file->store('uploads', 'public');
        $report->findings = $filePath;
    }

    $report->save();

    return redirect()->route('daily_weekly_reports.index')->with('success', 'Report updated successfully.');
}

    public function destroy(DailyWeeklyReport $dailyWeeklyReport)
    {
        $dailyWeeklyReport->delete();
        return redirect()->route('daily_weekly_reports.index')->with('success', 'Report deleted successfully.');
    }
}
