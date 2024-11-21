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

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->

          <li class="nav-item dropdown">

            {{-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span>
            </a><!-- End Notification Icon --> --}}

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                  <h4>Latra</h4>
                  <p>check out Procedures</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
              </li>

            </ul><!-- End Notification Dropdown Items -->

          </li><!-- End Notification Nav -->

          <li class="nav-item dropdown">

            {{-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">3</span>
            </a><!-- End Messages Icon --> --}}

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
              <li class="dropdown-header">
                You have 3 new messages
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>

            </ul><!-- End Messages Dropdown Items -->

          </li><!-- End Messages Nav -->

          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/apple-touch-icon.png" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2"></i> Welcome, {{ auth()->user()->name }}</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6></i> Welcome, {{ auth()->user()->name }}</h6>

              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>


              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="/auth/login">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>


          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="monitoring_officer">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Monitoring Officer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="assignments">
                <i class="bi bi-circle"></i><span>Assignment</span>
              </a>
            </li>
            <li>
                <a href="Mcustomers">
                  <i class="bi bi-circle"></i><span>Customers</span>
                </a>
              </li>
            <li>
            <li>
                <a href="mcvehicles">
                  <i class="bi bi-circle"></i><span>Vehicles</span>
                </a>
              </li>
              <li>
                <a href="new_installations2">
                  <i class="bi bi-circle"></i><span>New Installation</span>
                </a>
              </li>
            <li>
              <a href="jobcards2">
                <i class="bi bi-circle"></i><span>JobCard</span>
              </a>
            </li>
            <li>
              <a href="checklists">
                <i class="bi bi-circle"></i><span>Routing Checkup List</span>
              </a>
            </li>
            <li>
              <a href="trackvehicle">
                <i class="bi bi-circle"></i><span>Track Vehicle</span>
              </a>
            </li>
            <li>
              <a href="cdebts">
                <i class="bi bi-circle"></i><span>Customer Debts</span>
              </a>
            </li>
          </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="daily_weekly_reports">
                <i class="bi bi-circle"></i><span>Daily</span>
              </a>
            </li>
            <li>
              <a href="reports">
                <i class="bi bi-circle"></i><span>Monthly</span>
              </a>
            </li>
            <li>
              <a href="tampering">
                <i class="bi bi-circle"></i><span>Tampering</span>
              </a>
            </li>
          </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="\auth/login">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

  </aside><!-- End Sidebar-->
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
                    <th>Created At</th>
                    <th>W.Done</th>
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
