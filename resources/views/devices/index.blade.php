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
        <a class="nav-link " href="project_manager">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Project Manager</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="customers">
                  <i class="bi bi-circle"></i><span>Customer</span>
                </a>
              </li>
          <li>
            <a href="devices">
              <i class="bi bi-circle"></i><span>Device</span>
            </a>
          </li>
          <li>
            <li>
                <a href="vehicles">
                  <i class="bi bi-circle"></i><span>Vehicle</span>
                </a>
              </li>
              <li>
            <a href="AccountAssignment">
              <i class="bi bi-circle"></i><span>Assignments</span>
            </a>
          </li>

          <li>
            <a href="device_requisitions">
              <i class="bi bi-circle"></i><span>Device dispatch</span>
            </a>
          </li>

          <li>
            <a href="dispatched-history">
              <i class="bi bi-circle"></i><span>Dispatched devices</span>
            </a>
          </li>

          <li>
            <a href="return_device">
              <i class="bi bi-circle"></i><span>DeviceReturn</span>
            </a>
          </li>

          <li>
            <a href="jobcards">
              <i class="bi bi-circle"></i><span>Jobcard</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

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
    <div class="container mt-2">
        <h5 class="text-center">Device Stocks & Deductions</h5>
        <br>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- 2x2 Grid Layout for Card and Bar Graph -->
        <div class="row g-4 mb-2"> <!-- Use g-0 to remove gutters between columns -->
            <!-- Device Count Card -->
            <div class="col-md-3 mb-2">
                <div class="card text-center border-primary shadow card-hover">
                    <div class="card-header bg- text-black">
                        <b>List of Devices</b>
                    </div>
                    <div class="card-body bg-white">
                        <p class="card-text">Master Devices:<strong> {{ $mergedCounts['master']['total_count'] ?? 0 }}</strong></p>
                        <p class="card-text">I_Button Devices:<strong> {{ $mergedCounts['I_button']['total_count'] ?? 0 }}</strong></p>
                        <p class="card-text">Buzzer Devices:<strong> {{ $mergedCounts['buzzer']['total_count'] ?? 0 }}</strong></p>
                        <p class="card-text">Panic Button Devices:<strong> {{ $mergedCounts['panick_button']['total_count'] ?? 0 }}</strong></p>
                      <hr>
                       <!-- Total counts -->
                       <p class="card-text">Total Devices:<strong> {{ $totalDevices }}</strong></p>

                    </div>

                </div>
            </div>

            <div class="col-md-4 mb-2">
                <div class="card text-center border-primary shadow card-hover">
                    <div class="card-header bg- text-black">
                        <b>List of Dispatches</b>
                    </div>
                    <div class="card-body bg-white">

                        <p class="card-text">Master Dispatched Devices:<strong> {{ $mergedCounts['master']['dispatched_count'] ?? 0 }}</strong> </p>
                        <p class="card-text">I_Button Dispatched Devices: <strong> {{ $mergedCounts['I_button']['dispatched_count'] ?? 0 }}</strong></p>
                        <p class="card-text">Buzzer Dispatched Devices: <strong> {{ $mergedCounts['buzzer']['dispatched_count'] ?? 0 }}</strong></p>
                        <p class="card-text">Panic Button Dispatched Devices:<strong>  {{ $mergedCounts['panick_button']['dispatched_count'] ?? 0 }}</strong></p>
                          <hr>
                        <p class="card-text">Total Dispatched Devices:<strong> {{ $totalDispatched }}</strong></p>
                    </div>

                </div>
            </div>

            <!-- Bar Graph Canvas -->
            <div class="col-md-5 mb-2">
                <canvas id="deviceBarChart"></canvas>
            </div>
        </div>

        <!-- Search and Date Filters -->
        <form method="GET" action="{{ route('devices.index') }}" class="row g-2 mb-2">
            <div class="col-md-2">
                <label for="search-input" class="form-label">Device Number</label>
                <input type="text" name="search" class="form-control" placeholder="Search. Number" id="search-input" value="{{ request()->input('search') }}">
            </div>
            <div class="col-md-2 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-30"><i class="bi bi-filter"></i> Filter</button>
            </div>
        </form>

        <!-- Add New Device Button -->
        <div class="text-left mb-2">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDeviceModal">
                <i class="bi bi-plus-circle"></i> Add Device
            </button>
        </div>

        <!-- Device Table -->
        <table class="table table-bordered mt-2 text-left">
            <thead>
                <tr>
                    <th>Device Number</th>
                    <th>Device Type</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($devices as $device)
                <tr>
                    <td>{{ $device->imei_number }}</td>
                    <td>{{ $device->category }}</td>
                    <td>
                        <button class="btn {{ $device->dispatched_status === 'dispatched' ? 'btn-primary' : 'btn-warning' }}">
                            {{ $device->dispatched_status === 'dispatched' ? 'Dispatched' : 'On Stock' }}
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-" data-bs-toggle="modal" data-bs-target="#editDeviceModal-{{ $device->device_id }}">
                            <i class="bi bi-pencil"></i>
                            Edit
                        </button>
                        {{-- <form action="{{ route('devices.destroy', $device->device_id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-">
                                <i class="bi bi-box-arrow-up"></i> <!-- Change the icon here to represent dispatch -->
                                Dispatch
                            </button>
                        </form> --}}
                    </td>
                </tr>


                <!-- Edit Device Modal -->
                <div class="modal fade" id="editDeviceModal-{{ $device->device_id }}" tabindex="-1" aria-labelledby="editDeviceLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editDeviceLabel">Edit Device</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('devices.update', $device->device_id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group mb-3">
                                        <label for="imei_number">Device Number</label>
                                        <input type="text" name="imei_number" class="form-control" value="{{ $device->imei_number }}" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="category">Device Type</label>
                                        <select name="category" class="form-control" required>
                                            <option value="master" {{ $device->category === 'master' ? 'selected' : '' }}>Master</option>
                                            <option value="I_button" {{ $device->category === 'I_button' ? 'selected' : '' }}>I Button</option>
                                            <option value="buzzer" {{ $device->category === 'buzzer' ? 'selected' : '' }}>Buzzer</option>
                                            <option value="panick_button" {{ $device->category === 'panick_button' ? 'selected' : '' }}>Panic Button</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update Device</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>

        <!-- Add Device Modal -->
        <div class="modal fade" id="addDeviceModal" tabindex="-1" aria-labelledby="addDeviceLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDeviceLabel">Add Device</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('devices.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group mb-3">
                                <label for="imei_number">Device Number</label>
                                <input type="text" name="imei_number" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="category">Device Type</label>
                                <select name="category" class="form-control" required>
                                    <option value="">Select</option>
                                    <option value="master">Master</option>
                                    <option value="I_button">I Button</option>
                                    <option value="buzzer">Buzzer</option>
                                    <option value="panick_button">Panic Button</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add Device</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- JavaScript for Bar Chart -->
<script>
    const deviceCounts = {
        master: {{ $mergedCounts['master']['total_count'] ?? 0 }},
        I_button: {{ $mergedCounts['I_button']['total_count'] ?? 0 }},
        buzzer: {{ $mergedCounts['buzzer']['total_count'] ?? 0 }},
        panick_button: {{ $mergedCounts['panick_button']['total_count'] ?? 0 }},
    };

    const dispatchedCounts = {
        master: {{ $mergedCounts['master']['dispatched_count'] ?? 0 }},
        I_button: {{ $mergedCounts['I_button']['dispatched_count'] ?? 0 }},
        buzzer: {{ $mergedCounts['buzzer']['dispatched_count'] ?? 0 }},
        panick_button: {{ $mergedCounts['panick_button']['dispatched_count'] ?? 0 }},
    };

    const totalDevices = deviceCounts.master + deviceCounts.I_button + deviceCounts.buzzer + deviceCounts.panick_button;
    const totalDispatchedDevices = dispatchedCounts.master + dispatchedCounts.I_button + dispatchedCounts.buzzer + dispatchedCounts.panick_button;

    const percentages = {
        master: ((deviceCounts.master / totalDevices) * 100) || 0,
        I_button: ((deviceCounts.I_button / totalDevices) * 100) || 0,
        buzzer: ((deviceCounts.buzzer / totalDevices) * 100) || 0,
        panick_button: ((deviceCounts.panick_button / totalDevices) * 100) || 0,
    };

    const dispatchedPercentages = {
        master: ((dispatchedCounts.master / totalDispatchedDevices) * 100) || 0,
        I_button: ((dispatchedCounts.I_button / totalDispatchedDevices) * 100) || 0,
        buzzer: ((dispatchedCounts.buzzer / totalDispatchedDevices) * 100) || 0,
        panick_button: ((dispatchedCounts.panick_button / totalDispatchedDevices) * 100) || 0,
    };

    const ctx = document.getElementById('deviceBarChart').getContext('2d');
    const deviceBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Master', 'I Button', 'Buzzer', 'Panic Button'],
            datasets: [
                {
                    label: 'Device Distribution (%)',
                    data: [percentages.master, percentages.I_button, percentages.buzzer, percentages.panick_button],
                    backgroundColor: '#007bff',
                },
                {
                    label: 'Dispatched Device Distribution (%)',
                    data: [dispatchedPercentages.master, dispatchedPercentages.I_button, dispatchedPercentages.buzzer, dispatchedPercentages.panick_button],
                    backgroundColor: '#28a745',
                }
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100,
                    stepSize: 20,  // Ensures y-axis increments by 20
                    title: {
                        display: true,
                        text: 'Percentage (%)'
                    },
                    ticks: {
                        stepSize: 20, // Display y-axis labels at 0, 20, 40, 60, 80, 100
                        callback: function(value) {
                            return value + '%'; // Add percentage sign to y-axis labels
                        }
                    }
                }
            }
        }
    });
</script>

    </div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

