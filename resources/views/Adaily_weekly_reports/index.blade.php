<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>teravts</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/apple-touch-icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="#" class="logo d-flex align-items-center">
                <img src="assets/img/apple-touch-icon.png" alt="">
                <span class="d-none d-lg-block"> TERAVTS</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <!-- Notifications and Profile Dropdowns -->
                <li class="nav-item dropdown">
                    {{-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a> --}}
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">You have 4 new notifications</li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Latra</h4>
                                <p>Check out Procedures</p>
                            </div>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="dropdown-footer"><a href="#">Show all notifications</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/apple-touch-icon.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Welcome, {{ auth()->user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header"><h6>Welcome, {{ auth()->user()->name }}</h6></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="#"><i class="bi bi-person"></i><span>My Profile</span></a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item d-flex align-items-center" href="/auth/login"><i class="bi bi-box-arrow-right"></i><span>Sign Out</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->
   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item"><a class="nav-link" href="admin"><i class="bi bi-grid"></i><span>Dashboard</span></a></li>
        {{-- <li class="nav-heading">Control Panel</li> --}}
        <li class="nav-item"><a class="nav-link collapsed" href="users"><i class="bi bi-person"></i><span>User Management</span></a></li>
        <li class="nav-heading">Reports</li>
        <li class="nav-item"><a class="nav-link collapsed" href="admininvoice"><i class="fas fa-file-invoice"></i> Invoice</i>
        <li class="nav-item"><a class="nav-link collapsed" href="Apayment_reports"><i class="fas fa-credit-card"></i></i><span>Payments</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Aassignments"><i class="fas fa-file-alt"></i></i><span>Assignments</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admincustomers"><i class="far fa-user"></i></i><span>Customers</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="advehicles"><i class="fas fa-car"></i></i><span>Vehicle</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Adaily_weekly_reports"><i class="fa fa-chart-line"></i></i><span>Daily&Weekly</span></a></li>
        {{-- <li class="nav-item"><a class="nav-link collapsed" href="Adminreports"><i class="fa fa-calendar-alt"></i></i><span>Monthly&Yearly</span></a></li> --}}
        <li class="nav-item"><a class="nav-link collapsed" href="Ajobcards"><i class="fas fa-id-badge"></i></i><span>JobCards</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="new_installations3"><i class="fas fa-id-badge"></i></i><span>New Installations</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Adminchecklists"><i class="fa fa-check-square"></i></i><span>Checklists</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admindevice_requisitions"><i class="fa fa-share"></i></i><span>Dispatch</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="/dispatched-history1"><i class="fa fa-share"></i></i><span>Dispatched History</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admintdebts"><i class="fa fa-file-invoice-dollar"></i></i><span>Debts</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admintrackvehicle"><i class="fas fa-car"></i></i><span>Trackvehicle</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="/auth/login"><i class="bi bi-box-arrow-in-right"></i><span>Logout</span></a></li>
    </ul>
</aside><!-- End Sidebar -->
<!-- Main Content -->
<main id="main" class="main">
    <div class="text-left">
        <h5>Daily and Weekly Reports</h5>
        <br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Filter Form -->
        <form method="GET" action="{{ route('Adaily_weekly_reports.index') }}" class="mb-3">
            <div class="d-flex gap-2">
                <input
                    type="date"
                    id="date_from"
                    name="date_from"
                    class="form-control"
                    placeholder="From"
                    value="{{ request('date_from') }}"
                    aria-label="From Date"
                >
                <input
                    type="date"
                    id="date_to"
                    name="date_to"
                    class="form-control"
                    placeholder="To"
                    value="{{ request('date_to') }}"
                    aria-label="To Date"
                >
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>
{{--
        <!-- Create Report Button -->
        <div class="btn-group">
            <button class="btn btn-primary" data-toggle="modal" data-target="#createReportModal">
                <i class="fas fa-plus-circle"></i> Create
            </button>
        </div> --}}

        <br>
        <br>
        <!-- Reports Table -->
        <div class="table-container">
            <table id="dailyWeeklyReports" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>R.Date</th>
                        <th>Bus Company</th>
                        <th>Bus Number</th>
                        <th>Contact</th>
                        <th>Reported By</th>
                        <th>Reported Case</th>
                        <th>Assigned Techn</th>
                        <th>Findings</th>
                        <th>Response Status</th>
                        <th>Response Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $report)
                        <tr>
                            <td>{{ $report->id }}</td>
                            <td>{{ $report->reported_date }}</td>
                            <td>{{ $report->bus_company }}</td>
                            <td>{{ $report->bus_number }}</td>
                            <td>{{ $report->contact }}</td>
                            <td>{{ $report->reported_by }}</td>
                            <td>{{ $report->reported_case }}</td>
                            <td>{{ $report->assigned_technician }}</td>
                            <td>{{ $report->findings }}</td>
                            <td>{{ $report->response_status }}</td>
                            <td>{{ $report->response_date }}</td>
                            <td class="action-icons">
                                <!-- Edit and Delete Actions -->
                                <span class="icon" data-toggle="modal" data-target="#editReportModal{{ $report->id }}">
                                    <i class="fas fa-edit"></i>
                                </span>

                                <form action="{{ route('Adaily_weekly_reports.destroy', $report->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <span class="icon" onclick="if(confirm('Are you sure you want to delete this report?')) { this.closest('form').submit(); }">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                </form>
                            </td>
                        </tr>

                        <!-- Edit Report Modal -->
                        <div class="modal fade" id="editReportModal{{ $report->id }}" tabindex="-1" role="dialog" aria-labelledby="editReportModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Report</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('Adaily_weekly_reports.update', $report->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="reported_date">Reported Date</label>
                                                <input type="date" class="form-control" id="reported_date" name="reported_date" value="{{ old('reported_date', $report->reported_date) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="bus_company">Bus Company</label>
                                                <input type="text" class="form-control" id="bus_company" name="bus_company" value="{{ old('bus_company', $report->bus_company) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="bus_number">Bus Number</label>
                                                <input type="text" class="form-control" id="bus_number" name="bus_number" value="{{ old('bus_number', $report->bus_number) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="contact">Contact</label>
                                                <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact', $report->contact) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="reported_by">Reported By</label>
                                                <input type="text" class="form-control" id="reported_by" name="reported_by" value="{{ old('reported_by', $report->reported_by) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="reported_case">Reported Case</label>
                                                <input type="text" class="form-control" id="reported_case" name="reported_case" value="{{ old('reported_case', $report->reported_case) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="assigned_technician">Assigned Technician</label>
                                                <input type="text" class="form-control" id="assigned_technician" name="assigned_technician" value="{{ old('assigned_technician', $report->assigned_technician) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="findings">Findings</label>
                                                <input type="text" class="form-control" id="findings" name="findings" value="{{ old('findings', $report->findings) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="response_status">Response Status</label>
                                                <input type="text" class="form-control" id="response_status" name="response_status" value="{{ old('response_status', $report->response_status) }}" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="response_date">Response Date</label>
                                                <input type="date" class="form-control" id="response_date" name="response_date" value="{{ old('response_date', $report->response_date) }}" required>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Create Report Modal -->
    <div class="modal fade" id="createReportModal" tabindex="-1" role="dialog" aria-labelledby="createReportModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('Adaily_weekly_reports.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">

                            <div class="form-group">
                                <label for="reported_date">Reported Date</label>
                                <input type="date" name="reported_date" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="bus_company">Bus Company</label>
                                <input type="text" name="bus_company" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="bus_number">Bus Number</label>
                                <input type="text" name="bus_number" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="text" name="contact" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="reported_by">Reported By</label>
                                <input type="text" name="reported_by" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="reported_case">Reported Case</label>
                                <input type="text" name="reported_case" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="assigned_technician">Assigned Technician</label>
                                <input type="text" name="assigned_technician" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="findings">Findings</label>
                                <input type="text" name="findings" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="response_status">Response Status</label>
                                <input type="text" name="response_status" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="response_date">Response Date</label>
                                <input type="date" name="response_date" class="form-control" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Create Report</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- JS and dependencies -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>


<br>
    <script>

        $(document).ready(function() {
            $('#dailyWeeklyReports').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'print'],
                responsive: true
            });
        });
    </script>

    <br>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


</body>
</html>
