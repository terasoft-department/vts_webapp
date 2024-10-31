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

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span>
            </a><!-- End Notification Icon -->

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

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">3</span>
            </a><!-- End Messages Icon -->

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
        <a class="nav-link " href="project_manager">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Project Manager</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="customers">
                  <i class="bi bi-circle"></i><span>Customer</span>
                </a>
              </li>
          <li>
            <a href="devices">
              <i class="bi bi-circle"></i><span>Device</span>
            </a>
          </li>
          <li>
            <a href="AccountAssignment">
              <i class="bi bi-circle"></i><span>Assignments</span>
            </a>
          </li>

          <li>
            <a href="device_requisitions">
              <i class="bi bi-circle"></i><span>Device dispatch</span>
            </a>
          </li>
          <li>
            <a href="return_device">
              <i class="bi bi-circle"></i><span>DeviceReturn</span>
            </a>
          </li>

          <li>
            <a href="jobcards">
              <i class="bi bi-circle"></i><span>Jobcard</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

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
  <div class="container mt-2">
      <div class="card">
          <div class="card-header text-center bg-primary text-white">
              <h4 class="m-0">Device Return Approval</h4>
          </div>

          <div class="card-body">
              <!-- Search Bar -->
              <div class="row mb-3">
                  <div class="col-md-4 offset-md-8">
                      <input type="text" id="search" class="form-control" placeholder="Search...">
                  </div>
              </div>

              @if (session('success'))
                  <div class="alert alert-success">{{ session('success') }}</div>
              @endif

              <table class="table table-striped" id="returnTable">
                  <thead>
                      <tr>
                          <th>Technician</th>
                          <th>Customer</th>
                          <th>Plate Number</th>
                          <th>IMEI Number</th>
                          <th>Reason</th>
                          <th>Status</th>
                          <th>Approve</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($returnDevices as $return)
                      <tr>
                          <td>{{ $return->user->name ?? 'N/A' }}</td>
                          <td>{{ $return->customer->customername ?? 'N/A' }}</td>
                          <td>{{ $return->plate_number }}</td>
                          <td>{{ $return->imei_number }}</td>
                          <td>{{ $return->reason }}</td>
                          <td>{{ ucfirst($return->status) }}</td>
                          <td>
                              <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#approveModal{{ $return->return_id }}">
                                  <i class="bi bi-check-circle"></i>
                              </button>

                              <!-- Modal for Approval -->
                              <div class="modal fade" id="approveModal{{ $return->return_id }}" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title">Approve Device Return</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                              <form action="{{ route('return_device.updateStatus', $return->return_id) }}" method="POST">
                                                  @csrf
                                                  <div class="mb-3">
                                                      <label for="status" class="form-label">Status</label>
                                                      <select class="form-select" id="status" name="status" required>
                                                          <option value="approved" {{ $return->status == 'approved' ? 'selected' : '' }}>Approved</option>
                                                          <option value="rejected" {{ $return->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                                                      </select>
                                                  </div>
                                                  <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                      <button type="submit" class="btn btn-primary">Approve Return</button>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</main>

<script>
  // JavaScript for live table search
  document.getElementById('search').addEventListener('keyup', function() {
      const searchValue = this.value.toLowerCase();
      const rows = document.querySelectorAll('#returnTable tbody tr');

      rows.forEach(row => {
          const rowText = row.textContent.toLowerCase();
          row.style.display = rowText.includes(searchValue) ? '' : 'none';
      });
  });
</script>

</main>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
