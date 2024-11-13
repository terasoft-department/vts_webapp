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

            <!-- Button to Open Modal for Creating Invoice -->
            <button class="btn btn-primary mb-3" onclick="createInvoice()">Create Invoice</button>

            <!-- Invoice Payments Table -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>Invoice Number</th>
                            <th>Customer</th>
                            <th>Invoice Date</th>
                            <th>Prepared By</th>
                            <th>Plate Number</th>
                            <th>TIN Number</th>
                            <th>Description</th>
                            <th>Number of Cars</th>
                            <th>Periods</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Payment Type</th>
                            <th>Debt</th>
                            <th>Unit Price</th>
                            <th>Gross Value</th>
                            <th>VAT Value</th>
                            <th>VAT Inclusive</th>
                            <th>Total Value</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($invoicePayments as $invoice)
                        <tr id="invoice-row-{{ $invoice->id }}">
                            <td>{{ $invoice->invoice_number }}</td>
                            <td>{{ $invoice->customer->customername }}</td>
                            <td>{{ \Carbon\Carbon::parse($invoice->due_date)->format('Y-m-d') }}</td>
                            <td>{{ $invoice->prepared_by }}</td>
                            <td>{{ $invoice->plate_number }}</td>
                            <td>{{ $invoice->tin_number }}</td>
                            <td>{{ $invoice->descriptions }}</td>
                            <td>{{ $invoice->num_cars }}</td>
                            <td>{{ $invoice->periods }}</td>
                            <td>{{ \Carbon\Carbon::parse($invoice->from)->format('Y-m-d') }}</td>
                            <td>{{ \Carbon\Carbon::parse($invoice->to)->format('Y-m-d') }}</td>
                            <td>{{ $invoice->payment_type }}</td>
                            <td>{{ number_format($invoice->debt, 2) }}</td>
                            <td>{{ number_format($invoice->unit_price, 2) }}</td>
                            <td>{{ number_format($invoice->gross_value, 2) }}</td>
                            <td>{{ number_format($invoice->vat_value, 2) }}</td>
                            <td>{{ number_format($invoice->vat_Inclusive, 2) }}</td>
                            <td>{{ number_format($invoice->total_value, 2) }}</td>
                            <td>
                                <button class="btn btn-warning btn-sm" onclick="editInvoice({{ $invoice->id }})"><i class="bi bi-pencil"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $invoicePayments->links() }} <!-- Pagination links -->

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
                                <!-- Invoice Details -->
                                <div class="row mb-3">
                                    <div class="col-md-3">
                                        <label for="invoice_number">Invoice Number</label>
                                        <input type="text" name="invoice_number" id="invoice_number" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="customer_id">Customer</label>
                                        <select name="customer_id" id="customer_id" class="form-control" required>
                                            <option value="">Select Customer</option>
                                            @foreach($customers as $customer)
                                                <option value="{{ $customer->customer_id }}">{{ $customer->customername }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="due_date">Invoice Date</label>
                                        <input type="date" name="due_date" id="due_date" class="form-control" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="prepared_by">Prepared By</label>
                                        <input type="text" name="prepared_by" id="prepared_by" class="form-control" required>
                                    </div>
                                </div>

                                <!-- Invoice Item Table -->
                                <table class="table table-bordered" id="invoice-items-table">
                                    <thead>
                                        <tr>
                                            <th>Description</th>
                                            <th>Number of Cars</th>
                                            <th>Period</th>
                                            <th>From Date</th>
                                            <th>To Date</th>
                                            <th>Payment Type</th>
                                            <th>Debt</th>
                                            <th>Unit Price</th>
                                            <th>Gross Value</th>
                                            <th>VAT Value</th>
                                            <th>VAT Inclusive</th>
                                            <th>Total Value</th>
                                            <th><button type="button" class="btn btn-success btn-sm" onclick="addItemRow()">Add Item</button></th>
                                        </tr>
                                    </thead>
                                    <tbody id="items-body">
                                        <!-- Item rows will be added here -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="11">Grand Total</th>
                                            <th id="grandTotal">0.00</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" id="saveInvoiceBtn">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- JavaScript for handling form actions -->
            <script>
                function createInvoice() {
                    $('#invoiceForm').trigger("reset");
                    $('#invoiceModalLabel').text("Create Invoice");
                    $('#invoiceModal').modal('show');
                    $('#invoiceForm').attr('action', '{{ route('invoice_payments.store') }}');
                    clearItems();
                    $('#due_date').val(getDefaultDueDate());
                }

                function editInvoice(id) {
                    $.get('/invoice_payments/' + id + '/edit', function(data) {
                        if (data) {
                            $('#invoiceModalLabel').text("Edit Invoice");
                            $('#invoice_number').val(data.invoice_number);
                            $('#customer_id').val(data.customer_id);
                            $('#due_date').val(data.due_date);
                            $('#prepared_by').val(data.prepared_by);
                            $('#invoiceModal').modal('show');
                            $('#invoiceForm').attr('action', '/invoice_payments/' + id);
                            loadItems(data.items || []);
                        } else {
                            alert("Failed to load invoice details. Please try again.");
                        }
                    }).fail(function() {
                        alert("Error occurred while fetching invoice data.");
                    });
                }

                function addItemRow() {
                    const row = `
                        <tr>
                            <td><input type="text" name="item_description[]" class="form-control" required></td>
                            <td><input type="number" name="number_of_cars[]" class="form-control" required></td>
                            <td><input type="text" name="period[]" class="form-control" required></td>
                            <td><input type="date" name="from_date[]" class="form-control" required></td>
                            <td><input type="date" name="to_date[]" class="form-control" required></td>
                            <td>
                                <select name="payment_type[]" class="form-control" required>
                                    <option value="Lease">Lease</option>
                                    <option value="Purchase">Purchase</option>
                                </select>
                            </td>
                            <td><input type="number" name="debt[]" class="form-control" required ></td>
                            <td><input type="number" name="unit_price[]" class="form-control" required ></td>
                            <td><input type="text" name="gross_value[]" class="form-control" readonly></td>
                            <td><input type="text" name="vat_value[]" class="form-control" readonly></td>
                            <td><input type="text" name="vat_inclusive[]" class="form-control" readonly></td>
                            <td><input type="text" name="total_value[]" class="form-control" readonly></td>
                            <td><button type="button" class="btn btn-danger btn-sm" onclick="removeRow(this)">Remove</button></td>
                        </tr>`;
                    $('#items-body').append(row);
                }

                function removeRow(button) {
                    $(button).closest('tr').remove();
                    updateGrandTotal();
                }

                function calculateRowTotal(input) {
                    const row = $(input).closest('tr');
                    const debt = parseFloat(row.find('input[name="debt[]"]').val()) || 0;
                    const unitPrice = parseFloat(row.find('input[name="unit_price[]"]').val()) || 0;
                    const grossValue = debt * unitPrice;
                    const vatValue = grossValue * 0.18; // Assume 18% VAT rate
                    const vatInclusive = grossValue + vatValue;
                    const totalValue = grossValue + vatValue;

                    row.find('input[name="gross_value[]"]').val(grossValue.toFixed(2));
                    row.find('input[name="vat_value[]"]').val(vatValue.toFixed(2));
                    row.find('input[name="vat_inclusive[]"]').val(vatInclusive.toFixed(2));
                    row.find('input[name="total_value[]"]').val(totalValue.toFixed(2));

                    updateGrandTotal();
                }

                function updateGrandTotal() {
                    let grandTotal = 0;
                    $('input[name="total_value[]"]').each(function() {
                        const value = parseFloat($(this).val()) || 0;
                        grandTotal += value;
                    });
                    $('#grandTotal').text(grandTotal.toFixed(2));
                }

                function getDefaultDueDate() {
                    const today = new Date();
                    today.setDate(today.getDate() + 30); // Default due date is 30 days from today
                    return today.toISOString().split('T')[0];
                }

                function loadItems(items) {
                    clearItems();
                    items.forEach(item => {
                        addItemRow();
                        const row = $('#items-body tr:last-child');
                        row.find('input[name="item_description[]"]').val(item.description);
                        row.find('input[name="number_of_cars[]"]').val(item.number_of_cars);
                        row.find('input[name="period[]"]').val(item.period);
                        row.find('input[name="from_date[]"]').val(item.from_date);
                        row.find('input[name="to_date[]"]').val(item.to_date);
                        row.find('select[name="payment_type[]"]').val(item.payment_type);
                        row.find('input[name="debt[]"]').val(item.debt);
                        row.find('input[name="unit_price[]"]').val(item.unit_price);
                        calculateRowTotal(row.find('input[name="debt[]"]')[0]);
                    });
                }

                function clearItems() {
                    $('#items-body').empty();
                }
            </script>
        </div>
    </main>

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
