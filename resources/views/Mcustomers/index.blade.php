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
        <li class="nav-item"><a class="nav-link" href="monitoring_officer"><i class="bi bi-grid"></i><span>Dashboard</span></a></li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Monitoring Officer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
    <div class="container mt-4">
        <!-- Operation Summary Card -->
        <div class="row mb-3">
            <div class="col-12">
                {{-- <div class="card border-primary shadow-sm"> --}}

                    <div class="card text-center border-primary shadow-sm" style="max-width: 18rem; margin: auto;">
                        <div class="card-header text-dark bg-light" id="alignment-header">
                            Operation Summary
                        </div>
                        <div class="card-body bg-white text-center" id="alignment-body" style="padding: 0.5rem;">
                            <p class="card-text mb-2" style="font-size: 0.9rem;">
                                Customers: <strong>{{ $CustomersCount ?? 0 }}</strong>
                            </p>
                            <p class="card-text" style="font-size: 0.9rem;">
                                Vehicles: <strong>{{ $VehiclesCount ?? 0 }}</strong>
                            </p>
                        </div>
                    </div>

                {{-- </div> --}}
            </div>
        </div>
    </div>

        <!-- Customer Management Section -->
        <h4 class="text-center mt-3">Customer Management</h4>

        <!-- Error Handling -->
        @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{-- <!-- Search Bar, Filter, and Add Button -->
        <div class="row mb-3">
            <!-- Search Input and Button -->
            <div class="col-12 d-flex flex-column flex-md-row gap-2">
                <input type="text" id="searchInput" class="form-control" placeholder="Search customers by name or phone">
                <button class="btn btn-primary w-100 w-md-auto" onclick="searchCustomer()">
                    <i class="bi bi-search"></i> Search
                </button>
            </div>
        </div> --}}

        {{-- <!-- Date Filter -->
        <div class="row mb-3">
            <div class="col-12">
                <form method="GET" action="{{ route('customers.index') }}">
                    <div class="row g-3">
                        <!-- From Date -->
                        <div class="col-6 col-md-4">
                            <label for="from_date" class="form-label">From</label>
                            <input type="date" id="from_date" name="from_date" class="form-control" value="{{ request('from_date') }}">
                        </div>

                        <!-- To Date -->
                        <div class="col-6 col-md-4">
                            <label for="to_date" class="form-label">To</label>
                            <input type="date" id="to_date" name="to_date" class="form-control" value="{{ request('to_date') }}">
                        </div>

                        <!-- Filter Button -->
                        <div class="col-12 col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary w-100">
                                Filter
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
        <div class="card shadow-sm">
            <div class="card-header bg- text-white text-center">
                <h5 class="card-title mb-0">Filter Customers</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('Mcustomers.index') }}" method="GET" class="form-inline d-flex flex-wrap justify-content-between align-items-center">
                    <!-- Start Date -->
                    <div class="form-group mb-2 flex-grow-1 mx-2">
                        <label for="start_date" class="sr-only">Start Date</label>
                        <input type="date" name="start_date" id="start_date" class="form-control rounded-pill w-100" placeholder="Date From" value="{{ request()->query('start_date') }}">
                    </div>

                    <!-- End Date -->
                    <div class="form-group mb-2 flex-grow-1 mx-2">
                        <label for="end_date" class="sr-only">End Date</label>
                        <input type="date" name="end_date" id="end_date" class="form-control rounded-pill w-100" placeholder="Date To" value="{{ request()->query('end_date') }}">
                    </div>

                    <!-- Filter Button -->
                    <div class="form-group mb-2 mx-2">
                        <button type="submit" class="btn btn-light d-flex align-items-center px-4 py-2">
                            <i class="fas fa-filter mr-2"></i>
                            <span>Filter</span>
                        </button>
                    </div>

                    <!-- Clear Button -->
                    <div class="form-group mb-2 mx-2">
                        <a href="{{ route('Mcustomers.index') }}" class="btn btn-outline-secondary d-flex align-items-center px-4 py-2">
                            <i class="fas fa-times mr-2"></i>
                            <span>Clear</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Add Customer Button -->
        <div class="row-5 text-end">
            <div class="col-5 text-end">
                <button class="btn btn-primary w-100 w-md-auto" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                    <i class="bi bi-plus-circle"></i> Add Customer
                </button>
            </div>
        </div>
    </div>


<br><br>
        <!-- Customer Table -->
        <div class="table-responsive">
            <table id="customers" class="table table-bordered table-striped">
                <thead>
                    NB: search by name,address,phone,start date
                    <br><br>
                    <tr>
                        <th>S/No</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Start Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="customerTableBody">
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->customername }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->customer_phone }}</td>
                        <td>{{ $customer->start_date }}</td>
                        <td>
                            <button class="btn btn-sm btn-" data-bs-toggle="modal" data-bs-target="#editCustomerModal-{{ $customer->customer_id }}">
                                <i class="bi bi-pencil"></i>
                            </button>
                        </td>
                    </tr>

                    {{-- @if($customers->isNotEmpty())
                    <!-- Display users table -->
                @endif --}}
{{--
                @if($vehicles->isNotEmpty())
                    <!-- Display vehicles table -->
                @endif --}}

                {{-- @if($InvoicePayment->isNotEmpty())
                    <!-- Display InvoicePayment table -->
                @endif --}}

                {{-- <div class="d-flex justify-content-center">
                    {{ $customers->appends(request()->except('page'))->links() }}
                </div> --}}

                    <!-- Edit Customer Modal -->
                    <div class="modal fade" id="editCustomerModal-{{ $customer->customer_id }}" tabindex="-1" aria-labelledby="editCustomerLabel-{{ $customer->customer_id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCustomerLabel-{{ $customer->customer_id }}">Edit Customer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="{{ route('customers.update', $customer->customer_id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <div class="form-group mb-3">
                                            <label for="customername">Customer Name</label>
                                            <input type="text" name="customername" class="form-control" value="{{ $customer->customername }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" class="form-control" value="{{ $customer->address }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="customer_phone">Phone</label>
                                            <input type="text" name="customer_phone" class="form-control" value="{{ $customer->customer_phone }}" required>
                                        </div>
                                        {{-- <div class="form-group mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $customer->email ?? '' }}" required>
                                        </div> --}}
                                        <div class="form-group mb-3">
                                            <label for="start_date">Start Date</label>
                                            <input type="date" name="start_date" class="form-control" value="{{ $customer->start_date }}" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Add Customer Modal -->
        <div class="modal fade" id="addCustomerModal" tabindex="-1" aria-labelledby="addCustomerLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCustomerLabel">Add Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('customers.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="customername">Customer Name</label>
                                <input type="text" name="customername" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="customer_phone">Phone</label>
                                <input type="text" name="customer_phone" class="form-control" required>
                            </div>
                            {{-- <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div> --}}
                            <div class="form-group mb-3">
                                <label for="start_date">Start Date</label>
                                <input type="date" name="start_date" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- Include jQuery and DataTables JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.5/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.5/vfs_fonts.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function () {
        $('#customers').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            paging: true,
            searching: true,
            order: [[0, 'asc']], // Order by the first column (S/No)
            columnDefs: [
                { orderable: false, targets: 5 } // Disable ordering on the Actions column
            ]
        });
    });
</script>

{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

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
