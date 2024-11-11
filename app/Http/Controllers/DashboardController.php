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
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Count and sum data for the dashboard
        $unpaidInvoiceCount = Invoice::where('status', 'Not Paid')->count();
        $paidInvoiceCount = Invoice::where('status', 'Paid')->count();
        // Count devices by category and by dispatched status
        $deviceCounts = Device::select('category', DB::raw('count(*) as total_count'))
            ->groupBy('category')
            ->pluck('total_count', 'category');

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
        $dispatchedCounts = Device::select('category', DB::raw('count(*) as dispatched_count'))
        ->where('dispatched_status', 'dispatched')
        ->groupBy('category')
        ->pluck('dispatched_count', 'category');

    // Merge total and dispatched counts
    $mergedCounts = [];
    $categories = ['master', 'I_button', 'buzzer', 'panick_button'];

    foreach ($categories as $category) {
        $mergedCounts[$category] = [
            'total_count' => $deviceCounts[$category] ?? 0,
            'dispatched_count' => $dispatchedCounts[$category] ?? 0,
        ];
    }

    // Calculate the total dispatched devices for all categories
    $totalDispatched = array_sum(array_column($mergedCounts, 'dispatched_count'));
    $totalDevices = array_sum(array_column($mergedCounts, 'total_count'));


        // Pass all counts and sums to the view
        return view('admin.index', compact(
            'unpaidInvoiceCount',
            'paidInvoiceCount',
            'deviceCounts',
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
            'VehiclesCount',
            'dispatchedCounts',
            'mergedCounts', 'totalDispatched', 'totalDevices'
        ));
    }
}
