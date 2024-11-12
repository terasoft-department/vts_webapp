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
        <li class="nav-item"><a class="nav-link collapsed" href="Adminreports"><i class="fa fa-calendar-alt"></i></i><span>Monthly&Yearly</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Ajobcards"><i class="fas fa-id-badge"></i></i><span>JobCards</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Adminchecklists"><i class="fa fa-check-square"></i></i><span>Checklists</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admindevice_requisitions"><i class="fa fa-share"></i></i><span>Dispatch</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admintdebts"><i class="fa fa-file-invoice-dollar"></i></i><span>Debts</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admintrackvehicle"><i class="fas fa-car"></i></i><span>Trackvehicle</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="/auth/login"><i class="bi bi-box-arrow-in-right"></i><span>Logout</span></a></li>
    </ul>
</aside><!-- End Sidebar -->
<!-- Main Content -->
<main id="main" class="main">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="m-0">Manage Vehicles</h4>
            <form action="{{ route('vehicles.index') }}" method="GET" class="form-inline">
                <input type="text" name="search" class="form-control" placeholder="Search vehicles..." value="{{ request()->query('search') }}" id="vehicleSearch">
                <button type="submit" class="btn btn-primary ml-2"><i class="fas fa-search"></i></button>
            </form>
        </div>
{{--
        <!-- Add New Vehicle Button -->
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#createVehicleModal">
            <i class="fas fa-plus"></i> Add New Vehicle
        </button> --}}

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Vehicle Name</th>
                        <th>Installer</th>
                        <th>Customer</th>
                        <th>Plate Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="vehicleTableBody">
                    @foreach ($vehicles as $vehicle)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $vehicle->vehicle_name }}</td>
                            <td>{{ $vehicle->category }}</td>
                            <td>{{ $vehicle->customer ? $vehicle->customer->customername : 'N/A' }}</td>
                            <td>{{ $vehicle->plate_number }}</td>
                            <td>
                                <button class="btn btn-" data-toggle="modal" data-target="#editVehicleModal{{ $vehicle->vehicle_id }}"><i class="bi bi-pencil"></i></button>
                                {{-- <form action="{{ route('vehicles.destroy', $vehicle->vehicle_id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-"><i class="bi bi-trash"></i></button>
                                </form> --}}
                            </td>
                        </tr>

                        <!-- Edit Vehicle Modal -->
                        <div class="modal fade" id="editVehicleModal{{ $vehicle->vehicle_id }}" tabindex="-1" role="dialog" aria-labelledby="editVehicleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Vehicle Details</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('vehicles.update', $vehicle->vehicle_id) }}" method="POST">
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
    <div class="modal fade" id="createVehicleModal" tabindex="-1" role="dialog" aria-labelledby="createVehicleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Vehicle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('vehicles.store') }}" method="POST">
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

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

    <!-- Back-to-Top Button -->
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

</script>
</main>
</body>
</html>
