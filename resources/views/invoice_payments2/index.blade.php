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
<div class="container mt-5">
    <!-- Success/Error Messages -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Filter Form -->
<div class="card">
    <div class="card-body">
        <h5 class="text-center">Generate Invoice</h5>
        <form method="GET" action="{{ route('invoice_payments3.index') }}" class="mb-2">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="filter_due_date_to" class="form-label">To:</label>
                    <input type="date" name="filter_due_date_to" id="filter_due_date_to" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="filter_due_date_from" class="form-label">From:</label>
                    <input type="date" name="filter_due_date_from" id="filter_due_date_from" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="filter_customer" class="form-label">Customer:</label>
                    <select name="filter_customer" id="filter_customer" class="form-select">
                        <option value="">All Customers</option>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->customer_id }}">{{ $customer->customername }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="filter_vat" class="form-label">VAT OPTION:</label>
                    <select name="filter_vat" id="filter_vat" class="form-select">
                        <option value="inclusive">VAT Inclusive</option>
                        <option value="exclusive">VAT Exclusive</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary me-2">Generate</button>
                <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('invoice_payments3.index') }}'">Cancel</button>
            </div>
        </form>
    </div>
 </div>

 {{ $invoicePayments->links() }} <!-- Pagination links -->

<!-- Optional JavaScript to show/hide the invoice -->
<script>
    document.getElementById('generateBtn').addEventListener('click', function() {
        // Toggle invoice section visibility
        const invoiceSection = document.getElementById('invoiceSection');
        invoiceSection.style.display = invoiceSection.style.display === 'none' ? 'block' : 'none';
    });
</script>


    <!-- Invoice Create/Edit Modal -->
<div class="modal fade" id="invoiceModal" tabindex="-1" aria-labelledby="invoiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form id="invoiceForm" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="invoiceModalLabel">Create/Edit Invoice</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 4-row, 4-column grid layout -->
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="invoice_number">Invoice Number</label>
                            <input type="text" name="invoice_number" id="invoice_number" class="form-control" readonly>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="status">status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="">Select</option>
                                <option value="paid">paid</option>
                                <option value="unpaid">unpaid</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="customer_id">Customer</label>
                            <select name="customer_id" id="customer_id" class="form-control" required>
                                <option value="">Select Customer</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->customer_id }}">{{ $customer->customername }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="due_date">Invoice Date</label>
                            <input type="date" name="due_date" id="due_date" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="prepared_by">Prepared By</label>
                            <input type="text" name="prepared_by" id="prepared_by" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="plate_number">Plate Number</label>
                            <input type="text" name="plate_number" id="plate_number" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="tin_number">TIN Number</label>
                            <input type="text" name="tin_number" id="tin_number" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="descriptions">Descriptions</label>
                            <textarea name="descriptions" id="descriptions" class="form-control" required></textarea>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="num_cars">Number of Cars</label>
                            <input type="number" name="num_cars" id="num_cars" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="periods">Periods</label>
                            <input type="number" name="periods" id="periods" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="from">From</label>
                            <input type="date" name="from" id="from" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="to">To</label>
                            <input type="date" name="to" id="to" class="form-control" required>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="payment_type">Payment Type</label>
                            <select name="payment_type" id="payment_type" class="form-control" required>
                                <option value="">Select Payment Type</option>
                                <option value="Lease">Lease</option>
                                <option value="Purchase">Purchase</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="debt">Debts</label>
                            <input type="number" name="debt" id="debt" class="form-control" required step="0.01">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="unit_price">Unit Price</label>
                            <input type="number" name="unit_price" id="unit_price" class="form-control" required step="0.01">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="gross_value">Gross Value</label>
                            <input type="number" name="gross_value" id="gross_value" class="form-control" readonly>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="vat_value">VAT Value</label>
                            <input type="number" name="vat_value" id="vat_value" class="form-control" readonly>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="vat_Inclusive">VAT Inclusive</label>
                            <input type="number" name="vat_Inclusive" id="vat_Inclusive" class="form-control" readonly>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="total_value">Total Value</label>
                            <input type="number" name="total_value" id="total_value" class="form-control" readonly>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="saveInvoiceBtn">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function createInvoice() {
        $('#invoiceForm').trigger("reset");
        $('#invoiceModalLabel').text("Create Invoice");
        $('#invoiceModal').modal('show');
        $('#invoiceForm').attr('action', '{{ route('invoice_payments2.store') }}');
    }

    function editInvoice(id) {
        $.get('/invoice_payments2/' + id + '/edit', function(data) {
            $('#invoiceModalLabel').text("Edit Invoice");
            $('#invoice_number').val(data.invoice_number);
            $('#status').val(data.status);
            $('#customer_id').val(data.customer_id);
            $('#due_date').val(data.due_date);
            $('#prepared_by').val(data.prepared_by);
            $('#plate_number').val(data.plate_number);
            $('#tin_number').val(data.tin_number);
            $('#descriptions').val(data.descriptions);
            $('#num_cars').val(data.num_cars);
            $('#periods').val(data.periods);
            $('#from').val(data.from);
            $('#to').val(data.to);
            $('#payment_type').val(data.payment_type);
            $('#debt').val(data.debt);
            $('#unit_price').val(data.unit_price);
            $('#gross_value').val(data.gross_value);
            $('#vat_value').val(data.vat_value);
            $('#vat_Inclusive').val(data.vat_Inclusive);
            $('#total_value').val(data.total_value);
            $('#invoiceModal').modal('show');
            $('#invoiceForm').attr('action', '/invoice_payments2/' + id);
        });
    }

    function showInvoice(id) {
        $.get('/invoice_payments2/' + id, function(data) {
            $('#invoiceModalLabel').text("View Invoice");
            $('#invoice_number').val(data.invoice_number).attr('readonly', true);
            $('#status').val(data.status).attr('disabled', true);
            $('#customer_id').val(data.customer_id).attr('disabled', true);
            $('#due_date').val(data.due_date).attr('readonly', true);
            $('#prepared_by').val(data.prepared_by).attr('readonly', true);
            $('#plate_number').val(data.plate_number).attr('readonly', true);
            $('#tin_number').val(data.tin_number).attr('readonly', true);
            $('#descriptions').val(data.descriptions).attr('readonly', true);
            $('#num_cars').val(data.num_cars).attr('readonly', true);
            $('#periods').val(data.periods).attr('readonly', true);
            $('#from').val(data.from).attr('readonly', true);
            $('#to').val(data.to).attr('readonly', true);
            $('#payment_type').val(data.payment_type).attr('disabled', true);
            $('#debt').val(data.debt).attr('readonly', true);
            $('#unit_price').val(data.unit_price).attr('readonly', true);
            $('#gross_value').val(data.gross_value).attr('readonly', true);
            $('#vat_value').val(data.vat_value).attr('readonly', true);
            $('#vat_inclusive').val(data.vat_inclusive).attr('readonly', true);
            $('#total_value').val(data.total_value).attr('readonly', true);
            $('#invoiceModal').modal('show');
        });
    }

    function deleteInvoice(id) {
        if (confirm('Are you sure you want to delete this invoice?')) {
            $.ajax({
                url: '/invoice_payments2/' + id,
                type: 'DELETE',
                data: {_token: '{{ csrf_token() }}'},
                success: function(result) {
                    $('#invoice-row-' + id).remove();
                    alert("Invoice deleted successfully.");
                }
            });
        }
    }
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
