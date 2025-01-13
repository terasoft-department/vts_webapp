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
    {{-- <div class="container mt-2">
        <div class="row"> --}}
<!-- Operation Summary Card -->

<div class="container mt-2">
    <div class="row">
         <!-- Accounts & Finance Summary Card -->
         <div class="col-md-3 mb-2">
            <div class="card text-center border-primary shadow card-hover">
                <div class="card-header bg-primary text-dark">
                    Accounts & Finance Summary
                </div>
                <div class="card-body bg-white">
                    <p class="card-text">Total Revenue (TZS): <strong>{{ $totalRevenue ?? 0 }}</strong></p>
                    <p class="card-text">Paid Invoice: <strong>{{ $paidInvoiceCount ?? 0 }}</strong></p>
                    <p class="card-text">Unpaid Invoice: <strong>{{ $unpaidInvoiceCount ?? 0 }}</strong></p>
                </div>
            </div>
        </div>
            <!-- Devices Count Card -->
            <div class="col-md-3 mb-2">
                <div class="card text-center border-primary shadow card-hover">
                    <div class="card-header bg-text-black">
                        <b> Devices History</b>
                    </div>
                    <div class="card-body bg-white">
                        <p class="card-text">Master Devices:<strong> {{ $mergedCounts['master']['total_count'] ?? 0 }}</strong></p>
                        <p class="card-text">I_Button Devices:<strong> {{ $mergedCounts['I_button']['total_count'] ?? 0 }}</strong></p>
                        <p class="card-text">Buzzer Devices:<strong> {{ $mergedCounts['buzzer']['total_count'] ?? 0 }}</strong></p>
                        <p class="card-text">Panic Button Devices:<strong> {{ $mergedCounts['panick_button']['total_count'] ?? 0 }}</strong></p>
                        <hr>
                        <p class="card-text">Total Devices:<strong> {{ $totalDevices }}</strong></p>
                    </div>
                </div>
            </div>

            <!-- Dispatched Devices Card -->
            <div class="col-md-3 mb-2">
                <div class="card text-center border-primary shadow card-hover">
                    <div class="card-header bg-text-black">
                        <b>Dispatched History</b>
                    </div>
                    <div class="card-body bg-white">
                        <p class="card-text">Master Dispatched Devices:<strong> {{ $mergedCounts['master']['dispatched_count'] ?? 0 }}</strong></p>
                        <p class="card-text">I_Button Dispatched Devices:<strong> {{ $mergedCounts['I_button']['dispatched_count'] ?? 0 }}</strong></p>
                        <p class="card-text">Buzzer Dispatched Devices:<strong> {{ $mergedCounts['buzzer']['dispatched_count'] ?? 0 }}</strong></p>
                        <p class="card-text">Panic Button Dispatched Devices:<strong> {{ $mergedCounts['panick_button']['dispatched_count'] ?? 0 }}</strong></p>
                        <hr>
                        <p class="card-text">Total Dispatched Devices:<strong> {{ $totalDispatched }}</strong></p>
                    </div>
                </div>
            </div>


        <div class="col-md-3 mb-2">
            <div class="card text-center border-primary shadow card-hover">
                <div class="card-header bg-primary text-dark">
                    Operation Summary
                </div>
                <div class="card-body bg-white">
                    <p class="card-text">Assignments: <strong>{{ $assignmentCount ?? 0 }}</strong></p>
                    <p class="card-text">Checkuplists: <strong>{{ $CheckuplistCount ?? 0 }}</strong></p>
                    <p class="card-text">Customers: <strong>{{ $CustomersCount ?? 0 }}</strong></p>
                    <p class="card-text">Jobcards: <strong>{{ $JobcardsCount ?? 0 }}</strong></p>
                    <p class="card-text">Customer Debts: <strong>{{ $DebtsCount ?? 0 }}</strong></p>
                    <p class="card-text">Vehicles: <strong>{{ $VehiclesCount ?? 0 }}</strong></p>
                    <p class="card-text">System Users: <strong>{{ $userCount ?? 0 }}</strong></p>
                </div>
            </div>
        </div>
        {{-- </div> --}}
        <!-- Charts Section -->
        <div class="mt-4">
            <h5 class="text-center mb-4">Data Visualization</h5>

            <!-- Devices Chart -->
            <canvas id="devicesChart" class="chart mt-2" width="1000" height="200"></canvas>

            <!-- Operation Summary Chart -->
            <canvas id="operationSummaryChart" class="chart mt-2" width="1000" height="200"></canvas>

            <!-- Accounts & Finance Chart -->
            <canvas id="accountsFinanceChart" class="chart mt-2" width="1000" height="200"></canvas>
        </div>
    </div>

    <!-- JavaScript for Data Visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Devices Chart
            new Chart(document.getElementById("devicesChart"), {
                type: 'bar',
                data: {
                    labels: ["Master Devices", "I_Button Devices", "Buzzer Devices", "Panic Button Devices"],
                    datasets: [{
                        label: 'Devices Data',
                        data: [
                            {{ $deviceCounts['master'] ?? 0 }},
                            {{ $deviceCounts['I_button'] ?? 0 }},
                            {{ $deviceCounts['buzzer'] ?? 0 }},
                            {{ $deviceCounts['panick_button'] ?? 0 }}
                        ],
                        backgroundColor: ['#36A2EB', '#FF6384', '#4BC0C0', '#FFCE56'],
                        borderColor: '#007bff',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: { color: '#333' }
                        }
                    },
                    plugins: {
                        tooltip: { enabled: true }
                    },
                    responsive: true,
                }
            });

            // Operation Summary Chart
            new Chart(document.getElementById("operationSummaryChart"), {
                type: 'bar',
                data: {
                    labels: ["Assignments", "Checkuplists", "Customers", "Jobcards", "Customer Debts", "Vehicles", "System Users"],
                    datasets: [{
                        label: 'Operation Summary',
                        data: [{{ $assignmentCount ?? 0 }}, {{ $CheckuplistCount ?? 0}}, {{ $CustomersCount ?? 0}}, {{ $JobcardsCount ?? 0}}, {{ $DebtsCount ?? 0}}, {{ $VehiclesCount ?? 0}}, {{ $userCount ?? 0 }}],
                        backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40', '#36A2EB'],
                        borderColor: '#007bff',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: { y: { beginAtZero: true, ticks: { color: '#333' } } },
                    plugins: { tooltip: { enabled: true } },
                    responsive: true,
                }
            });

            // Accounts & Finance Chart
            new Chart(document.getElementById("accountsFinanceChart"), {
                type: 'bar',
                data: {
                    labels: ["Total Revenue", "Paid Invoice", "Unpaid Invoice"],
                    datasets: [{
                        label: 'Accounts & Finance',
                        data: [{{ $totalRevenue ?? 0}}, {{ $paidInvoiceCount ?? 0}}, {{ $unpaidInvoiceCount ?? 0}}],
                        backgroundColor: ['#4BC0C0', '#FF9F40', '#FF6384'],
                        borderColor: '#007bff',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: { y: { beginAtZero: true, ticks: { color: '#333' } } },
                    plugins: { tooltip: { enabled: true } },
                    responsive: true,
                }
            });
        });
    </script>

    <!-- Styles -->
    <style>
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: scale(1.05);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }
        .border-primary {
            border-left: 5px solid #007bff;
        }
        .card-header {
            font-weight: bold;
            background-color: #f0f0f0 !important;
            color: #333;
        }
        .chart {
            margin-top: 20px;
        }
    </style>
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
