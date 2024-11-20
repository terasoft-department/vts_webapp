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
    <h4 class="page-title mb-1 text-center fw-bold">Job Cards List</h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="container">

        <!-- Search bar -->
        <div class="input-group mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Search by Client Name, Contact Person, Vehicle Registration No, etc.">
            <button class="btn btn-primary" type="button" onclick="filterTable()">Search</button>
        </div>

        <!-- Job Cards Table -->
        <table class="table table-bordered" id="jobCardsTable">
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
                    <th>W.Done</th>
                    <th>Created At</th>
                    <th>C.Comment</th>
                    <th>S.Type</th>
                    <th>Technician</th>

                </tr>
            </thead>
            <tbody id="jobCardTableBody">
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
                        <td>
                            @php
                                // Convert the created_at time to Nairobi local time
                                $nairobiTime = $jobCard->created_at->setTimezone('Africa/Nairobi');
                            @endphp
                            {{ $nairobiTime->format('H:i:s') }}

                            @php
                                $hour = $nairobiTime->format('H');
                            @endphp
                            @if ($hour >= 5 && $hour < 12)
                                <span>Morning</span>
                            @elseif ($hour >= 12 && $hour < 17)
                                <span>Afternoon</span>
                            @elseif ($hour >= 17 && $hour < 21)
                                <span>Evening</span>
                            @else
                                <span>Night</span>
                            @endif
                        </td>
                        <td>{{ $jobCard->workDone }}</td>
                        <td>{{ $jobCard->clientComment }}</td>
                        <td>{{ $jobCard->service_type }}</td>
                        <td>{{ $jobCard->user ? $jobCard->user->name : 'N/A' }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>


<script>
    // Function to filter table rows based on search input
    function filterTable() {
        const filter = document.getElementById('searchInput').value.toLowerCase();
        const rows = document.querySelectorAll('#jobCardTableBody tr');

        rows.forEach(row => {
            const cells = Array.from(row.querySelectorAll('td'));
            const rowVisible = cells.some(cell => cell.textContent.toLowerCase().includes(filter));
            row.style.display = rowVisible ? '' : 'none';
        });
    }

    // Event listener for search input to trigger filtering on "Enter" key
    document.getElementById('searchInput').addEventListener('keyup', function(event) {
        if (event.key === 'Enter') {
            filterTable();
        }
    });

    // Image Preview Functionality
    document.querySelectorAll('.view-image').forEach(image => {
        image.addEventListener('click', function() {
            const imgSrc = this.getAttribute('data-image');
            document.getElementById('modalImage').src = imgSrc;
            new bootstrap.Modal(document.getElementById('imageModal')).show();
        });
    });
</script>


<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>
