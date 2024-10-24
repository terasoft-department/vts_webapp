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
                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a>
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
        <li class="nav-item"><a class="nav-link" href="admnDashboard"><i class="bi bi-grid"></i><span>Dashboard</span></a></li>
        <li class="nav-heading">Control Panel</li>
        <li class="nav-item"><a class="nav-link collapsed" href="users"><i class="bi bi-person"></i><span>User Management</span></a></li>
        <li class="nav-heading">Reports</li>
        <li class="nav-item"><a class="nav-link collapsed" href="admininvoice"><i class="fas fa-file-invoice"></i> Invoice</i>
        <li class="nav-item"><a class="nav-link collapsed" href="Apayment_reports"><i class="fas fa-credit-card"></i></i><span>Payments</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Aassignments"><i class="fas fa-file-alt"></i></i><span>Assignments</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admincustomers"><i class="far fa-user"></i></i><span>Customers</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Adaily_weekly_reports"><i class="fas fa-file-invoice"></i></i><span>Daily&Weekly</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Adminreports"><i class="fas fa-file-invoice"></i></i><span>Weekly&Yearly</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Ajobcards"><i class="fas fa-tasks"></i></i><span>JobCards</span></a></li>

        <li class="nav-item"><a class="nav-link collapsed" href="/auth/login"><i class="bi bi-box-arrow-in-right"></i><span>Logout</span></a></li>
    </ul>
</aside><!-- End Sidebar -->
<!-- Main Content -->
   <!-- Main Content -->
<main id="main" class="main">
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
