<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css">
    <style>
        body {
            padding-top: 56px; /* Offset for the fixed header */
            font-family: 'Arial', sans-serif;
        }
        .header {
            box-shadow: rgba(29, 76, 157, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;
            background-color: white; /* Header color */
            color: white;
            padding: 10px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        .sidebar {
            position: fixed;
            top: 56px;
            left: 0;
            width: 250px;
            height: 100%;
            background-color: #f8f9fa; /* Sidebar color */
            padding-top: 20px;
            border-right: 1px solid #ddd;
            z-index: 999;
        }
        .main-content {
            margin-left: 60px;
            padding: 20px;
        }
        .form-container {
            max-width: 400px; /* Adjust to set a maximum width for the form */
            margin: 0 auto; /* Center the form */
        }
        .form-control {
            height: 38px; /* Adjust height for smaller text boxes */
            font-size: 14px; /* Adjust font size */
        }
        button.btn-custom {
            background-color: #4E77B4; /* Button color */
            color: white;
        }
        button.btn-custom:hover {
            background-color: #3b5c8a; /* Darker shade on hover */
        }
    </style>
</head>
<body>
    @auth
    <header class="header d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <a href="/admnDashboard" style="color:white">
                <img src="/images/logo.png" alt="Logo" class="logo" style="width: 70px; height: auto;">
            </a>
        </div>
    </header>

    <div class="sidebar text-center">
        <hr style="margin-top:50px;background-color:#4E77B4">
        <a href="/users">
            <i class="fa fa-home" aria-hidden="true"></i> Home
        </a>
    </div>

    <div class="main-content">
        <div class="container-fluid" style="margin-top:3rem">
            <h2 class="text-center">Edit User</h2> <!-- Centered heading -->
            <div class="form-container">
                <form method="POST" action="{{ route('users.update', $user->user_id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        <small class="form-text text-muted">Leave blank to keep the current password.</small>
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="project_manager" {{ $user->role == 'project_manager' ? 'selected' : '' }}>Project Manager</option>
                            <option value="monitoring_officer" {{ $user->role == 'monitoring_officer' ? 'selected' : '' }}>Monitoring Officer</option>
                            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="accounting_officer" {{ $user->role == 'accounting_officer' ? 'selected' : '' }}>Accounting Officer</option>
                            <option value="technician" {{ $user->role == 'technician' ? 'selected' : '' }}>Technician</option>
                        </select>
                        @error('role')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-custom">Update</button>
                    <a href="{{ route('users.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    @endauth

    @guest
    <div class="container">
        <h1 class="mt-2">404 PAGE ERROR</h1>
    </div>
    @endguest

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
