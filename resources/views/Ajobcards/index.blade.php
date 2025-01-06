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
        {{-- <li class="nav-item"><a class="nav-link collapsed" href="/dispatched-history1"><i class="fa fa-share"></i></i><span>Dispatched History</span></a></li> --}}
        <li class="nav-item"><a class="nav-link collapsed" href="Admintdebts"><i class="fa fa-file-invoice-dollar"></i></i><span>Debts</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admintrackvehicle"><i class="fas fa-car"></i></i><span>Trackvehicle</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="/auth/login"><i class="bi bi-box-arrow-in-right"></i><span>Logout</span></a></li>
    </ul>
</aside><!-- End Sidebar -->
<!-- Main Content -->
{{-- <main id="main" class="main">
    <!-- Page Title -->
    <h4 class="page-title mb-3 text-center fw-bold">Job Cards List</h4>

    <div class="container">
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Filter Card -->
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title">Filter Job Cards</h5>
            </div>
            <div class="card-body">
                <!-- Filter Form -->
                <form id="filterForm" action="{{ route('Ajobcards.index') }}" method="GET" class="row">
                    <!-- Search Input -->
                    <div class="col-md-6 mb-2">
                        <input type="text" name="search" id="searchInput" class="form-control" placeholder="Search by Client Name, Contact Person, Vehicle Registration No, etc." value="{{ request()->query('search') }}">
                    </div>

                    <!-- Filter Button -->
                    <div class="col-md-3 mb-2">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-filter"></i> Filter
                        </button>
                    </div>

                    <!-- Clear Button -->
                    <div class="col-md-3 mb-2">
                        <button type="button" id="clearFilter" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-times"></i> Clear
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Job Cards Table -->
        @if($jobCards->count())
            <div class="table-responsive" id="jobCardsTableContainer">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>C.Name</th>
                            <th>Tel</th>
                            <th>C.Person</th>
                            <th>Title</th>
                            <th>M.Phone</th>
                            <th>V.Reg No</th>
                            <th>P.Location</th>
                            <th>Device ID</th>
                            <th>P.Reported</th>
                            <th>D.Reported</th>
                            <th>D.Attended</th>
                            <th>N.Problem</th>
                            <th>Created At</th>
                            <th>W.Done</th>
                            <th>C.Comment</th>
                            <th>S.Type</th>
                            <th>Technician</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobCards as $jobCard)
                            <tr>
                                <td>{{ $jobCard->Clientname }}</td>
                                <td>{{ $jobCard->Tel }}</td>
                                <td>{{ $jobCard->ContactPerson }}</td>
                                <td>{{ $jobCard->title }}</td>
                                <td>{{ $jobCard->mobilePhone }}</td>
                                <td>{{ $jobCard->VehicleRegNo }}</td>
                                <td>{{ $jobCard->physicalLocation }}</td>
                                <td>{{ $jobCard->deviceID }}</td>
                                <td>{{ $jobCard->problemReported }}</td>
                                <td>{{ $jobCard->DateReported }}</td>
                                <td>{{ $jobCard->DateAttended }}</td>
                                <td>{{ $jobCard->natureOfProblem }}</td>
                                <td>{{ \Carbon\Carbon::parse($jobCard->created_at)->setTimezone('Africa/Nairobi')->format('l, F j, Y g:i A') }}</td>
                                <td>{{ $jobCard->workDone }}</td>
                                <td>{{ $jobCard->clientComment }}</td>
                                <td>{{ $jobCard->service_type }}</td>
                                <td>{{ $jobCard->user ? $jobCard->user->name : 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center">
                <p class="alert alert-info">Please apply filters to view the job cards.</p>
            </div>
        @endif
    </div>
</main>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const clearButton = document.getElementById('clearFilter');
        const filterForm = document.getElementById('filterForm');
        const jobCardsTableContainer = document.getElementById('jobCardsTableContainer');

        // Clear input fields and hide table when "Clear" button is clicked
        clearButton.addEventListener('click', function () {
            // Clear form inputs
            filterForm.reset();

            // Hide the table container
            if (jobCardsTableContainer) {
                jobCardsTableContainer.style.display = 'none';
            }
        });
    });
</script> --}}

<main id="main" class="main">
    <!-- Page Title -->
    <h4 class="page-title mb-3 text-center fw-bold">Job Cards List</h4>

    <div class="container">
        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Filter Card -->
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="card-title">Filter Job Cards</h5>
            </div>
            <div class="card-body">
                <!-- Filter Form -->
                <form id="filterForm" action="{{ route('Ajobcards.index') }}" method="GET" class="row">
                    <!-- From Date -->
                    <div class="col-md-3 mb-2">
                        <input type="date" name="from_date" id="fromDateInput" class="form-control" value="{{ request()->query('from_date') }}">
                    </div>

                    <!-- To Date -->
                    <div class="col-md-3 mb-2">
                        <input type="date" name="to_date" id="toDateInput" class="form-control" value="{{ request()->query('to_date') }}">
                    </div>

                    <!-- Filter Button -->
                    <div class="col-md-2 mb-2">
                        <button type="submit" class="btn btn-primary w-100">
                            <i class="bi bi-filter"></i> Filter
                        </button>
                    </div>
                    <!-- Clear Button -->
                    <div class="col-md-2 mb-2">
                        <a href="{{ route('Ajobcards.index') }}" id="clearFilter" class="btn btn-outline-secondary w-100">
                            <i class="fas fa-times"></i> Clear
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Job Cards Table -->
        @if($jobCards->count())
            <div class="table-responsive" id="jobCardsTableContainer">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>C.Name</th>
                            <th>Tel</th>
                            <th>C.Person</th>
                            <th>Title</th>
                            <th>M.Phone</th>
                            <th>V.Reg No</th>
                            <th>P.Location</th>
                            <th>Device ID</th>
                            <th>P.Reported</th>
                            <th>D.Reported</th>
                            <th>D.Attended</th>
                            <th>N.Problem</th>
                            <th>Created At</th>
                            <th>W.Done</th>
                            <th>C.Comment</th>
                            <th>S.Type</th>
                            <th>Technician</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobCards as $jobCard)
                            <tr>
                                <td>{{ $jobCard->Clientname }}</td>
                                <td>{{ $jobCard->Tel }}</td>
                                <td>{{ $jobCard->ContactPerson }}</td>
                                <td>{{ $jobCard->title }}</td>
                                <td>{{ $jobCard->mobilePhone }}</td>
                                <td>{{ $jobCard->VehicleRegNo }}</td>
                                <td>{{ $jobCard->physicalLocation }}</td>
                                <td>{{ $jobCard->deviceID }}</td>
                                <td>{{ $jobCard->problemReported }}</td>
                                <td>{{ $jobCard->DateReported }}</td>
                                <td>{{ $jobCard->DateAttended }}</td>
                                <td>{{ $jobCard->natureOfProblem }}</td>
                                <td>{{ \Carbon\Carbon::parse($jobCard->created_at)->setTimezone('Africa/Nairobi')->format('l, F j, Y g:i A') }}</td>
                                <td>{{ $jobCard->workDone }}</td>
                                <td>{{ $jobCard->clientComment }}</td>
                                <td>{{ $jobCard->service_type }}</td>
                                <td>{{ $jobCard->user ? $jobCard->user->name : 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                 <!-- Pagination -->
                @else
                <div class="text-center">
                    <p class="alert alert-info">Please apply filters to view the JobcardLists.</p>
                </div>
            @endif
            </div>



    </div>
</main>

<!-- JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tableContainer = document.getElementById('jobCardsTableContainer');
        const filterForm = document.getElementById('filterForm');

        // Hide table initially if there are no filters applied
        if (!filterForm.from_date.value && !filterForm.to_date.value) {
            tableContainer.style.display = 'none';
        }

        // Show table when filters are applied
        filterForm.addEventListener('submit', function () {
            tableContainer.style.display = 'block';
        });

        // Clear filters and reset form when "Clear" button is clicked
        const clearButton = document.getElementById('clearFilter');
        if (clearButton) {
            clearButton.addEventListener('click', function () {
                filterForm.reset();
                tableContainer.style.display = 'none';
                window.location.href = "{{ route('Ajobcards.index') }}"; // Redirect to reset filters
            });
        }
    });
</script>


<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>
