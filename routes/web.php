<?php

use App\Http\Controllers\AAssignmentsController;
use App\Http\Controllers\AccountAssignmentController;
use App\Http\Controllers\AccountingOfficerController;
use App\Http\Controllers\ACustomerController;
use App\Http\Controllers\ADailyWeeklyReportController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\AdminInvoice2Controller;
use App\Http\Controllers\AdminInvoiceController;
use App\Http\Controllers\AJobCardController;
use App\Http\Controllers\APaymentController;
use App\Http\Controllers\AReportController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CDebtsController;
use App\Http\Controllers\CheckListController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DailyWeeklyReportController;
use App\Http\Controllers\DeductionController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DeviceRequisitionController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoicePaymentController;
use App\Http\Controllers\InvoicePayments2Controller;
use App\Http\Controllers\InvoicePayments3Controller;
use App\Http\Controllers\JobcardController;
use App\Http\Controllers\MjobcardsController;
use App\Http\Controllers\MonitoringOfficerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentReportController;
use App\Http\Controllers\ProjectManagerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReturnDeviceController;
use App\Http\Controllers\TamperingController;
use App\Http\Controllers\TDebtsController;
use App\Http\Controllers\TrackVehicleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use FFI\CData;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Auth and Admin Previleges
Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login');
 Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register'])->name('users.register');
 Route::post('register', [AuthController::class, 'register']);
 Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('auth/password/reset', [AuthController::class, 'showResetForm'])->name('password.reset.form');
Route::post('/password/reset', [AuthController::class, 'reset'])->name('password.reset');
Route::get('/admnDashboard', [AuthController::class, 'admnDashboard'])->name('admin.index');
Route::get('/users', [AuthController::class, 'user'])->name('users.index');
Route::get('/users/{id}/edit', [AuthController::class, 'edit'])->name('user.edit');
Route::get('/edit/{user_id}', [AuthController::class, 'edit'])->name('users.edit');
Route::get('/users/{user_id}/edit', [AuthController::class, 'edit'])->name('users.edit');
Route::put('/users/{user_id}', [AuthController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [AuthController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [AuthController::class, 'update'])->name('users.update');
Route::put('/users/{id}/toggle-status', [AuthController::class, 'toggleStatus'])->name('users.toggleStatus');


// Assign unique route names
Route::get('/users/{user_id}/edit', [AuthController::class, 'edit'])->name('users.edit');
Route::get('/edit/{user_id}', [AuthController::class, 'edit'])->name('user.edit.another');
// Renamed to avoid conflict
Route::put('/users/{user_id}', [AuthController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [AuthController::class, 'destroy'])->name('users.destroy');


// Middleware for authenticated routes
Route::middleware('auth')->group(function () {
//vehicles routes
Route::resource('vehicles', VehicleController::class);

});

//assignments for admin
    Route::middleware(['auth'])->group(function () {
    Route::resource('AccountAssignment', AccountAssignmentController::class);
    Route::get('AccountAssignmentv1', [AccountAssignmentController::class, 'index1'])->name('AccountAssignmentv1.index1');
    Route::resource('AccountAssignment', AccountAssignmentController::class);
    Route::get('AccountAssignmentv2', [AccountAssignmentController::class, 'index2'])->name('AccountAssignmentv2.index2');
    });

Route::middleware(['auth'])->group(function () {
    Route::resource('Aassignments', AAssignmentsController::class);
    Route::get('assignmentsv1', [AAssignmentsController::class, 'index1'])->name('assignmentsv1.index1');
    Route::resource('Aassignments', AAssignmentsController::class);
    Route::get('assignmentsv2', [AAssignmentsController::class, 'index2'])->name('assignmentsv2.index2');
    });
//assignments
Route::middleware(['auth'])->group(function () {
Route::resource('assignments', AssignmentController::class);
Route::get('assignmentsv1', [AssignmentController::class, 'index1'])->name('assignmentsv1.index1');
Route::resource('assignments', AssignmentController::class);
Route::get('assignmentsv2', [AssignmentController::class, 'index2'])->name('assignmentsv2.index2');
});
//return device routes

Route::resource('return_device', ReturnDeviceController::class);
Route::get('/return_device/{id}/approve', [ReturnDeviceController::class, 'show'])->name('return_device.show');
Route::put('/return_device/{id}', [ReturnDeviceController::class, 'update'])->name('return_device.update');

//Tampering routes

// Project Manager Officer routes
Route::get('project_manager', [ProjectManagerController::class, 'dashboard'])->name('project_manager.index');
Route::get('project_manager/customers', [CustomerController::class, 'countCustomers'])->name('project_manager.customers');

 Route::resource('customers', CustomerController::class);
 Route::resource('Admincustomers', AdminCustomerController::class);

    // Monitoring Officer routes
   Route::get('monitoring_officer', [MonitoringOfficerController::class, 'showDashboard'])->name('monitoring_officer.index');

   // Accounting Officer routes
Route::get('accounting_officer', [AccountingOfficerController::class, 'showAccountingOfficerDashboard'])->name('accounting_officer.index');


//deduction
Route::resource('deductions', DeductionController::class);


Route::resource('device_requisitions', DeviceRequisitionController::class);

   // Define routes for daily report
   Route::resource('daily_weekly_reports', DailyWeeklyReportController::class);
   Route::get('/daily_weekly_reports/{id}', [DailyWeeklyReportController::class, 'show'])->name('daily_weekly_reports.show');

//trackvehicle

Route::get('/trackvehicle', [TrackVehicleController::class, 'index'])->name('trackvehicle.index');
Route::post('/trackvehicle/search', [TrackVehicleController::class, 'search'])->name('trackvehicle.search');
Route::post('/trackvehicle/store', [TrackVehicleController::class, 'store'])->name('trackvehicle.store');


//checkuplist

Route::get('/checklists', [CheckListController::class, 'index'])->name('checklists.index');
Route::post('/checklists/search', [CheckListController::class, 'search'])->name('checklists.search');
Route::post('/checklists/store', [ChecklistController::class, 'store'])->name('checklists.store');

  // Define routes for daily report FOR Admin
  Route::resource('Adaily_weekly_reports', ADailyWeeklyReportController::class);
  Route::get('/Adaily_weekly_reports/{id}', [ADailyWeeklyReportController::class, 'show'])->name('daily_weekly_reports.show');
//admin Monthy Report
Route::get('Adminreports', [AReportController::class, 'index'])->name('Adminreports.index');





//device requisitions

Route::get('/device_requisitions', [DeviceRequisitionController::class, 'index'])->name('device_requisitions.index');
Route::get('/device_requisitions/create', [DeviceRequisitionController::class, 'create'])->name('device_requisitions.create');
Route::post('/device_requisitions', [DeviceRequisitionController::class, 'store'])->name('device_requisitions.store');
Route::get('/device_requisitions/{id}/edit', [DeviceRequisitionController::class, 'edit'])->name('device_requisitions.edit');
Route::put('/device_requisitions/{id}', [DeviceRequisitionController::class, 'update'])->name('device_requisitions.update');

//devices
Route::resource('devices', DeviceController::class);

//customer
Route::resource('customers', CustomerController::class);

//payments
// Invoice Payment for Accountants
Route::resource('invoice_payments', InvoicePaymentController::class);

Route::resource('invoice_payments2', InvoicePayments2Controller::class);
Route::resource('invoice_payments3', InvoicePayments3Controller::class);
//admin Invoice Payment
Route::resource('admininvoice',AdminInvoiceController::class);
Route::resource('admininvoice2',AdminInvoice2Controller::class);

// // Invoice Payment Routes
// Route::resource('invoice_payments', InvoicePaymentController::class);
// Route::get('/invoice_payments/{invoice_payment}/edit', [InvoicePaymentController::class, 'edit'])->name('invoice_payments.edit');
// Route::delete('/invoice_payments/{invoice_payment}', [InvoicePaymentController::class, 'destroy'])->name('invoice_payments.destroy');


//invoices
Route::resource('invoices', InvoiceController::class);
Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
Route::get('/invoices/pay/{id}', [InvoiceController::class, 'pay'])->name('invoices.pay');



// payment report for admin
Route::resource('Apayment_reports', APaymentController::class);
Route::get('/Apayment_reports/{id}/edit', [APaymentController::class, 'edit'])->name('Apayment_reports.edit');
Route::get('/Apayment_reports/{id}', [APaymentController::class, 'show'])->name('Apayment_reports.show');
Route::post('/Apayment_reports/import', [APaymentController::class, 'import'])->name('Apayment_reports.import');
Route::get('/Apayment_reports', [APaymentController::class, 'index'])->name('Apayment_reports.index');

// routes/web.php

Route::get('reports', [ReportController::class, 'index'])->name('reports.index');

//jobcards for ProjectManager
Route::prefix('jobcards')->group(function () {
    Route::get('/', [JobcardController::class, 'index'])->name('jobcards.index');
    Route::get('/{id}/approve', [JobCardController::class, 'approve'])->name('jobcards.approve');
    Route::put('/{id}', [JobCardController::class, 'update'])->name('jobcards.update');
});
//jobcards for Admin
Route::prefix('Ajobcards')->group(function () {
    Route::get('/', [AJobCardController::class, 'index'])->name('Ajobcards.index');
    Route::get('/{id}/approve', [AJobCardController::class, 'approve'])->name('Ajobcards.approve');
    Route::put('/{id}', [AJobCardController::class, 'update'])->name('Ajobcards.update');
});



//TDebts for AccountingOfficer
Route::get('/tdebts', [TDebtsController::class, 'index'])->name('tdebts.index');
Route::resource('tdebts', TDebtsController::class);
Route::get('/tdebts', [TDebtsController::class, 'index'])->name('tdebts.index');
Route::get('/tdebts/pay/{id}', [TDebtsController::class, 'pay'])->name('tdebts.pay');

//cdebts for MonitoringOfficer
Route::get('/cdebts', [CDebtsController::class, 'index'])->name('cdebts.index');

//Acustomer for AccountingOfficer
Route::get('/Acustomers', [ACustomerController::class, 'index'])->name('Acustomers.index');

//jobcards for MornitoringOfficer
Route::prefix('jobcards2')->group(function () {
    Route::get('/', [MjobcardsController::class, 'index'])->name('jobcards2.index');
    Route::get('/{id}/approve', [MjobcardsController::class, 'approve'])->name('jobcards2.approve');
    Route::put('/{id}', [MjobcardsController::class, 'update'])->name('jobcards2.update');
});

//Tampering for MornitoringOfficer
Route::prefix('tampering')->group(function () {
    Route::get('/', [TamperingController::class, 'index'])->name('tampering.index');
    Route::get('/{id}/approve', [TamperingController::class, 'approve'])->name('tampering.approve');
    Route::put('/{id}', [TamperingController::class, 'update'])->name('tampering.update');
});


