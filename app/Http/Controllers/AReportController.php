<?php

namespace App\Http\Controllers;

use App\Models\DailyWeeklyReport;
use Illuminate\Http\Request;

class AReportController extends Controller
{
    public function index(Request $request)
    {
        // Get filter inputs
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        // If dates are provided, filter the reports
        if ($startDate && $endDate) {
            $reports = DailyWeeklyReport::filterByDate($startDate, $endDate)->get();
        } else {
            $reports = DailyWeeklyReport::all();
        }

        return view('Adminreports.index', compact('reports', 'startDate', 'endDate')); // Keep 'Adminreports'
    }

}
