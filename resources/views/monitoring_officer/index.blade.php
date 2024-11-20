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
    <div class="container my-4">
      <div class="row">
        <div class="container mt-2">
            <b>
                <p class="card text-center">OPERATION SUMMARY</p>
            </b>
            <div class="row">

        <!-- Card 1: Assignments -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card card-custom border-left-primary shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Assignments</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800 count-up" data-target="{{ $assignmentCount ?? 0 }}">{{ $assignmentCount ?? 0 }}</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-list-task fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2: Job Cards -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card card-custom border-left-success shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Job Cards</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800 count-up" data-target="{{ $JobcardsCount ?? 0 }}">{{ $JobcardsCount ?? 0 }}</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-card-checklist fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3: Routine Checkup -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card card-custom border-left-info shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Routine Checkup</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800 count-up" data-target="{{ $CheckuplistCount ?? 0 }}">{{ $CheckuplistCount ?? 0 }}</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-clipboard-pulse fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 4: Customer Debts -->
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card card-custom border-left-warning shadow h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Customer Debts</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800 count-up" data-target="{{ $DebtsCount ?? 0 }}">{{ $DebtsCount ?? 0 }}</div>
                </div>
                <div class="col-auto">
                  <i class="bi bi-currency-dollar fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- End Row -->
    </div> <!-- End Container -->
  </main>

  <!-- CSS for animations and hover effects -->
  <style>
    .card-custom {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card-custom:hover {
      transform: scale(1.05);
      box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    .count-up {
      font-size: 2.5rem;
      color: #2a2a2a;
    }

    .border-left-primary {
      border-left: 5px solid #4e73df;
    }

    .border-left-success {
      border-left: 5px solid #1cc88a;
    }

    .border-left-info {
      border-left: 5px solid #36b9cc;
    }

    .border-left-warning {
      border-left: 5px solid #f6c23e;
    }
  </style>

  <!-- JavaScript for count-up animation -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const counters = document.querySelectorAll('.count-up');
      counters.forEach(counter => {
        const updateCount = () => {
          const target = +counter.getAttribute('data-target');
          const count = +counter.innerText;

          const increment = target / 200; // Speed of count-up

          if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 10); // Adjust for speed
          } else {
            counter.innerText = target;
          }
        };

        updateCount();
      });
    });
  </script>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/js/main.js"></script>

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
