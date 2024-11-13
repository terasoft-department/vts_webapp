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
        <li class="nav-item"><a class="nav-link collapsed" href="/dispatched-history1"><i class="fa fa-share"></i></i><span>Dispatched History</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admintdebts"><i class="fa fa-file-invoice-dollar"></i></i><span>Debts</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Admintrackvehicle"><i class="fas fa-car"></i></i><span>Trackvehicle</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="/auth/login"><i class="bi bi-box-arrow-in-right"></i><span>Logout</span></a></li>
    </ul>
</aside><!-- End Sidebar -->
<!-- Main Content -->
<main id="main" class="main">
    <div class="container">
        <h5>Track Debts</h5>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <!-- Filters -->
    <div class="row mb-3">
        <div class="col-md-3">
            <input type="text" id="invoiceSearch" class="form-control" placeholder="Search Invoice Number">
        </div>
        <div class="col-md-3">
            <input type="date" id="dateFrom" class="form-control" placeholder="From Date">
        </div>
        <div class="col-md-3">
            <input type="date" id="dateTo" class="form-control" placeholder="To Date">
        </div>
        <div class="col-md-3">
            <button id="filterBtn" class="btn btn-primary">Filter</button>
        </div>
    </div>

    <!-- Table -->
    <table class="table" id="invoiceTable">
        <thead>
            <tr>
                <th>#</th>
                <th>Status</th>
                <th>Invoice Number</th>
                <th>Invoice Date</th>
                <th>Grand Total</th>
                <th>Customer</th>
            </tr>
        </thead>
        <tbody>
            @php
                $hasUnpaid = $invoices->contains(function($invoice) {
                    return $invoice->status !== 'Paid';
                });
            @endphp

            @foreach($invoices as $index => $invoice)
                @if($invoice->status !== 'Paid' || $hasUnpaid)
                    <tr class="invoice-row">
                        <td>{{ $index + 1 }}</td>
                        <td>
                            @if ($invoice->status == 'Paid')
                                <span class="badge bg-success">Paid</span>
                            @else
                                <span class="badge bg-danger">Not Paid</span>
                            @endif
                        </td>
                        <td class="invoice-number">{{ $invoice->invoice_number }}</td>
                        <td class="invoice-date">{{ \Carbon\Carbon::parse($invoice->invoice_date)->format('Y-m-d') }}</td>
                        <td>{{ number_format($invoice->grand_total, 0) }}</td>
                        <td>{{ $invoice->customername }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    </div>
    </main>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const filterBtn = document.getElementById('filterBtn');
        const invoiceSearch = document.getElementById('invoiceSearch');
        const dateFrom = document.getElementById('dateFrom');
        const dateTo = document.getElementById('dateTo');
        const rows = document.querySelectorAll('.invoice-row');

        filterBtn.addEventListener('click', function () {
            const searchValue = invoiceSearch.value.toLowerCase();
            const fromDate = new Date(dateFrom.value);
            const toDate = new Date(dateTo.value);

            rows.forEach(row => {
                const invoiceNumber = row.querySelector('.invoice-number').textContent.toLowerCase();
                const invoiceDate = new Date(row.querySelector('.invoice-date').textContent);

                let matchesSearch = !searchValue || invoiceNumber.includes(searchValue);
                let matchesDateRange = (!dateFrom.value || invoiceDate >= fromDate) &&
                                       (!dateTo.value || invoiceDate <= toDate);

                if (matchesSearch && matchesDateRange) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Optionally, trigger filtering when typing in the search field
        invoiceSearch.addEventListener('input', function () {
            filterBtn.click();
        });
    });
</script>


 <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

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

