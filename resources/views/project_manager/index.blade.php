<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>TeraVTS</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="assets1/img/kaiadmin/logo.png" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets1/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets1/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets1/css/plugins.min.css" />
    <link rel="stylesheet" href="assets1/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="assets1/css/demo.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="white">
            <div class="sidebar-logo">
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="assets1/img/kaiadmin/logo.png" alt="navbar brand" class="navbar-brand" height="60" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-item active">
                            <a data-bs-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>TeraVTS</p>
                            </a>
                            <div class="collapse" id="dashboard">
                                <ul class="nav nav-collapse"></ul>
                            </div>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Components</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts">
                                <i class="fas fa-users-cog"></i>
                                <p>Project Manager</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">
                                    <li><a href="devices"><span class="sub-item">Device</span></a></li>
                                    <li><a href="checklists"><span class="sub-item">CheckupList</span></a></li>
                                    <li><a href="/device_requisitions"><span class="sub-item">Dispatch</span></a></li>
                                    <li><a href="return_device"><span class="sub-item">DeviceReturn</span></a></li>
                                    <li><a href="installations"><span class="sub-item">Installation</span></a></li>
                                    <li><a href="jobcards"><span class="sub-item">Jobcard</span></a></li>
                                    <li><a href="jobcard_attachments"><span class="sub-item">Attachments</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarLayouts">
                                <i class="fas fa-chart-line"></i>
                                <p>Reports</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="sidebarLayouts">
                                <ul class="nav nav-collapse">
                                    <li><a href="payment_reports"><span class="sub-item">Payment</span></a></li>
                                    <li><a href="daily_weekly_reports"><span class="sub-item">Daily</span></a></li>
                                    <li><a href="invoices"><span class="sub-item">Invoice</span></a></li>
                                    <li><a href=""><span class="sub-item">Incident</span></a></li>
                                    <li><a href=""><span class="sub-item">Tampering</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="assets1/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                </div>
                <div class="container">
                    <div class="page-inner">
                        <div class="d-flex align-items-right align-items-md-center flex-column flex-md-row pt-2 pb-4"></div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div class="icon-big text-center icon-primary bubble-shadow-small">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-0 ms-sm-0">
                                                <p class="card-category"><i class=""></i> Welcome, {{ auth()->user()->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                                    <i class="fas fa-user-check"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Total Users: Four</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Cards Start Here -->
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div class="icon-big text-center icon-warning bubble-shadow-small">
                                                    <i class="fas fa-cog"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Pending Checklists</p>
                                                    <h4 class="card-title">3</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div class="icon-big text-center icon-success bubble-shadow-small">
                                                    <i class="fas fa-tasks"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Active Devices</p>
                                                    <h4 class="card-title">5</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Cards End Here -->
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                                    <i class="fas fa-signal"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Total Checklists</p>
                                                    <h4 class="card-title">12</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div class="icon-big text-center icon-danger bubble-shadow-small">
                                                    <i class="fas fa-exclamation-triangle"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Dispatched Job Cards</p>
                                                    <h4 class="card-title">2</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Recent Activity</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>No recent activity recorded.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Notifications</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>No new notifications.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Files -->
    <script src="assets1/js/core/jquery.3.5.1.min.js"></script>
    <script src="assets1/js/core/popper.min.js"></script>
    <script src="assets1/js/core/bootstrap.min.js"></script>
    <script src="assets1/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets1/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="assets1/js/plugin/moment/moment.min.js"></script>
    <script src="assets1/js/plugin/fullcalendar/fullcalendar.min.js"></script>
    <script src="assets1/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="assets1/js/plugin/chartist/chartist.min.js"></script>
    <script src="assets1/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
    <script src="assets1/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <script src="assets1/js/plugin/summernote/summernote.min.js"></script>
    <script src="assets1/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="assets1/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
    <script src="assets1/js/plugin/pace/pace.min.js"></script>
    <script src="assets1/js/plugin/select2/select2.full.min.js"></script>
    <script src="assets1/js/atlantis.min.js"></script>
</body>

</html>
