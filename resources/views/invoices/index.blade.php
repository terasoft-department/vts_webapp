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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
                    {{-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon --> --}}

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
                    {{-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon --> --}}

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
                        <a href="acvehicles">
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

    <div class="container">
        <h5>Invoice Payment</h5>

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

        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#createInvoiceModal">
            Create Payment
        </button>

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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invoices as $index => $invoice)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if ($invoice->status == 'Paid')
                            <span class="badge bg-success">Paid</span>
                        @else
                            <span class="badge bg-danger">Not Paid</span>
                        @endif
                    </td>
                    <td>{{ $invoice->invoice_number }}</td>
                    <td>{{ \Carbon\Carbon::parse($invoice->invoice_date)->format('m/d/Y') }}</td>
                    <td>{{ number_format($invoice->grand_total, 0) }}</td>
                    <td>{{ $invoice->customername }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editInvoiceModal"
                            data-id="{{ $invoice->invoice_id }}"
                            data-invoice_number="{{ $invoice->invoice_number }}"
                            data-invoice_date="{{ $invoice->invoice_date }}"
                            data-grand_total="{{ $invoice->grand_total }}"
                            data-customer="{{ $invoice->customername }}">
                            Edit
                        </button>
                        @if ($invoice->status == 'Not Paid')
                            <a href="{{ route('invoices.pay', $invoice->invoice_id) }}" class="btn btn-primary">Pay</a>
                        @else
                            <button class="btn btn-secondary" disabled>Paid</button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Create Invoice Modal -->
    <div class="modal fade" id="createInvoiceModal" tabindex="-1" aria-labelledby="createInvoiceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('invoices.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="createInvoiceModalLabel">Create Invoice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="invoice_number" class="form-label">Invoice Number</label>
                            <input type="text" class="form-control" id="create_invoice_number" name="invoice_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="invoice_date" class="form-label">Invoice Date</label>
                            <input type="date" class="form-control" id="create_invoice_date" name="invoice_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="grand_total" class="form-label">Grand Total</label>
                            <input type="number" class="form-control" id="create_grand_total" name="grand_total" required>
                        </div>
                        <div class="mb-3">
                            <label for="customername" class="form-label">Customer</label>
                            <input type="text" class="form-control" id="create_customername" name="customername" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Invoice</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Invoice Modal -->
    <div class="modal fade" id="editInvoiceModal" tabindex="-1" aria-labelledby="editInvoiceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editInvoiceForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="editInvoiceModalLabel">Edit Invoice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="invoice_id" id="edit_invoice_id">
                        <div class="mb-3">
                            <label for="invoice_number" class="form-label">Invoice Number</label>
                            <input type="text" class="form-control" id="edit_invoice_number" name="invoice_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="invoice_date" class="form-label">Invoice Date</label>
                            <input type="date" class="form-control" id="edit_invoice_date" name="invoice_date" required>
                        </div>
                        <div class="mb-3">
                            <label for="grand_total" class="form-label">Grand Total</label>
                            <input type="number" class="form-control" id="edit_grand_total" name="grand_total" required>
                        </div>
                         <div class="mb-3">
                            <label for="customername" class="form-label">Customer</label>
                            <input type="text" class="form-control" id="edit_customername" name="customername" required>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Invoice</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript for handling the Edit Modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const editInvoiceModal = document.getElementById('editInvoiceModal');
        editInvoiceModal.addEventListener('show.bs.modal', (event) => {
            const button = event.relatedTarget; // Button that triggered the modal
            const invoiceId = button.getAttribute('data-invoice_id'); // Extract info from data-* attributes
            const invoiceNumber = button.getAttribute('data-invoice_number');
            const invoiceDate = button.getAttribute('data-invoice_date');
            const grandTotal = button.getAttribute('data-grand_total');
            const customer = button.getAttribute('data-customername');

            // Update the modal's content
            const modalBodyInputId = editInvoiceModal.querySelector('#edit_invoice_id');
            const modalBodyInputNumber = editInvoiceModal.querySelector('#edit_invoice_number');
            const modalBodyInputDate = editInvoiceModal.querySelector('#edit_invoice_date');
            const modalBodyInputTotal = editInvoiceModal.querySelector('#edit_grand_total');
            const modalBodyInputCustomer = editInvoiceModal.querySelector('#edit_customername');

            modalBodyInputId.value = invoiceId;
            modalBodyInputNumber.value = invoiceNumber;
            modalBodyInputDate.value = invoiceDate;
            modalBodyInputTotal.value = grandTotal;
            modalBodyInputCustomer.value = customer;

            // Update form action
            document.getElementById('editInvoiceForm').action = `/invoices/${invoiceId}`;
        });
    </script>
    <!-- Include necessary scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable with export options
            var table = $('#invoiceTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'print'
                ]
            });

            // Filter by search bar
            $('#invoiceSearch').on('keyup', function() {
                table.search(this.value).draw();
            });

            // Filter by date range
            $('#filterBtn').on('click', function() {
                let fromDate = $('#dateFrom').val();
                let toDate = $('#dateTo').val();

                // Use moment.js for date comparison if necessary
                $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                    let invoiceDate = data[3]; // Assuming invoice date is in column 3
                    if ((fromDate === '' && toDate === '') || (fromDate <= invoiceDate && (toDate === '' || invoiceDate <= toDate))) {
                        return true;
                    }
                    return false;
                });

                table.draw();
            });
        });

        // JavaScript for handling the Edit Modal (existing code)
        const editInvoiceModal = document.getElementById('editInvoiceModal');
        editInvoiceModal.addEventListener('show.bs.modal', (event) => {
            const button = event.relatedTarget;
            const invoiceId = button.getAttribute('data-invoice_id');
            const invoiceNumber = button.getAttribute('data-invoice_number');
            const invoiceDate = button.getAttribute('data-invoice_date');
            const grandTotal = button.getAttribute('data-grand_total');
            const customer = button.getAttribute('data-customer');

            document.getElementById('edit_invoice_id').value = invoiceId;
            document.getElementById('edit_invoice_number').value = invoiceNumber;
            document.getElementById('edit_invoice_date').value = invoiceDate;
            document.getElementById('edit_grand_total').value = grandTotal;
            document.getElementById('edit_customername').value = customer;

            document.getElementById('editInvoiceForm').action = `/invoices/${invoiceId}`;
        });
    </script>

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
