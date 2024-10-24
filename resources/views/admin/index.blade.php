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
<main id="main" class="main">
    <div class="container mt-2">
        <b>
            <p class="card text-center">SUMMARY OVERVIEW</p>
        </b>
        <div class="row">
            <!-- Payments Cost Card -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-success text-white">
                        <h5>Total Payments</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="count-up" id="totalPayments" data-target="0">16,000,000</h2>
                        <p>Total cost in payments.</p>
                    </div>
                </div>
            </div>

            <!-- Customer Debts Card (Daily) -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-info text-white">
                        <h5>Daily Customer Debts</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="count-up" id="dailyCustomerDebts" data-target="0">900000</h2>
                        <p>Total customer debts for today.</p>
                    </div>
                </div>
            </div>

            <!-- Customer Debts Card (Weekly) -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-primary text-white">
                        <h5>Weekly Customer Debts</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="count-up" id="weeklyCustomerDebts" data-target="0">3490000</h2>
                        <p>Total customer debts this week.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Customer Debts Card (Monthly) -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-warning text-white">
                        <h5>Monthly Customer Debts</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="count-up" id="monthlyCustomerDebts" data-target="0">450000</h2>
                        <p>Total customer debts this month.</p>
                    </div>
                </div>
            </div>

            <!-- Customer Debts Card (Yearly) -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-danger text-white">
                        <h5>Yearly Customer Debts</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="count-up" id="yearlyCustomerDebts" data-target="0">10,000,000</h2>
                        <p>Total customer debts this year.</p>
                    </div>
                </div>
            </div>

            <!-- Job Cards Summary -->
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-header bg-dark text-white">
                        <h5>Total Job Cards</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="count-up" id="totalJobCards" data-target="0">25450</h2>
                        <p>Total number of job cards issued.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Analytics and Charts Section -->
        <div class="row mt-4">
            <!-- Payment Breakdown Histogram -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h5>Payment Breakdown</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="paymentBreakdownChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Job Card Statistics -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                        <h5>Job Cards Overview</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="jobCardChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Scripts for Charts and Count-Up Animation -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Payment Breakdown Histogram (Bar Chart)
        var ctx1 = document.getElementById('paymentBreakdownChart').getContext('2d');
        var paymentBreakdownChart = new Chart(ctx1, {
            type: 'bar',
            data: {
                labels: ['Paid', 'Pending', 'Overdue'],
                datasets: [{
                    label: 'Payment Breakdown',
                    data: [45, 100, 30], // Dynamic data
                    backgroundColor: ['#28a745', '#ffc107', '#dc3545'],
                    hoverBackgroundColor: ['#218838', '#e0a800', '#c82333']
                }]
            },
            options: {
                responsive: true
            }
        });

        // Job Cards Overview (Pie Chart)
        var ctx2 = document.getElementById('jobCardChart').getContext('2d');
        var jobCardChart = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Active Job Cards', 'Completed Job Cards'],
                datasets: [{
                    data: [50, 100], // Dynamic data
                    backgroundColor: ['#007bff', '#28a745'],
                    hoverBackgroundColor: ['#0056b3', '#218838']
                }]
            },
            options: {
                responsive: true
            }
        });

        // Fetch data from API for the dashboard
        fetch('/api/summary-overview')
            .then(response => response.json())
            .then(data => {
                // Update the revenue and debt summary
                document.getElementById('totalPayments').setAttribute('data-target', data.totalPayments);
                document.getElementById('dailyCustomerDebts').setAttribute('data-target', data.dailyCustomerDebts);
                document.getElementById('weeklyCustomerDebts').setAttribute('data-target', data.weeklyCustomerDebts);
                document.getElementById('monthlyCustomerDebts').setAttribute('data-target', data.monthlyCustomerDebts);
                document.getElementById('yearlyCustomerDebts').setAttribute('data-target', data.yearlyCustomerDebts);
                document.getElementById('totalJobCards').setAttribute('data-target', data.totalJobCards);

                // Update charts with fetched data
                paymentBreakdownChart.data.datasets[0].data = [data.paidPayments, data.pendingPayments, data.overduePayments];
                paymentBreakdownChart.update();

                jobCardChart.data.datasets[0].data = [data.activeJobCards, data.completedJobCards];
                jobCardChart.update();

                // Trigger the count-up animations
                const counters = document.querySelectorAll('.count-up');
                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-target');
                        const count = +counter.innerText;
                        const speed = 200;
                        const increment = target / speed;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + increment);
                            setTimeout(updateCount, 50);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                });
            });
    });
</script>

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
