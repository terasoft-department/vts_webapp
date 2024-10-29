<?php
// DashboardController.php
namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Device;
use App\Models\ReturnDevice;
use App\Models\DeviceRequisition;
use App\Models\Assignment;
use App\Models\User;
use App\Models\CheckList;
use App\Models\Customer;
use App\Models\JobCard;
use App\Models\Vehicle;

class DashboardController extends Controller
{
    public function index()
    {
        // Count and sum data for the dashboard
        $unpaidInvoiceCount = Invoice::where('status', 'Not Paid')->count();
        $paidInvoiceCount = Invoice::where('status', 'Paid')->count();
        $deviceCount = Device::count();
        $devicenoSum = Device::sum('total'); // Sum of total devices
        $deviceReturnCount = ReturnDevice::count();
        $devicedispatchCount = DeviceRequisition::count();
        $assignmentCount = Assignment::count();
        $userCount = User::count();
        $totalRevenue = Invoice::sum('grand_total');
        $CheckuplistCount = CheckList::count('check_id');
        $CustomersCount = Customer::count();
        $JobcardsCount = JobCard::count();
        $DebtsCount = Invoice::where('status', 'Not Paid')->count();
        $VehiclesCount = Vehicle::count();

        // Pass all counts and sums to the view
        return view('admin.index', compact(
            'unpaidInvoiceCount',
            'paidInvoiceCount',
            'deviceCount',
            'devicenoSum',
            'deviceReturnCount',
            'devicedispatchCount',
            'assignmentCount',
            'userCount',
            'totalRevenue',
            'CheckuplistCount',
            'CustomersCount',
            'JobcardsCount',
            'DebtsCount',
            'VehiclesCount'
        ));
    }
}
