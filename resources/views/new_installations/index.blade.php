<!-- resources/views/new_installations/index.blade.php -->

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
            <li>
                <a href="vehicles">
                  <i class="bi bi-circle"></i><span>Vehicle</span>
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
            <a href="dispatched-history">
              <i class="bi bi-circle"></i><span>Dispatched devices</span>
            </a>
          </li>

          <li>
            <a href="Pchecklists">
              <i class="bi bi-circle"></i><span>Daily CheckList</span>
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
          <li>
            <a href="new_installations">
              <i class="bi bi-circle"></i><span>New_installations</span>
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
    <div class="container">
        <h1>New Installations</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Search Bar -->
        <form action="{{ route('new_installations.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by Customer Name" value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <!-- DataTable with export buttons -->
        <table id="installationsTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>C.Name</th>
                    <th>DeviceNo</th>
                    <th>CarRegNo</th>
                    <th>C.Phone</th>
                    <th>SimCardNo</th>
                    <th>FrontCarPhoto</th>
                    <th>DevicePhoto</th>
                    <th>SimCard PaperPhoto</th>
                    <th>Technician</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($installations as $installation)
                    <tr>
                        <td>{{ $installation->customerName }}</td>
                        <td>{{ $installation->DeviceNumber }}</td>
                        <td>{{ $installation->CarRegNumber }}</td>
                        <td>{{ $installation->customerPhone }}</td>
                        <td>{{ $installation->simCardNumber }}</td>

                        <!-- Front Car Photo -->
                        <td>
                            @if($installation->picha_ya_gari_kwa_mbele)
                                <button class="btn btn-link text-decoration-none view-image"
                                        data-image="{{ asset($installation->picha_ya_gari_kwa_mbele) }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imageModal">
                                    Show <i class="fas fa-eye"></i>
                                </button>
                            @else
                            Not Uploaded
                            @endif
                        </td>

                        <!-- Device Photo -->
                        <td>
                            @if($installation->picha_ya_device_anayoifunga)
                                <button class="btn btn-link text-decoration-none view-image"
                                        data-image="{{ asset($installation->picha_ya_device_anayoifunga) }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imageModal">
                                    Show <i class="fas fa-eye"></i>
                                </button>
                            @else
                            Not Uploaded
                            @endif
                        </td>

                        <!-- SimCard Paper Photo -->
                        <td>
                            @if($installation->picha_ya_hiyo_karatasi_ya_simCardNumber)
                                <button class="btn btn-link text-decoration-none view-image"
                                        data-image="{{ asset($installation->picha_ya_hiyo_karatasi_ya_simCardNumber) }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imageModal">
                                    Show <i class="fas fa-eye"></i>
                                </button>
                            @else
                            Not Uploaded
                            @endif
                        </td>

                        <td>{{ $installation->user ? $installation->user->name : 'N/A' }}</td>
                        {{-- <td>{{ $installation->created_at->setTimezone('Africa/Nairobi')->format('H:i:s') }}</td> --}}
                        <td>
                        @php
                                    // Convert the created_at time to Nairobi local time
                                    $nairobiTime = $installation->created_at->setTimezone('Africa/Nairobi');
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal for Image Preview -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid rounded" alt="Preview">
                </div>
            </div>
        </div>
    </div>
</main>

<!-- JavaScript for Modal and DataTable -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalImage = document.getElementById('modalImage');

        document.querySelectorAll('.view-image').forEach(button => {
            button.addEventListener('click', function () {
                const imageSrc = this.getAttribute('data-image');
                modalImage.src = imageSrc;
            });
        });

        // Initialize DataTable with export options
        $('#installationsTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf', 'print' // Enable Copy, Excel, PDF, and Print options
            ]
        });
    });
</script>

<!-- Vendor JS Files -->
<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- DataTable JS Files -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.0/js/buttons.print.min.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>
