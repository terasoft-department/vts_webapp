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

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
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
                  <p>check out Procedures</p>
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
              <span class="d-none d-md-block dropdown-toggle ps-2"></i> Welcome, {{ auth()->user()->name }}</span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6></i> Welcome, {{ auth()->user()->name }}</h6>

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
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="/auth/login">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>


          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="monitoring_officer">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Monitoring Officer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="assignments">
                <i class="bi bi-circle"></i><span>Assignment</span>
              </a>
            </li>
            <li>
                <a href="Mcustomers">
                  <i class="bi bi-circle"></i><span>Customers</span>
                </a>
              </li>
            <li>
            <li>
                <a href="mcvehicles">
                  <i class="bi bi-circle"></i><span>Vehicles</span>
                </a>
              </li>
            <li>
              <a href="jobcards2">
                <i class="bi bi-circle"></i><span>JobCard</span>
              </a>
            </li>
            <li>
              <a href="checklists">
                <i class="bi bi-circle"></i><span>Routing Checkup List</span>
              </a>
            </li>
            <li>
              <a href="trackvehicle">
                <i class="bi bi-circle"></i><span>Track Vehicle</span>
              </a>
            </li>
            <li>
              <a href="cdebts">
                <i class="bi bi-circle"></i><span>Customer Debts</span>
              </a>
            </li>
          </ul>
        </li><!-- End Charts Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-journal-text"></i><span>Reports</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="daily_weekly_reports">
                <i class="bi bi-circle"></i><span>Daily</span>
              </a>
            </li>
            <li>
              <a href="reports">
                <i class="bi bi-circle"></i><span>Monthly</span>
              </a>
            </li>
            <li>
              <a href="tampering">
                <i class="bi bi-circle"></i><span>Tampering</span>
              </a>
            </li>
          </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="\auth/login">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li><!-- End Login Page Nav -->

  </aside><!-- End Sidebar-->
<main id="main" class="main">
    <div class="text-left">
        <h5>Daily and Weekly Reports</h5>
        <br>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="btn-group">
            <!-- Trigger modal for creating a new report -->
            <button class="btn btn-primary" data-toggle="modal" data-target="#createReportModal">
                <i class="fas fa-plus-circle"></i> Create
            </button>
        </div>
        <br>

        <div class="table-container">
            <br>
            <table id="dailyWeeklyReports" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>R.Date</th>
                        <th>CustName</th>
                        <th>PlateNumber</th>
                        <th>Contact</th>
                        <th>Reported By</th>
                        <th>Reported Case</th>
                        <th>Assigned Techn</th>
                        <th>Inspection report</th>
                        <th>Response Status</th>
                        <th>Response Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reports as $report)
                    <tr>
                        <td>{{ $report->id }}</td>
                        <td>{{ $report->reported_date }}</td>
                        <td>{{ optional($customers->find($report->customer_id))->customername ?? 'Unknown' }}</td>
                        {{-- <td>{{ $report->customername }}</td> --}}
                        <td>{{ $report->bus_plate_number }}</td>
                        <td>{{ $report->contact }}</td>
                        <td>{{ $report->reported_by }}</td>
                        <td>{{ $report->reported_case }}</td>
                        <td>{{ $report->assigned_technician }}</td>
                        <td>
                            @if ($report->findings)
                                <a href="{{ asset('uploads/' . $report->findings) }}" target="_blank">
                                    <i class="fas fa-file-pdf text-danger"></i> View Inspection Report
                                </a>
                            @else
                                N/A
                            @endif
                        </td>

                        <td>{{ $report->response_status }}</td>
                        <td>{{ $report->response_date }}</td>
                        <td class="action-icons">
                            <!-- Trigger modal for editing -->
                            <span class="icon" data-toggle="modal" data-target="#editReportModal{{ $report->id }}">
                                <i class="fas fa-edit"></i>
                            </span>

                            <!-- Delete form -->
                            <form action="{{ route('daily_weekly_reports.destroy', $report->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <span class="icon" onclick="if(confirm('Are you sure you want to delete this report?')) { this.closest('form').submit(); }">
                                    <i class="fas fa-trash"></i>
                                </span>
                            </form>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editReportModal{{ $report->id }}" tabindex="-1" role="dialog" aria-labelledby="editReportModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Report</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('daily_weekly_reports.update', $report->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <label for="reported_date">Reported Date</label>
                                            <input type="date" class="form-control" id="reported_date" name="reported_date" value="{{ old('reported_date', $report->reported_date) }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_id">Customer Name</label>
                                            <select class="form-control" id="customer_id" name="customer_id" required>
                                                <option value="">Select a customer</option>
                                                @foreach($customers as $customer)
                                                    <option value="{{ $customer->customer_id }}">{{ $customer->customername }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="bus_plate_number">Bus Plate Number</label>
                                            <input type="text" class="form-control" id="bus_plate_number" name="bus_plate_number" value="{{ old('bus_plate_number', $report->bus_plate_number) }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="contact">Contact</label>
                                            <input type="text" class="form-control" id="contact" name="contact" value="{{ old('contact', $report->contact) }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="reported_by">Reported By</label>
                                            <input type="text" class="form-control" id="reported_by" name="reported_by" value="{{ old('reported_by', $report->reported_by) }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="reported_case">Reported Case</label>
                                            <input type="text" class="form-control" id="reported_case" name="reported_case" value="{{ old('reported_case', $report->reported_case) }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="assigned_technician">Assigned Technician</label>
                                            <input type="text" class="form-control" id="assigned_technician" name="assigned_technician" value="{{ old('assigned_technician', $report->assigned_technician) }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="findings">Inspection report (PDF, Word, Excel)</label>
                                            <input type="file" name="findings" class="form-control-file" accept=".pdf, .docx, .xlsx" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="response_status">Response Status</label>
                                            <input type="text" class="form-control" id="response_status" name="response_status" value="{{ old('response_status', $report->response_status) }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="response_date">Response Date</label>
                                            <input type="date" class="form-control" id="response_date" name="response_date" value="{{ old('response_date', $report->response_date) }}" required>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
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

    <!-- Create Report Modal -->
    <div class="modal fade" id="createReportModal" tabindex="-1" role="dialog" aria-labelledby="createReportModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('daily_weekly_reports.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="container">

                                    <div class="form-group">
                            <label for="reported_date">Reported Date</label>
                            <input type="date" name="reported_date" class="form-control" required>
                        </div>


                        <div class="form-group">
                            <label for="customer_id">Customer Name</label>
                            <select class="form-control" id="customer_id" name="customer_id" required>
                                <option value="">Select a customer</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->customer_id }}">{{ $customer->customername }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="bus_plate_number">Bus Plate Number</label>
                            <input type="text" name="bus_plate_number" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact</label>
                            <input type="text" name="contact" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="reported_by">Reported By</label>
                            <input type="text" name="reported_by" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="reported_case">Reported Case</label>
                            <input type="text" name="reported_case" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="assigned_technician">Assigned Technician</label>
                            <input type="text" name="assigned_technician" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="findings">Inspection report (PDF, Word, Excel)</label>
                            <input type="file" name="findings" class="form-control-file" accept=".pdf, .docx, .xlsx" required>
                        </div>

                        <div class="form-group">
                            <label for="response_status">Response Status</label>
                            <input type="text" name="response_status" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="response_date">Response Date</label>
                            <input type="date" name="response_date" class="form-control" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Report</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Open the modal to create a new report
    function openCreateReportModal() {
        $('#trackDebtsForm').attr('action', '{{ route('daily_weekly_reports.store') }}');
        $('#trackDebtsForm').attr('method', 'POST');
        $('#createReportModal').modal('show');
    }

    // Open the modal to edit an existing report
    function openEditReportModal(report) {
        // Set form action for update with PUT method
        $('#trackDebtsForm').attr('action', '/daily_weekly_reports/' + report.id);
        $('#trackDebtsForm').append('<input type="hidden" name="_method" value="PUT">');
        $('#createReportModal .modal-title').text('Edit Report');

        // Populate the form fields with existing data
        $('#reported_date').val(report.reported_date);
        $('#customer_id').val(report.customer_id);
        $('#bus_plate_number').val(report.bus_plate_number);
        $('#contact').val(report.contact);
        $('#reported_by').val(report.reported_by);
        $('#reported_case').val(report.reported_case);
        $('#assigned_technician').val(report.assigned_technician);
        $('#response_status').val(report.response_status);
        $('#response_date').val(report.response_date);
        // If report findings PDF exists
        if (report.findings) {
            $('#findingsLink').html(`<a href="${report.findings}" target="_blank"><i class="fas fa-file-pdf text-danger"></i></a>`);
        } else {
            $('#findingsLink').html('No file');
        }

        $('#createReportModal').modal('show');
    }

    // Reset the modal form and title when closed
    $('#createReportModal').on('hidden.bs.modal', function () {
        $('#trackDebtsForm').trigger('reset'); // Reset the form
        $('#createReportModal .modal-title').text('New Report');
        $('#trackDebtsForm').find('input[name="_method"]').remove(); // Remove PUT method if exists
        $('#findingsLink').html(''); // Clear findings link
    });
</script>


    <!-- JS and dependencies -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>


<br>
    <script>

        $(document).ready(function() {
            $('#dailyWeeklyReports').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'print'],
                responsive: true
            });
        });
    </script>

    <br>
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
