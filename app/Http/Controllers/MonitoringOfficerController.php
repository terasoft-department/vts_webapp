<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonitoringOfficerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

         public function showDashboard()
        {
            return view('monitoring_officer.index');
        }

        public function index()
        {
            return view('monitoring_officer.index');
        }
}
