<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DailyWeeklyReport;
use Illuminate\Http\Request;

class ADailyWeeklyReportController extends Controller
{
    public function index(Request $request)
    {
        $query = DailyWeeklyReport::query();

        if ($request->has('date_from') && $request->date_from) {
            $query->where('reported_date', '>=', $request->date_from);
        }

        if ($request->has('date_to') && $request->date_to) {
            $query->where('reported_date', '<=', $request->date_to);
        }

        $reports = $query->get();
        $customers = Customer::all();

        return view('Adaily_weekly_reports.index', compact('customers', 'reports'));
    }

    public function create()
    {
        $customers = Customer::all(); // Retrieve all customers
        return view('Adaily_weekly_reports.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'reported_date' => 'required|date',
            'bus_company' => 'required|string|max:255',
            'bus_number' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'reported_by' => 'required|string|max:255',
            'reported_case' => 'required|string|max:255',
            'assigned_technician' => 'required|string|max:255',
            'findings' => 'nullable|string',
            'response_status' => 'required|string|max:255',
            'response_date' => 'nullable|date',
        ]);

        DailyWeeklyReport::create($validatedData);

        return redirect()->route('Adaily_weekly_reports.index')->with('success', 'Report created successfully.');
    }

    public function edit(DailyWeeklyReport $dailyWeeklyReport)
    {
        $customers = Customer::all(); // Retrieve all customers
        return view('Adaily_weekly_reports.edit', compact('dailyWeeklyReport', 'customers'));
    }

    public function update(Request $request, DailyWeeklyReport $dailyWeeklyReport)
    {
        $validatedData = $request->validate([
            'reported_date' => 'required|date',
            'bus_company' => 'required|string|max:255',
            'bus_number' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'reported_by' => 'required|string|max:255',
            'reported_case' => 'required|string|max:255',
            'assigned_technician' => 'required|string|max:255',
            'findings' => 'nullable|string',
            'response_status' => 'required|string|max:255',
            'response_date' => 'nullable|date',
        ]);

        $dailyWeeklyReport->update($validatedData);

        return redirect()->route('Adaily_weekly_reports.index')->with('success', 'Report updated successfully.');
    }

    public function destroy(DailyWeeklyReport $dailyWeeklyReport)
    {
        $dailyWeeklyReport->delete();
        return redirect()->route('Adaily_weekly_reports.index')->with('success', 'Report deleted successfully.');
    }
}
