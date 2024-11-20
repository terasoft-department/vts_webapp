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
        <li class="nav-item"><a class="nav-link collapsed" href="Adminreports"><i class="fa fa-calendar-alt"></i></i><span>Monthly&Yearly</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="Ajobcards"><i class="fas fa-id-badge"></i></i><span>JobCards</span></a></li>
        <li class="nav-item"><a class="nav-link collapsed" href="new_installations3"><i class="fas fa-id-badge"></i></i><span>New Installations</span></a></li>
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
        <h1>New Installations</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Search Bar -->
        <form action="{{ route('new_installations3.index') }}" method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by Customer Name" value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>C.Name</th>
                    <th>DeviceNo</th>
                    <th>CarRegNo</th>
                    <th>C.Phone</th>
                    <th>SimCardNo</th>
                    <th>FrontCarPhoto</th>
                    <th>DevicePhoto</th>
                    <th>SimCard PaperPhoto</th>
                    <th>Technician</th>
                    <th>Created At</th>

                </tr>
            </thead>
            <tbody>
                @foreach($installations as $installation)
                    <tr>
                        <td>{{ $installation->customerName }}</td>
                        <td>{{ $installation->DeviceNumber }}</td>
                        <td>{{ $installation->CarRegNumber }}</td>
                        <td>{{ $installation->customerPhone }}</td>
                        <td>{{ $installation->simCardNumber }}</td>

                        <!-- Front Car Photo -->
                        <td>
                            @if($installation->picha_ya_gari_kwa_mbele)
                                <button class="btn btn-link text-decoration-none view-image"
                                        data-image="{{ asset($installation->picha_ya_gari_kwa_mbele) }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imageModal">
                                    Show <i class="fas fa-eye"></i>

                                </button>
                            @else
                                N/A
                            @endif
                        </td>

                        <!-- Device Photo -->
                        <td>
                            @if($installation->picha_ya_device_anayoifunga)
                                <button class="btn btn-link text-decoration-none view-image"
                                        data-image="{{ asset($installation->picha_ya_device_anayoifunga) }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imageModal">
                                        Show <i class="fas fa-eye"></i>
                                </button>
                            @else
                                N/A
                            @endif
                        </td>

                        <!-- SimCard Paper Photo -->
                        <td>
                            @if($installation->picha_ya_hiyo_karatasi_ya_simCardNumber)
                                <button class="btn btn-link text-decoration-none view-image"
                                        data-image="{{ asset($installation->picha_ya_hiyo_karatasi_ya_simCardNumber) }}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#imageModal">
                                        Show <i class="fas fa-eye"></i>
                                </button>
                            @else
                                Not Found
                            @endif
                        </td>

                        <td>{{ $installation->user ? $installation->user->name : 'N/A' }}</td>
                        <td>{{ $installation->created_at->setTimezone('Africa/Nairobi')->format('H:i:s') }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal for Image Preview -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" class="img-fluid rounded" alt="Preview">
                </div>
            </div>
        </div>
    </div>
</main>

<!-- JavaScript for Modal -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const modalImage = document.getElementById('modalImage');

        document.querySelectorAll('.view-image').forEach(button => {
            button.addEventListener('click', function () {
                const imageSrc = this.getAttribute('data-image');
                modalImage.src = imageSrc;
            });
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


