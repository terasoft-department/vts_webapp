<?php
namespace App\Http\Controllers;

use App\Models\DailyWeeklyReport;
use Illuminate\Http\Request;

class DailyWeeklyReportController extends Controller
{
    public function index()
    {
        $reports = DailyWeeklyReport::all();
        return view('daily_weekly_reports.index', compact('reports'));
    }

    public function create()
    {
        return view('daily_weekly_reports.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'reported_date' => 'required|date',
            'customer_name' => 'required|string|max:255',
            'bus_plate_number' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'reported_by' => 'required|string|max:255',
            'reported_case' => 'required|string|max:255',
            'assigned_technician' => 'required|string|max:255',
            'findings' => 'nullable|string',
            'response_status' => 'required|string|max:255',
            'response_date' => 'nullable|date',
        ]);

        DailyWeeklyReport::create($validatedData);

        return redirect()->route('daily_weekly_reports.index')->with('success', 'Report created successfully.');
    }

    public function edit(DailyWeeklyReport $dailyWeeklyReport)
    {
        return view('daily_weekly_reports.edit', compact('dailyWeeklyReport'));
    }

    public function update(Request $request, DailyWeeklyReport $dailyWeeklyReport)
    {
        $validatedData = $request->validate([
            'reported_date' => 'required|date',
            'customer_name' => 'required|string|max:255',
            'bus_plate_number' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'reported_by' => 'required|string|max:255',
            'reported_case' => 'required|string|max:255',
            'assigned_technician' => 'required|string|max:255',
            'findings' => 'nullable|string',
            'response_status' => 'required|string|max:255',
            'response_date' => 'nullable|date',
        ]);

        $dailyWeeklyReport->update($validatedData);

        return redirect()->route('daily_weekly_reports.index')->with('success', 'Report updated successfully.');
    }

    public function destroy(DailyWeeklyReport $dailyWeeklyReport)
    {
        $dailyWeeklyReport->delete();
        return redirect()->route('daily_weekly_reports.index')->with('success', 'Report deleted successfully.');
    }
}
