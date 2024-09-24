<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accountant </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            padding-top: 56px; /* Offset for the fixed header */
        }
        .header {
            box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
            background-color:#0c5378;
            color: white;
            padding: 10px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .header .dropdown-menu {
            right: 0;
            left: auto;
        }
        .sidebar {
            position: fixed;
            top: 56px;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #0c5378;
            padding-top: 20px;
            border-right: 1px solid #ddd;
            z-index: 999;
        }
        .sidebar a {
            display: block;
            padding: 10px 15px;
            color: #fff;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #ddd;
            color: #333;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-header {
            height:40px;
            background-color: #0c5378;
            color: white;
        }
        .navbar-toggler {
            border: none;
        }
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
            .main-content {
                margin-left: 0;
            }
            .mobile-menu {
                display: block;
                position: fixed;
                top: 56px;
                left: 0;
                width: 100%;
                background-color: #f8f9fa;
                border-bottom: 1px solid #ddd;
                padding: 10px;
                z-index: 1000;
            }
            .mobile-menu a {
                display: block;
                padding: 10px 15px;
                color: #333;
                text-decoration: none;
            }
            .mobile-menu a:hover {
                background-color: #ddd;
            }
        }
    </style>
</head>
<body>
    @auth
    <!--------------header here------------>
    <header class="header d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="accounting_officer" class="ml-3 text-white"><i class="fa fa-home"></i> Home</a>
        </div>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i> Welcome, {{ auth()->user()->name }}
            </button>
            <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" style="background-color:#0a5d89;color:white">
                <a class="dropdown-item" href="#" style="color:white">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:white">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <!----------ends here-------------------->
    </header>

    <div class="sidebar text-center">
    <hr style="margin-top:50px;background-color:white">
        <a href="#" data-toggle="modal" data-target="#modal1" >
            <i class="fas fa-list"></i> List1
        </a>
        <a href="#" data-toggle="modal" data-target="#modal2">
            <i class="fas fa-list"></i> List2
        </a>
        <a href="#" data-toggle="modal" data-target="#modal3">
            <i class="fas fa-list"></i> List3
        </a>
         <a href="#" data-toggle="modal" data-target="#modal4">
            <i class="fas fa-list"></i> List4
        </a>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header"  style="background-color:#0a5d89;color:white">
                    <h5 class="modal-title" id="modal1Label">List1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="#"><p>Sub-list1w44w</p></a>
                   <a href="#"><p>Sub-list1ww44</p></a>
                    <a href="#"><p>Sub-list1ww44</p></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#0a5d89;color:white">
                    <h5 class="modal-title" id="modal2Label">List2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                       <a href="#"><p>Sub-list1w44w</p></a>
                   <a href="#"><p>Sub-list1ww44</p></a>
                    <a href="#"><p>Sub-list1ww44</p></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#0a5d89;color:white">
                    <h5 class="modal-title" id="modal3Label">List3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                      <a href="#"><p>Sub-list1w44w</p></a>
                   <a href="#"><p>Sub-list1ww44</p></a>
                    <a href="#"><p>Sub-list1ww44</p></a>
                </div>
            </div>
        </div>
    </div>

     <!-- Modal 4-->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#0a5d89;color:white">
                    <h5 class="modal-title" id="modal3Label">List4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                      <a href="#"><p>Sub-list1w44w</p></a>
                   <a href="#"><p>Sub-list1ww44</p></a>
                    <a href="#"><p>Sub-list1ww44</p></a>
                </div>
            </div>
        </div>
    </div>

    <!-------main body----------------------------->
    <div class="main-content">

    <!------form one here---------------->
        <div class="container-fluid" style="margin-top:50px">
        <h4 class="text-center" style="color:#0c5378;">Please fill this form</h4><br>
            <div class="row">
                <div class="col-md-6">

         <div class="card">
            <div class="card-header">
                <label class="form-label">Form one</label>
            </div>
                <div class="card-body">
                <input type="text" class="form-cotrol" name="finame" placeholder="" required style="width:100%">
                </div>
             </div>
           </div>

                <div class="col-md-6">
                   <div class="card">
                       <div class="card-header">
                               <label class="form-label">Form one</label>
                        </div>

                        <div class="card-body">
                         <input type="text" class="form-cotrol" name="finame" placeholder="" required style="width:100%">
                        </div>
                    </div>
                </div>
            </div>

               <!------row two here-------------->
                <div class="row">
                <div class="col-md-12">
                  <div class="card">
                        <div class="card-header">
                               <label class="form-label">Form one</label>
                        </div>
                        <div class="card-body">
                         <input type="text" class="form-cotrol" name="finame" placeholder="" required style="width:100%">
                        </div>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn btn-block" style="background-color:#0c5378;width:100px;margin-left:20px;color:white">Submit</button>
            </div>

       <!----ends here------------->

        </div>
    </div>
    @endauth
    <!-----ends here--------------------->

    @guest
    <div class="container">
        <h1 class="mt-5">You need to be logged in to view this page</h1>
    </div>
    @endguest

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
