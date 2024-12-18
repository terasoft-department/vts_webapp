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
        <li class="nav-item"><a class="nav-link collapsed" href="Adminreports"><i class="fa fa-calendar-alt"></i></i><span>Monthly&Yearly</span></a></li>
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
    <div class="main-content">
        <div class="container">
            <h5>Assignments</h5>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <br>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Filter Assignments</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('Aassignments.index') }}" method="GET" class="form-inline d-flex justify-content-between align-items-center w-100">
                            <input type="date" name="start_date" class="form-control rounded-pill mr-2" placeholder="Date From" value="{{ request()->query('start_date') }}">
                            <input type="date" name="end_date" class="form-control rounded-pill mr-2" placeholder="Date To" value="{{ request()->query('end_date') }}">

                            <!-- Filter Button -->
                            <button type="submit" class="btn btn-light d-flex align-items-center px-3 mr-2">
                                <i class="fas fa-filter mr-2"></i>
                                <span> Filter </span>
                            </button>

                            <!-- Clear Button -->
                            <a href="{{ route('Aassignments.index') }}" class="btn btn-outline-secondary d-flex align-items-center px-3">
                                <i class="fas fa-times mr-2"></i>
                                <span> Clear </span>
                            </a>
                        </form>
                    </div>
                </div>



            </div>

            <!-- Conditional Check: Only Show Table if Filters are Applied -->
            @if(request()->has('start_date') || request()->has('end_date') || request()->has('search'))
                <!-- Assignments Table -->
                <table class="table table-bordered table-striped mt-2 text-left">
                    <thead style="background-color: #4177fd; color: white;">
                        <tr>
                            <th>No</th>
                            <th>Plate Number</th>
                            <th>Customer</th>
                            <th>Customer Phone</th>
                            <th>Customer Debt</th>
                            <th>Location</th>
                            <th>Reporter</th>
                            <th>Incident Reported</th>
                            <th>Assigned By</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Accepted At</th>
                            <th>Viewed At</th>
                            <th>Comment</th>
                            {{-- <th>Actions</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assignments as $index => $assignment)
                        <tr>
                            <td>{{ $assignments->firstItem() + $index }}</td>
                            <td>{{ $assignment->plate_number }}</td>
                            <td>{{ optional($customers->find($assignment->customer_id))->customername ?? 'Unknown' }}</td>
                            <td>{{ $assignment->customer_phone }}</td>
                            <td>{{ $assignment->customer_debt }}</td>
                            <td>{{ $assignment->location }}</td>
                            <td>{{ optional($users->find($assignment->user_id))->name ?? 'Unknown' }}</td>
                            <td>{{ $assignment->case_reported }}</td>
                            <td>{{ $assignment->assigned_by }}</td>
                            <td>{{ ucfirst($assignment->status) }}</td>
                            <td>{{ \Carbon\Carbon::parse($assignment->created_at)->timezone('Africa/Nairobi')->format('l, F j, Y g:i A') }}</td>
                            <td>{{ $assignment->accepted_at }}</td>
                            <td>{{ \Carbon\Carbon::parse($assignment->accepted_at)->timezone('Africa/Nairobi')->format('l, F j, Y g:i A') }}</td>
                            <td>{{ $assignment->return_comment }}</td>
                            {{-- <td class="text-center">
                                <button class="btn btn-edit" onclick="openEditModal({{ $assignment }})">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="{{ route('assignments.destroy', $assignment->assignment_id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this assignment?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        {{ $assignments->links() }}
                    </ul>
                </nav>
            @else
                <div class="text-center">
                    <p class="alert alert-info">Please apply filters to view the assignments.</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Modal for Adding/Editing Assignment -->
    <div class="modal fade" id="assignmentModal" tabindex="-1" role="dialog" aria-labelledby="assignmentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #4177fd;color:white;">
                    <h5 class="modal-title" id="modalTitle">Create Assignment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form -->
                    <form id="assignmentForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="assignment_id" name="assignment_id">
                        <!-- Form Fields (Customer, Plate Number, etc.) -->
                        <div class="form-group">
                            <label for="customer_id">Customer Name</label>
                            <select class="form-control" id="customer_id" name="customer_id" required>
                                <option value="">Select a customer</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->customer_id }}">{{ $customer->customername }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Add other form fields as needed -->
                        <button type="submit" class="btn btn-primary" style="background-color: #4177fd;color:white">Save Assignment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


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
</main>
</body>
</html>
