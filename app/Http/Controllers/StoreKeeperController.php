<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Device;
use App\Models\DeviceRequisition;
use App\Models\JobCard;
use App\Models\ReturnDevice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreKeeperController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

         public function dashboard()
        {
            $deviceCounts = Device::select('category', DB::raw('count(*) as count'))
        ->groupBy('category')
        ->pluck('count', 'category');
            $deviceReturnCount = ReturnDevice::count();
            $devicedispatchCount = DeviceRequisition::count();
            $CustomersCount = Customer::count();
            $JobcardsCount = JobCard::count();


               return view('storekeeper.index', compact(
                'deviceCounts',
                'deviceReturnCount',
                'devicedispatchCount',
                'CustomersCount',
                'JobcardsCount',
                ));
        }

        public function index()
        {
            // Count and sum data for the dashboard

            $deviceCounts = Device::select('category', DB::raw('count(*) as count'))
            ->groupBy('category')
            ->pluck('count', 'category');
 $deviceReturnCount = ReturnDevice::count();
 $devicedispatchCount = DeviceRequisition::count();
 $CustomersCount = Customer::count();
 $JobcardsCount = JobCard::count();


    return view('storekeeper.index', compact(
     'deviceCounts',
     'deviceReturnCount',
     'devicedispatchCount',
     'CustomersCount',
     'JobcardsCount',
     ));
    }
}
