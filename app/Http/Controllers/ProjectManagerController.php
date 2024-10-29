<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Device;
use App\Models\DeviceRequisition;
use App\Models\JobCard;
use App\Models\ReturnDevice;
use Illuminate\Http\Request;

class ProjectManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

         public function dashboard()
        {
            $devicenoSum = Device::sum('total'); // Sum of total devices
            $deviceReturnCount = ReturnDevice::count();
            $devicedispatchCount = DeviceRequisition::count();
            $CustomersCount = Customer::count();
            $JobcardsCount = JobCard::count();


               return view('project_manager.index', compact(
                'devicenoSum',
                'deviceReturnCount',
                'devicedispatchCount',
                'CustomersCount',
                'JobcardsCount',
                ));
        }

        public function index()
        {
            // Count and sum data for the dashboard

 $devicenoSum = Device::sum('total'); // Sum of total devices
 $deviceReturnCount = ReturnDevice::count();
 $devicedispatchCount = DeviceRequisition::count();
 $CustomersCount = Customer::count();
 $JobcardsCount = JobCard::count();


    return view('project_manager.index', compact(
     'devicenoSum',
     'deviceReturnCount',
     'devicedispatchCount',
     'CustomersCount',
     'JobcardsCount',
     ));
    }
}


