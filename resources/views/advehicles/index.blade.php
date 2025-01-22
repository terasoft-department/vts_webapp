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
        <li class="nav-item"><a class="nav-link collapsed" href="Ajobcards"><i class="fas fa-id-badge"></i></i><span>JobCards</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="new_installations3"><i class="fas fa-id-badge"></i></i><span>New Installations</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Adminchecklists"><i class="fa fa-check-square"></i></i><span>Checklists</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admindevice_requisitions"><i class="fa fa-share"></i></i><span>Dispatch</span></a></li>
        {{-- <li class="nav-item"><a class="nav-link collapsed" href="/dispatched-history1"><i class="fa fa-share"></i></i><span>Dispatched History</span></a></li> --}}
        <li class="nav-item"><a class="nav-link collapsed" href="Admintdebts"><i class="fa fa-file-invoice-dollar"></i></i><span>Debts</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admintrackvehicle"><i class="fas fa-car"></i></i><span>Trackvehicle</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="/auth/login"><i class="bi bi-box-arrow-in-right"></i><span>Logout</span></a></li>
    </ul>
</aside><!-- End Sidebar -->
<!-- Main Content -->
<main id="main" class="main">
    <div class="container mt-4">
        <!-- Operation Summary Card -->
        <div class="row mb-3">
            <div class="col-12">
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
            </div>
        </div>

        <!-- Vehicle Management Section -->
        <h4 class="text-center mt-3">Vehicle Management</h4>

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

        <div class="card shadow-sm">
            <div class="card-header bg- text-white text-center">
                <h5 class="card-title mb-0">Filter Vehicles</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('advehicles.index') }}" method="GET" class="form-inline d-flex flex-wrap justify-content-between align-items-center">
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
                        <a href="{{ route('advehicles.index') }}" class="btn btn-outline-secondary d-flex align-items-center px-4 py-2">
                            <i class="fas fa-times mr-2"></i>
                            <span>Clear</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        {{-- <!-- Add Vehicle Button -->
        <div class="row-5 text-end">
            <div class="col-5 text-end">
                <button class="btn btn-primary w-100 w-md-auto" data-bs-toggle="modal" data-bs-target="#createVehicleModal">
                    <i class="bi bi-plus-circle"></i> Add Vehicle
                </button>
            </div>
        </div> --}}

        <br><br>

        <!-- Customer Table -->
        <div class="table-responsive">
            <table id="customers" class="table table-bordered table-striped">
                <thead>
                    NB: search by vehicle name,installer,customer,plate number
                    <br><br>
                    <tr>
                        <th>#S/No</th>
                        <th>Vehicle Name</th>
                        <th>Installer</th>
                        <th>Customer</th>
                        <th>Plate Number</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="customerTableBody">
                    @foreach ($vehicles as $vehicle)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $vehicle->vehicle_name }}</td>
                            <td>{{ $vehicle->category }}</td>
                            <td>{{ $vehicle->customer ? $vehicle->customer->customername : 'N/A' }}</td>
                            <td>{{ $vehicle->plate_number }}</td>
                            <td>{{$vehicle->created_at}}</td>
                            <td>
                                <button class="btn btn-" data-bs-toggle="modal" data-bs-target="#editVehicleModal{{ $vehicle->vehicle_id }}"><i class="bi bi-pencil"></i> Edit</button>
                                {{-- <form action="{{ route('vehicles.destroy', $vehicle->vehicle_id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                                </form> --}}
                            </td>
                        </tr>

                        <!-- Edit Vehicle Modal -->
                        <div class="modal fade" id="editVehicleModal{{ $vehicle->vehicle_id }}" tabindex="-1" aria-labelledby="editVehicleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Vehicle Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('advehicles.update', $vehicle->vehicle_id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="vehicle_name">Vehicle Name</label>
                                                <input type="text" class="form-control" name="vehicle_name" value="{{ $vehicle->vehicle_name }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <input type="text" class="form-control" name="category" value="{{ $vehicle->category }}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="customer_id">Customer</label>
                                                <select class="form-control" name="customer_id" required>
                                                    @foreach ($customers as $customer)
                                                        <option value="{{ $customer->customer_id }}" {{ $vehicle->customer_id == $customer->customer_id ? 'selected' : '' }}>
                                                            {{ $customer->customername }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="plate_number">Plate Number</label>
                                                <input type="text" class="form-control" name="plate_number" value="{{ $vehicle->plate_number }}" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
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

    <!-- Add New Vehicle Modal -->
    <div class="modal fade" id="createVehicleModal" tabindex="-1" aria-labelledby="createVehicleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Vehicle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('advehicles.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="vehicle_name">Vehicle Name</label>
                            <input type="text" class="form-control" name="vehicle_name" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" class="form-control" name="category" required>
                        </div>
                        <div class="form-group">
                            <label for="customer_id">Customer</label>
                            <select class="form-control" name="customer_id" required>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->customer_id }}">{{ $customer->customername }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="plate_number">Plate Number</label>
                            <input type="text" class="form-control" name="plate_number" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Vehicle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Add necessary JavaScript files for Bootstrap modal functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


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

<!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

        <script>
            // Dynamic Search Filtering
            document.querySelector('#vehicleSearch').addEventListener('keyup', function () {
                const searchInput = this.value.toLowerCase();
                const rows = document.querySelectorAll('#vehicleTableBody tr');

                rows.forEach(row => {
                    const vehicleName = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                    const installer = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                    const customer = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
                    const plateNumber = row.querySelector('td:nth-child(5)').textContent.toLowerCase();

                    if (vehicleName.includes(searchInput) || installer.includes(searchInput) || customer.includes(searchInput) || plateNumber.includes(searchInput)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
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

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>
