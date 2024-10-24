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
              <i class="fas fa-file-alt"></i><span>Assignments</span>
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
    <main id="main" class="text-center">
        <h4 class="page-title mb-2">Job Cards List</h4>

        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

         <!-- Search Input -->
         <div class="mb-3">
            <input type="text" id="searchInput" class="form-control" placeholder="Search by Contact Person, Mobile Number, or IMEI Number">
        </div>

        <!-- Job Cards Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>Job Card ID</th>
                            <th>Customer ID</th>
                            <th>User ID</th>
                            <th>Assignment ID</th> --}}
                            <th>C.Person</th>
                            {{-- <th>Title</th> --}}
                            <th>P.Number</th>
                            {{-- <th>Physical Location</th>
                            <th>Problem Reported</th>
                            <th>Nature of Problem at Site</th> --}}
                            {{-- <th>Service Type</th>
                            <th>Date Attended</th>
                            <th>Plate Number</th> --}}
                            <th>Imei</th>
                            <th>W.Done</th>
                            <th>C.Comment</th>
                            <th>Pre.Picture</th>
                            <th>Post.Picture</th>
                            <th>Car.Picture</th>
                            {{-- <th>Tampering Evidence Picture</th> --}}
                            <th>Show</th>
                        </tr>
                    </thead>
                        <tbody id="jobCardTableBody">
                        @foreach ($jobcards as $jobcard)
                        <tr>
                            {{-- <td>{{ $jobcard->jobcard_id }}</td>
                            <td>{{ $jobcard->customer_id }}</td>
                            <td>{{ $jobcard->user_id }}</td>
                            <td>{{ $jobcard->assignment_id }}</td> --}}
                            <td>{{ $jobcard->contact_person }}</td>
                            {{-- <td>{{ $jobcard->title }}</td> --}}
                            <td>{{ $jobcard->mobile_number }}</td>
                            {{-- <td>{{ $jobcard->physical_location }}</td>
                            <td>{{ $jobcard->problem_reported }}</td>
                            <td>{{ $jobcard->natureOf_ProblemAt_site }}</td> --}}
                            {{-- <td>{{ $jobcard->service_type }}</td>
                            <td>{{ $jobcard->date_attended }}</td>
                            <td>{{ $jobcard->plate_number }}</td> --}}
                            <td>{{ $jobcard->imei_number }}</td>
                            <td>{{ $jobcard->work_done }}</td>
                            <td>{{ $jobcard->client_comment }}</td>
                            <td>
                                @if($jobcard->pre_workdone_picture)
                                <a href="#" class="view-image" data-image="{{ asset($jobcard->pre_workdone_picture) }}" data-bs-toggle="modal" data-bs-target="#imageModal">Show</a>
                                @else N/A @endif
                            </td>
                            <td>
                                @if($jobcard->post_workdone_picture)
                                <a href="#" class="view-image" data-image="{{ asset($jobcard->post_workdone_picture) }}" data-bs-toggle="modal" data-bs-target="#imageModal">Show</a>
                                @else N/A @endif
                            </td>
                            <td>
                                @if($jobcard->carPlateNumber_picture)
                                <a href="#" class="view-image" data-image="{{ asset($jobcard->carPlateNumber_picture) }}" data-bs-toggle="modal" data-bs-target="#imageModal">Show</a>
                                @else N/A @endif
                            </td>
                            {{-- <td>
                                @if($jobcard->tampering_evidence_picture)
                                <a href="{{ asset($jobcard->tampering_evidence_picture) }}" target="_blank">View</a>
                                @else N/A @endif
                            </td> --}}
                            <td>
                                <button class="btn btn-" data-bs-toggle="modal" data-bs-target="#jobCardModal{{ $jobcard->jobcard_id }}">
                                    {{-- <i class="fas fa-edit"></i> Edit --}}
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Modal for Job Card Details -->
                        <div class="modal fade" id="jobCardModal{{ $jobcard->jobcard_id }}" tabindex="-1" aria-labelledby="jobCardModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="jobCardModalLabel">crosscheck to preview ID: {{ $jobcard->jobcard_id }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="/jobcards/{{ $jobcard->jobcard_id }}" onsubmit="return false;"> <!-- Prevent submission -->
                                            @csrf
                                            @method('PUT')

                                            <div class="mb-3">
                                                <label for="contact_person" class="form-label">Contact Person</label>
                                                <input type="text" class="form-control" id="contact_person" name="contact_person" value="{{ $jobcard->contact_person }}" required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title" name="title" value="{{ $jobcard->title }}" required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="mobile_number" class="form-label">Mobile Number</label>
                                                <input type="text" class="form-control" id="mobile_number" name="mobile_number" value="{{ $jobcard->mobile_number }}" required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="physical_location" class="form-label">Physical Location</label>
                                                <input type="text" class="form-control" id="physical_location" name="physical_location" value="{{ $jobcard->physical_location }}" required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="problem_reported" class="form-label">Problem Reported</label>
                                                <textarea class="form-control" id="problem_reported" name="problem_reported" required readonly>{{ $jobcard->problem_reported }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="natureOf_ProblemAt_site" class="form-label">Nature of Problem at Site</label>
                                                <textarea class="form-control" id="natureOf_ProblemAt_site" name="natureOf_ProblemAt_site" required readonly>{{ $jobcard->natureOf_ProblemAt_site }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="service_type" class="form-label">Service Type</label>
                                                <input type="text" class="form-control" id="service_type" name="service_type" value="{{ $jobcard->service_type }}" required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="date_attended" class="form-label">Date Attended</label>
                                                <input type="date" class="form-control" id="date_attended" name="date_attended" value="{{ $jobcard->date_attended }}" required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="plate_number" class="form-label">Plate Number</label>
                                                <input type="text" class="form-control" id="plate_number" name="plate_number" value="{{ $jobcard->plate_number }}" required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="imei_number" class="form-label">IMEI Number</label>
                                                <input type="text" class="form-control" id="imei_number" name="imei_number" value="{{ $jobcard->imei_number }}" required readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="work_done" class="form-label">Work Done</label>
                                                <textarea class="form-control" id="work_done" name="work_done" required readonly>{{ $jobcard->work_done }}</textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="client_comment" class="form-label">Client Comment</label>
                                                <textarea class="form-control" id="client_comment" name="client_comment" readonly>{{ $jobcard->client_comment }}</textarea>
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <!-- Added close button -->
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
        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img id="modalImage" src="" alt="Image Preview" class="img-fluid">
                    </div>
                </div>
            </div>
    </main>

    <script>
        // JavaScript to handle modal image display
        document.querySelectorAll('.view-image').forEach(item => {
            item.addEventListener('click', event => {
                const imageUrl = item.getAttribute('data-image');
                document.getElementById('modalImage').src = imageUrl;
            });
        });

        // Search and filter functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('#jobCardTableBody tr');

            rows.forEach(row => {
                const contactPerson = row.cells[0].textContent.toLowerCase();
                const mobileNumber = row.cells[1].textContent.toLowerCase();
                const imeiNumber = row.cells[2].textContent.toLowerCase();

                if (contactPerson.includes(searchTerm) ||
                    mobileNumber.includes(searchTerm) ||
                    imeiNumber.includes(searchTerm)) {
                    row.style.display = ''; // Show the row
                } else {
                    row.style.display = 'none'; // Hide the row
                }
            });
        });
    </script>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
