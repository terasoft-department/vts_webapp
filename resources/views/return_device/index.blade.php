<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Devices List - TeraVTS</title>
    <link rel="icon" href="assets1/img/kaiadmin/logo.png" type="image/x-icon" />

    <!-- Fonts and Icons -->
    <link rel="stylesheet" href="assets1/css/fonts.min.css">
    <script src="assets1/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ["assets1/css/fonts.min.css"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/kaiadmin.min.css">
    <link rel="stylesheet" href="assets1/css/plugins.min.css">

    <!-- Demo CSS (for visual purposes) -->
    <link rel="stylesheet" href="assets1/css/demo.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="white">
            <div class="sidebar-logo">
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="assets1/img/kaiadmin/logo.png" alt="TeraVTS" height="60">
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="sidebar-wrapper">
                <div class="sidebar-content">
                    <ul class="nav">
                        <li class="nav-item active">
                            <a href="project_manager">
                                <i class="fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Main Content -->
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h1 class="page-title">Return Devices List</h1>
                    </div>

                    <!-- Success Message -->
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <!-- Devices Table -->
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Customer Name</th>
                                        <th>Device Category</th>
                                        <th>Device Number</th>
                                        <th>Vehicle Number</th>
                                        <th>Reason</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($returnDevices as $returnDevice)
                                    <tr>
                                        <td>{{ $returnDevice->return_id }}</td>
                                        <td>{{ $returnDevice->customername }}</td>
                                        <td>{{ $returnDevice->device_category }}</td>
                                        <td>{{ $returnDevice->devicenumber }}</td>
                                        <td>{{ $returnDevice->vehiclenumber }}</td>
                                        <td>{{ $returnDevice->reason }}</td>
                                        <td>{{ $returnDevice->status }}</td>
                                        <td>
                                            <a href="{{ route('return_device.show', $returnDevice->return_id) }}" class="btn btn-primary btn-sm">Approve/Reject</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->

        </div>
        <!-- End Main Content -->
    </div>
    <!-- Core JS -->
    <script src="assets1/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets1/js/core/popper.min.js"></script>
    <script src="assets1/js/core/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets1/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets1/js/plugin/datatables/datatables.min.js"></script>

    <!-- Custom JS -->
    <script src="assets1/js/kaiadmin.min.js"></script>
    <!-- Approve/Reject Device Return Modal -->
<div class="modal fade" id="deviceReturnModal" tabindex="-1" role="dialog" aria-labelledby="deviceReturnModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deviceReturnModalLabel">Approve or Reject Device Return</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="deviceReturnForm" action="{{ route('return_device.update', $returnDevice->return_id) }}" method="POST" class="form-container">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="customername">Customer Name</label>
                        <input type="text" id="customername" name="customername" class="form-control form-control-sm" readonly>
                    </div>
                    <div class="form-group">
                        <label for="device_category">Device Category</label>
                        <input type="text" id="device_category" name="device_category" class="form-control form-control-sm" readonly>
                    </div>
                    <div class="form-group">
                        <label for="devicenumber">Device Number</label>
                        <input type="text" id="devicenumber" name="devicenumber" class="form-control form-control-sm" readonly>
                    </div>
                    <div class="form-group">
                        <label for="vehiclenumber">Vehicle Number</label>
                        <input type="text" id="vehiclenumber" name="vehiclenumber" class="form-control form-control-sm" readonly>
                    </div>
                    <div class="form-group">
                        <label for="reason">Reason for Return</label>
                        <textarea id="reason" name="reason" class="form-control form-control-sm" readonly></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" name="status" class="form-control form-control-sm" required>
                            <option value="approved">Approved</option>
                            <option value="not approved">Not Approved</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success btn-block mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>

