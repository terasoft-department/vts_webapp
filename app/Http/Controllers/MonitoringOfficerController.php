<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\CheckList;
use App\Models\Invoice;
use App\Models\JobCard;


class MonitoringOfficerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

         public function showDashboard()
        {
        $assignmentCount = Assignment::count();
        $CheckuplistCount = CheckList::count('check_id');
        $JobcardsCount = JobCard::count();
        $DebtsCount = Invoice::where('status', 'Not Paid')->count();


        // Pass all counts and sums to the view
        return view('monitoring_officer.index', compact(
            'assignmentCount',
            'CheckuplistCount',
            'JobcardsCount',
            'DebtsCount',
        ));
    }

        public function index()
        {
            return view('monitoring_officer.index');
        }
}
