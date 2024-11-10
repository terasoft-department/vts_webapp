<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TERAVTS</title>
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
                <span class="d-none d-lg-block">TERAVTS</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle" href="#">
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
                                <p>Check out Procedures</p>
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
                        <span class="d-none d-md-block dropdown-toggle ps-2">Welcome, {{ auth()->user()->name }}</span>
                    </a><!-- End Profile Image Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Welcome, {{ auth()->user()->name }}</h6>
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
                            <a class="dropdown-item d-flex align-items-center" href="/auth/login">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->
            </ul>
        </nav><!-- End Icons Navigation -->
    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link" href="accounting_officer">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Accounting & Finance</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="vehicles">
                            <i class="bi bi-circle"></i><span>Vehicle</span>
                        </a>
                    </li>
                    <li>
                        <a href="Acustomers">
                            <i class="bi bi-circle"></i><span>Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoices">
                            <i class="bi bi-circle"></i><span>Payments</span>
                        </a>
                    </li>
                    </li>
                    <li>
                        <a href="tdebts">
                            <i class="bi bi-circle"></i><span>Track Debts</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoice_payments">
                            <i class="bi bi-circle"></i><span>Create Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href="invoice_payments2">
                            <i class="bi bi-circle"></i><span>Generate Invoice</span>
                        </a>
                    </li>

                </ul>
            </li><!-- End Accounting & Finance Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="/auth/login">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End Logout Nav -->

        </ul>
    </aside><!-- End Sidebar -->

    <main id="main" class="main">

        <div class="container mt-2">
            <h4 class="text-center">Customer details</h4>
            <br>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- <!-- Add New Customer Button -->
            <div class="text-left mb-2">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomerModal">
                    <i class="bi bi-plus-circle"></i> Add Customer
                </button>
            </div> --}}

            <!-- Search and Date Filter -->
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" id="searchBar" class="form-control" placeholder="Search by Name, TIN NUMBER">
                </div>
                <div class="col-md-4">
                    <input type="date" id="startDate" class="form-control">
                </div>
                <div class="col-md-4">
                    <input type="date" id="endDate" class="form-control">
                </div>
            </div>
            <div class="text-right mb-3">
                <button class="btn btn-primary" onclick="filterTable()">Search</button>
            </div>

            <!-- Customer Table -->
            <table class="table table-bordered mt-2 text-left" id="customerTable">
                <thead>
                    <tr>
                        <th>S/No</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>TIN</th>
                        <th>Email</th>
                        <th>Start Date</th>
                        {{-- <th>Actions</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                    <tr>    {{--  <td>{{ $loop->iteration }}</td> --}}
                        <td data-label="No">{{ $customer + 1 }}</td>
                        <td>{{ $customer->customername }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->customer_phone }}</td>
                        <td>{{ $customer->tin_number }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->start_date }}</td>
                        {{-- <td>
                            <!-- Edit Button -->
                            <button class="btn btn-" data-bs-toggle="modal" data-bs-target="#editCustomerModal-{{ $customer->customer_id }}">
                                <i class="bi bi-pencil"></i>
                            </button>
                            <!-- Delete Form -->
                            <form action="{{ route('customers.destroy', $customer->customer_id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-"><i class="bi bi-trash"></i></button>
                            </form>
                        </td> --}}
                    </tr>

                    <!-- Edit Customer Modal -->
                    <div class="modal fade" id="editCustomerModal-{{ $customer->customer_id }}" tabindex="-1" aria-labelledby="editCustomerLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editCustomerLabel">Edit Customer</h5>
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
                                        <div class="form-group mb-3">
                                            <label for="tin_number">TIN Number</label>
                                            <input type="text" name="tin_number" class="form-control" value="{{ $customer->tin_number }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ $customer->email }}" required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="start_date">Start Date</label>
                                            <input type="date" name="start_date" class="form-control" value="{{ $customer->start_date }}" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Customer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>

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
                                <div class="form-group mb-3">
                                    <label for="tin_number">TIN Number</label>
                                    <input type="text" name="tin_number" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
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

    <script>
        function filterTable() {
            const searchInput = document.getElementById("searchBar").value.toLowerCase();
            const startDate = new Date(document.getElementById("startDate").value);
            const endDate = new Date(document.getElementById("endDate").value);
            const table = document.getElementById("customerTable");
            const tr = table.getElementsByTagName("tr");

            for (let i = 1; i < tr.length; i++) { // start from 1 to skip the header
                const tdName = tr[i].getElementsByTagName("td")[0]; // Name column
                const tdStartDate = new Date(tr[i].getElementsByTagName("td")[5].innerText); // Start Date column

                const nameMatch = tdName && tdName.textContent.toLowerCase().includes(searchInput);
                const dateMatch = (!startDate || tdStartDate >= startDate) && (!endDate || tdStartDate <= endDate);

                if (nameMatch && dateMatch) {
                    tr[i].style.display = ""; // Show row
                } else {
                    tr[i].style.display = "none"; // Hide row
                }
            }
        }
    </script>


    @guest
        <div class="container">
            <h1 class="mt-2">You need to be logged in to view this page</h1>
        </div>
    @endguest


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            document.getElementById('mobileMenu').style.display = 'block';
            document.getElementById('mobileMenuContent').classList.add('show');
        });

        document.getElementById('mobileMenuClose').addEventListener('click', function() {
            document.getElementById('mobileMenu').style.display = 'none';
            document.getElementById('mobileMenuContent').classList.remove('show');
        });
    </script>
<script>
    document.getElementById('customername').addEventListener('input', function() {
        const query = this.value;

        if (query.length > 2) { // Start searching after 3 characters
            fetch(`/customer/details?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    if (data.name) {
                        document.getElementById('plate_number').value = data.plate_number;
                        document.getElementById('tin_number').value = data.tin_number;
                        // Autofill other fields if needed
                    }
                })
                .catch(error => console.error('Error fetching customer details:', error));
        }
    });
    </script>


   <script>
        document.getElementById('mobileMenuButton').addEventListener('click', function() {
            document.getElementById('mobileMenu').style.display = 'block';
            document.getElementById('mobileMenuContent').classList.add('show');
        });

        document.getElementById('mobileMenuClose').addEventListener('click', function() {
            document.getElementById('mobileMenu').style.display = 'none';
            document.getElementById('mobileMenuContent').classList.remove('show');
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.querySelector('.form-control');
            const tableRows = document.querySelectorAll('tbody tr');

            searchInput.addEventListener('input', function () {
                const searchTerm = searchInput.value.toLowerCase();

                tableRows.forEach(row => {
                    const cells = row.querySelectorAll('td');
                    let found = false;

                    cells.forEach(cell => {
                        if (cell.textContent.toLowerCase().includes(searchTerm)) {
                            found = true;
                        }
                    });

                    if (found) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        });
    </script>

    <script>
document.getElementById('customerForm').addEventListener('submit', function(event) {
    let valid = true;

    // Clear previous errors
    document.querySelectorAll('.text-danger').forEach(element => element.textContent = '');

    // Validate Full Name
    const customername = document.getElementById('customername').value;
    if (customername.trim() === '') {
        document.getElementById('customernameError').textContent = 'Full Name is required.';
        valid = false;
    }

    // Validate Physical Address
    const address = document.getElementById('address').value;
    if (address.trim() === '') {
        document.getElementById('addressError').textContent = 'Physical Address is required.';
        valid = false;
    }

    // Validate Phone Number
    const customer_phone = document.getElementById('customer_phone').value;
    if (customer_phone.trim() === '') {
        document.getElementById('customer_phoneError').textContent = 'Phone Number is required.';
        valid = false;
    }

        // Validate TIN Number
        const tinNumber = document.getElementById('tin_number').value;
        if (tinNumber.trim() === '') {
            document.getElementById('tinNumberError').textContent = 'TIN Number is required.';
            valid = false;
        }

  // Validate Email
  const email = document.getElementById('email').value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email.trim() === '') {
            document.getElementById('emailError').textContent = 'Email is required.';
            valid = false;
        } else if (!emailPattern.test(email)) {
            document.getElementById('emailError').textContent = 'Invalid email format.';
            valid = false;
        }
    // Validate Start Date
    const startDate = document.getElementById('start_date').value;
    if (startDate.trim() === '') {
        document.getElementById('startDateError').textContent = 'Start Date is required.';
        valid = false;
    }

    if (!valid) {
        event.preventDefault();
    }
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<script>
document.getElementById('printPDF').addEventListener('click', function () {
    var element = document.getElementById('customerTable');
    html2pdf(element, {
        margin: 10,
        filename: 'customers_report.pdf',
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    });
});

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

</body>
</html>

