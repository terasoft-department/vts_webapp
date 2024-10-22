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
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/apple-touch-icon.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Welcome, {{ auth()->user()->name }}</span>
                    </a><!-- End Profile Image Icon -->
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Welcome, {{ auth()->user()->name }}</h6>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/auth/login">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Profile Nav -->
            </ul>
        </nav>
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
                        <a href="device_requisitions">
                            <i class="bi bi-circle"></i><span>Device Dispatch</span>
                        </a>
                    </li>
                    <li>
                        <a href="return_device">
                            <i class="bi bi-circle"></i><span>Device Return</span>
                        </a>
                    </li>
                    <li>
                        <a href="jobcards">
                            <i class="bi bi-circle"></i><span>Jobcard</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Forms Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="\auth/login">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Login Page Nav -->
        </ul>
    </aside><!-- End Sidebar -->
    <main id="main" class="main">
        <div class="card text-blue bg-">
            <div class="card-body">
            </div>

            <!-- Success Message -->
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <!-- Devices Table -->
                <div class="container mt-2">
                    <table class="table table-striped">
                        <div class="card-body text-center">
                            <h4 class="page-title">Return Devices List</h4>
                        </div>

                        <!-- Success Message -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <!-- Devices Table -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Customer Name</th>
                                            <th>Device Category</th>
                                            <th>Imei Number</th>
                                            <th>Vehicle Number</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($returnDevices as $returnDevice)
                                        <tr>
                                            <td>{{ $returnDevice->return_id }}</td>
                                            <td>{{ $returnDevice->customername }}</td>
                                            <td>{{ $returnDevice->device_category }}</td>
                                            <td>{{ $returnDevice->devicenumber }}</td>
                                            <td>{{ $returnDevice->vehiclenumber }}</td>
                                            <td>{{ $returnDevice->reason }}</td>
                                            <td>{{ $returnDevice->status }}</td>
                                            <td>
                                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#approveRejectModal{{ $returnDevice->return_id }}">
                                                    Approve/Reject
                                                </button>
                                            </td>
                                        </tr>

                            <!-- Modal for Approve/Reject -->
                            <div class="modal fade" id="approveRejectModal{{ $returnDevice->return_id }}" tabindex="-1" aria-labelledby="approveRejectModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="approveRejectModalLabel">Crosscheck to Approve </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('return_device.update', $returnDevice->return_id) }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group">
                                                    <label for="customername">Customer Name</label>
                                                    <input type="text" id="customername" name="customername" class="form-control" value="{{ $returnDevice->customername }}" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="device_category">Device Category</label>
                                                    <input type="text" id="device_category" name="device_category" class="form-control" value="{{ $returnDevice->device_category }}" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="devicenumber">Device Number</label>
                                                    <input type="text" id="devicenumber" name="devicenumber" class="form-control" value="{{ $returnDevice->devicenumber }}" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="vehiclenumber">Vehicle Number</label>
                                                    <input type="text" id="vehiclenumber" name="vehiclenumber" class="form-control" value="{{ $returnDevice->vehiclenumber }}" readonly>
                                                </div>

                                                <div class="form-group">
                                                    <label for="reason">Reason for Return</label>
                                                    <textarea id="reason" name="reason" class="form-control" readonly>{{ $returnDevice->reason }}</textarea>
                                                </div>


                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select id="status" name="status" class="form-control">
                                                        <option value="Approved">Approve</option>
                                                        <option value="Rejected">Reject</option>
                                                    </select>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!-- End Devices Table -->
        </div>
    </main><!-- End Main -->

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
