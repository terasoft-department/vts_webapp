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
                <a href="new_installations2">
                  <i class="bi bi-circle"></i><span>New Installation</span>
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
  <!-- Main Content -->

  <main id="main" class="main">
    <div class="main-content">
        <div class="container mt-2" style="margin-top:50px">
            <h4 class="text-center" style="color:#4177fd;">Assignments</h4><br>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Add New Assignment Button -->
            <div class="text-left mb-2">
                <button class="btn btn-primary" data-toggle="modal" data-target="#assignmentModal" onclick="openCreateModal()">
                    <i class="bi bi-plus-circle"></i> Create Assignment
                </button>
            </div>

            <div class="row mb-3">
                <div class="col-md-8">
                    <form method="GET" action="{{ route('assignments.index') }}">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search by customer or plate number..." aria-label="Search assignments" value="{{ request()->query('search') }}">
                            <button class="btn btn-primary" type="submit" style="background-color:#4177fd;">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Assignments Table -->
            <table class="table table-bordered table-striped mt-2 text-left">
                <thead style="background-color: #4177fd; color: white;">
                    <tr>
                        <th>No</th>
                        <th>Plate Number</th>
                        <th>Customer</th>
                        <th>Customer Phone</th>
                        <th>Customer Debt</th>
                        <th>Location</th>
                        <th>Reporter</th>
                        <th>Incident Reported</th>
                        {{-- <th>Attachment</th> --}}
                        <th>Assigned By</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assignments as $index => $assignment)
                    <tr>
                        <td>{{ $assignments->firstItem() + $index }}</td>
                        <td>{{ $assignment->plate_number }}</td>
                        <td>{{ optional($customers->find($assignment->customer_id))->customername ?? 'Unknown' }}</td>
                        <td>{{ $assignment->customer_phone }}</td>
                        <td>{{ number_format($assignment->customer_debt, 2) }} TZS</td>
                        <td>{{ $assignment->location }}</td>
                        <td>{{ optional($users->find($assignment->user_id))->name ?? 'Unknown' }}</td>
                        <td>{{ $assignment->case_reported }}</td>
                        {{-- <td>
                            @if ($assignment->attachment)
                                <a href="{{ asset('uploads/' . $assignment->attachment) }}" target="_blank">
                                    <i class="fas fa-file-pdf text-danger"></i>
                                </a>
                            @endif
                        </td> --}}
                        <td>{{ $assignment->assigned_by }}</td>

                        <td>{{ucfirst($assignment->status) }}</td>
                        <td class="text-center">
                            <button class="btn btn-edit" onclick="openEditModal({{ $assignment }})">
                                <i class="fas fa-edit"></i>
                            </button>
                            <form action="{{ route('assignments.destroy', $assignment->assignment_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this assignment?')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    {{ $assignments->links() }}
                </ul>
            </nav> --}}

            <!-- Modal for Adding/Editing Assignment -->
            <div class="modal fade" id="assignmentModal" tabindex="-1" role="dialog" aria-labelledby="assignmentModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: #4177fd;color:white;">
                            <h5 class="modal-title" id="modalTitle">Create Assignment</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- Dynamic Form for Creating/Updating Assignment -->
                            <form id="assignmentForm" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" id="assignment_id" name="assignment_id">

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
                                    <label for="customer_phone">Customer Phone</label>
                                    <input type="text" class="form-control" id="customer_phone" name="customer_phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="customer_debt">Customer Debt (TZS)</label>
                                    <input type="text" class="form-control" id="customer_debt" name="customer_debt" required>
                                </div>
                                <div class="form-group">
                                    <label for="plate_number">Plate Number</label>
                                    <input type="text" class="form-control" id="plate_number" name="plate_number" placeholder="Enter plate number" required>
                                    {{-- <select class="form-control" id="plate_number" name="plate_number" required>
                                        <option value="">Select a plate number</option>
                                        @foreach($vehicles as $vehicle)
                                            <option value="{{ $vehicle->plate_number }}">{{ $vehicle->plate_number }}</option>
                                        @endforeach
                                    </select> --}}
                                </div>

                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <input type="text" class="form-control" id="location" name="location" required>
                                </div>
                                <div class="form-group">
                                    <label for="user_id">Reporter</label>
                                    <select class="form-control" id="user_id" name="user_id" required>
                                        <option value="">Select reporter</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="case_reported">Case Reported</label>
                                    <select class="form-control" id="case_reported" name="case_reported" required>
                                        <option value="" disabled selected>Select a case</option>
                                        <option value="New Installation">New Installation</option>
                                        <option value="skipping">Skipping</option>
                                        <option value="black_box_data">Black box Data</option>
                                        <option value="device_tampering">Device Tampering</option>
                                        <option value="start_stop_journey">Start and stop Journey</option>
                                        <option value="internal_battery_low">Internal Battery Low</option>
                                        <option value="external_battery_disconnected">External Battery Disconnected</option>
                                        <option value="rollover_detection">Rollover Detection</option>
                                        <option value="emergence_trigger">Emergence Trigger</option>
                                        <option value="panic_button">Panic Button</option>
                                        <option value="non_transmission">Non Transmission</option>
                                    </select>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="attachment">Attachment (PDF)</label>
                                    <input type="file" class="form-control-file" id="attachment" name="attachment" accept=".pdf">
                                </div> --}}
                                <div class="form-group">
                                    <label for="assigned_by">Assigned By</label>
                                    <input type="text" class="form-control" id="assigned_by" name="assigned_by" required>
                                </div>

                                {{-- <div class="form-group">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="status" name="status" required>
                                </div> --}}

                                <button type="submit" class="btn btn-primary" style="background-color: #4177fd;color:white">Save Assignment</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- Include jQuery and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

        <script>
            // Open the modal to create a new assignment
            function openCreateModal() {
                $('#assignmentForm').attr('action', '{{ route('assignments.store') }}');
                $('#assignmentForm').attr('method', 'POST');
                $('#modalTitle').text('Create Assignment');
                $('#assignmentForm').trigger('reset'); // Reset the form
                $('#assignmentModal').modal('show');
            }

            // Open the modal to edit an existing assignment
            function openEditModal(assignment) {
                // Set form action for update with PUT method
                $('#assignmentForm').attr('action', '/assignments/' + assignment.assignment_id);
                $('#assignmentForm').append('<input type="hidden" name="_method" value="PUT">');
                $('#modalTitle').text('Edit Assignment');

                // Populate the form fields with existing data
                $('#assignment_id').val(assignment.assignment_id);
                $('#customer_id').val(assignment.customer_id);
                $('#customer_phone').val(assignment.customer_phone);
                $('#customer_debt').val(assignment.customer_debt);
                $('#plate_number').val(assignment.plate_number);
                $('#location').val(assignment.location);
                $('#user_id').val(assignment.user_id);
                $('#case_reported').val(assignment.case_reported);
                $('#assigned_by').val(assignment.assigned_by);
                $('#status').val(assignment.status);
                $('#assignmentModal').modal('show');
            }
        </script>
    </div>

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
</main>
</body>
</html>
