<?php

use App\Http\Controllers\AccountingOfficerController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckListController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerDebtController;
use App\Http\Controllers\DailyWeeklyReportController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\DeviceRequisitionController;
use App\Http\Controllers\InstallationController;
use App\Http\Controllers\InvoicePaymentController;
use App\Http\Controllers\JobcardAttachmentController;
use App\Http\Controllers\JobcardController;
use App\Http\Controllers\MonitoringOfficerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentReportController;
use App\Http\Controllers\ProjectManagerController;
use App\Http\Controllers\ReturnDeviceController;
use App\Http\Controllers\VehicleController;
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


// Middleware for authenticated routes
Route::middleware('auth')->group(function () {
//vehicles routes
Route::resource('vehicles', VehicleController::class);




});

//return device routes

Route::resource('return_device', ReturnDeviceController::class);
Route::get('/return_device/{id}/approve', [ReturnDeviceController::class, 'show'])->name('return_device.show');
Route::put('/return_device/{id}', [ReturnDeviceController::class, 'update'])->name('return_device.update');



Route::middleware(['auth'])->group(function () {
    Route::resource('assignments', AssignmentController::class);
    // View all assignments (for admin or project manager)
    Route::get('/assignments', [AssignmentController::class, 'index'])->name('assignments.index');

    // View assignments specific to the authenticated user
    Route::get('/assignments/user', [AssignmentController::class, 'userAssignments'])->name('assignments.user');

    // Create a new assignment
    Route::get('/assignments/create', [AssignmentController::class, 'create'])->name('assignments.create');
    Route::post('/assignments', [AssignmentController::class, 'store'])->name('assignments.store');

    // Show specific assignment
    Route::get('/assignments/{id}', [AssignmentController::class, 'show'])->name('assignments.show');

    // Edit and update assignment
    Route::get('/assignments/{id}/edit', [AssignmentController::class, 'edit'])->name('assignments.edit');
    Route::put('/assignments/{id}', [AssignmentController::class, 'update'])->name('assignments.update');

    // Delete assignment
    Route::delete('/assignments/{id}', [AssignmentController::class, 'destroy'])->name('assignments.destroy');
});

// Project Manager Officer routes
Route::get('project_manager', [ProjectManagerController::class, 'dashboard'])->name('project_manager.index');
Route::get('project_manager/customers', [CustomerController::class, 'countCustomers'])->name('project_manager.customers');

    // Route::get('project_manager/assignments', [AssignmentController::class, 'countAssignments'])->name('project_manager.assignments');
    // Monitoring Officer routes
   Route::get('monitoring_officer', [MonitoringOfficerController::class, 'showDashboard'])->name('monitoring_officer.index');
//    Route::resource('assignments', AssignmentController::class);
   // Accounting Officer routes
Route::get('accounting_officer', [AccountingOfficerController::class, 'showAccountingOfficerDashboard'])->name('accounting_officer.index');
// //Installations routes

Route::resource('installations', InstallationController::class);
//device dispatch

Route::resource('device_requisitions', DeviceRequisitionController::class);

   // Define routes for daily report
   Route::resource('daily_weekly_reports', DailyWeeklyReportController::class);
   Route::get('/daily_weekly_reports/{id}', [DailyWeeklyReportController::class, 'show'])->name('daily_weekly_reports.show');

//payments

//checkuplist

Route::get('/checklists', [CheckListController::class, 'index'])->name('checklists.index');
Route::post('/checklists/search', [CheckListController::class, 'search'])->name('checklists.search');




Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::get('/payments/create', [PaymentController::class, 'create'])->name('payments.create');
Route::post('/payments', [PaymentController::class, 'createPayment'])->name('payments.store');
Route::get('/payments/{payment}/edit', [PaymentController::class, 'edit'])->name('payments.edit');
Route::put('/payments/{payment}', [PaymentController::class, 'update'])->name('payments.update');
Route::post('/payments/import', [PaymentController::class, 'bulkImport'])->name('payments.import');
Route::get('/payments/export/excel', [PaymentController::class, 'exportExcel'])->name('payments.export.excel');
Route::get('/payments/export/csv', [PaymentController::class, 'exportCsv'])->name('payments.export.csv');
//device requisitions
Route::resource('device_requisitions', DeviceRequisitionController::class);

//devices
Route::resource('devices', DeviceController::class);
// Resource routes
Route::resource('customers', CustomerController::class);

//invoicepayment routes
Route::resource('invoices', InvoicePaymentController::class);
Route::post('/invoices/store', [InvoicePaymentController::class, 'store'])->name('invoices.store');
Route::get('/invoices', [InvoicePaymentController::class, 'create'])->name('invoices.create');Route::get('/invoices', function () {
    return view('invoices');

});
//paymentreports
Route::resource('payment_reports', PaymentReportController::class);



//jobcardAttachment
Route::resource('jobcard_attachments', JobcardAttachmentController::class);
Route::get('jobcard_attachments/{id}', [JobCardAttachmentController::class, 'show'])->name('jobcard_attachments.show');

//jobcards
Route::prefix('jobcards')->group(function () {
    Route::get('/', [JobcardController::class, 'index'])->name('jobcards.index');
    Route::get('/{id}/approve', [JobCardController::class, 'approve'])->name('jobcards.approve');
    Route::put('/{id}', [JobCardController::class, 'update'])->name('jobcards.update');

});



