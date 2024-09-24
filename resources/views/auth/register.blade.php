<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-card {
            max-width: 400px;
            margin: 50px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #e1e3e6;
            color: white;
            border-radius: 10px 10px 0 0;
            text-align: center;
            padding: 20px;
        }
        .card-body {
            padding: 20px;
        }
        .spinner-border {
            width: 1rem;
            height: 1rem;
            border-width: .2em;
        }
        .spinner-container {
            display: none;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
        }
        .btn-loading {
            position: relative;
            padding-right: 3rem; /* Adjust to fit the spinner */
        }
        .required::after {
            content: "*";
            color: red;
            margin-left: 0.2em;
        }
        .logo {
            display: block;
            margin: 0 auto 20px auto;
            width: 100px; /* Adjust as needed */
        }
        @media (max-width: 576px) {
            .register-card {
                margin: 20px;
            }
            .logo {
                width: 80px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-card card shadow-lg">
            <div class="card-header">
                <img src="../images/logo.png" alt="Logo" class="logo">
                <h2 class="mb-0"><span style="font-family: italic;color:#075e8d">Vehicle ATS</span></h2>
            </div>
            <div class="card-body">

                 <form action="{{ route('register') }}" method="POST" id="registerForm">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="required">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>

                    </div>
                      <div class="form-group">
                        <label for="role" class="required">Role:</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="project_manager" {{ old('role') == 'project_manager' ? 'selected' : '' }}>Project Manager</option>
                            <option value="monitoring_officer" {{ old('role') == 'monitoring_officer' ? 'selected' : '' }}>Monitoring Officer</option>
                            <option value="accounting_officer" {{ old('role') == 'accounting_officer' ? 'selected' : '' }}>Accounting Officer</option>
                            <option value="technician" {{ old('role') == 'technician' ? 'selected' : '' }}>Technician</option>
                             <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>System admin</option>
                        </select>

                    </div>
                      <div class="form-group">
                        <label for="password" class="required">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>

                    </div>
                     <div class="form-group">
                        <label for="email" class="required">Email:</label>
                              <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>

                       </div>
                     <button type="submit" class="btn btn-block btn-loading" style="background-color:#075e8d;color:white">
                        Register
                        </button>
                    </button>
                </form>
               Already have an account?!! <a href="{{ route('login') }}" class="d-block mt-3 text-center">Login</a>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function() {
            const button = document.querySelector('.btn-loading');
            const spinner = document.querySelector('.spinner-container');
            button.disabled = true; // Disable the button to prevent multiple submissions
            spinner.style.display = 'inline-block'; // Show the spinner
        });
    </script>
</body>
</html>
