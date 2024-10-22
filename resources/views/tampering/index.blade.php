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
        <a class="nav-link " href="#">
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
  <main id="main" class="text-center">
    <h4 class="page-title mb-2">Tampering Reports</h4>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

   <!-- Date Filter Form -->
   <div class="mb-4">
       <form method="GET" action="{{ route('tampering.index') }}" class="d-flex justify-content-between align-items-center">
           <div class="d-flex align-items-center me-auto">
               <div class="me-2">
                   <label for="from_date" class="form-label">Start Date:</label>
                   <input type="date" name="from_date" id="from_date" class="form-control" value="{{ request('from_date') }}">
               </div>
               <div class="me-2">
                   <label for="to_date" class="form-label">End Date:</label>
                   <input type="date" name="to_date" id="to_date" class="form-control" value="{{ request('to_date') }}">
               </div>
           </div>
           <div class="mx-3 text-center">
               <button type="submit" class="btn btn-primary">
                   <i class="fas fa-filter"></i> Filter
               </button>
           </div>
       </form>
   </div>

   <!-- Job Cards Table -->
   <div class="card">
       <table class="table table-striped table-bordered">
           <thead>
               <tr>
                   <th>S/N</th>
                   <th>Customer ID</th>
                   <th>Assignment ID</th>
                   <th>C.Person</th>
                   <th>Problem Reported</th>
                   <th>Nature of Problem at Site</th>
                   <th>Service Type</th>
                   <th>Tampering Date</th>
                   <th>Pre.Picture</th>
                   <th>Post.Picture</th>
                   <th>Car.Picture</th>
                   <th>Tampering Evidence Picture</th>
                   <th>Show</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($jobcards as $jobcard)
               <tr>
                   <td>{{ $jobcard->jobcard_id }}</td>
                   <td>{{ $jobcard->customer_id }}</td>
                   <td>{{ $jobcard->assignment_id }}</td>
                   <td>{{ $jobcard->contact_person }}</td>
                   <td>{{ $jobcard->problem_reported }}</td>
                   <td>{{ $jobcard->natureOf_ProblemAt_site }}</td>
                   <td>{{ $jobcard->service_type }}</td>
                   <td>{{ $jobcard->date_attended }}</td>
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
                   <td>
                       @if($jobcard->tampering_evidence_picture)
                       <a href="#" class="view-image" data-image="{{ asset($jobcard->tampering_evidence_picture) }}" data-bs-toggle="modal" data-bs-target="#imageModal">Show</a>
                       @else N/A @endif
                   </td>
                   <td>
                       <button class="btn btn-" data-bs-toggle="modal" data-bs-target="#jobCardModal{{ $jobcard->jobcard_id }}">
                           <i class="fas fa-eye"></i>
                       </button>
                   </td>
               </tr>

               <!-- Modal for Job Card Details -->
               <div class="modal fade" id="jobCardModal{{ $jobcard->jobcard_id }}" tabindex="-1" aria-labelledby="jobCardModalLabel" aria-hidden="true">
                   <div class="modal-dialog modal-lg">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="jobCardModalLabel">Crosscheck to preview ID: {{ $jobcard->jobcard_id }}</h5>
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                               <form method="POST" action="/jobcards/{{ $jobcard->jobcard_id }}" onsubmit="return false;">
                                   @csrf
                                   @method('PUT')

                                   <!-- Other fields here... -->

                                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
               @endforeach
           </tbody>
       </table>
   </div>

   <!-- Pagination -->
   <nav aria-label="Page navigation example">
       <ul class="pagination justify-content-center">
           <li class="page-item">
               <a class="page-link" href="#" aria-label="Previous">
                   <span aria-hidden="true">&laquo;</span>
               </a>
           </li>
           <li class="page-item"><a class="page-link" href="#">1</a></li>
           <li class="page-item"><a class="page-link" href="#">2</a></li>
           <li class="page-item"><a class="page-link" href="#">3</a></li>
           <li class="page-item">
               <a class="page-link" href="#" aria-label="Next">
                   <span aria-hidden="true">&raquo;</span>
               </a>
           </li>
       </ul>
   </nav>

   <!-- Modal for Image Preview -->
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
   </div>

   <script>
       // JavaScript to handle modal image display
       document.querySelectorAll('.view-image').forEach(item => {
           item.addEventListener('click', event => {
               const imageUrl = item.getAttribute('data-image');
               document.getElementById('modalImage').src = imageUrl;
           });
       });
   </script>

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
