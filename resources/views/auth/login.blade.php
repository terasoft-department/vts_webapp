<!DOCTYPE html>
<html lang="en">
     <!-- Favicons -->

     <link href="assets/img/apple-touch-icon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background: url('/images/login-bg.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            max-width: 400px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9); /* White background with transparency */
            border-radius: 15px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }
        .card-header {
            background-color: ##1382abc7;
            color: white;
            border-radius: 15px 15px 0 0;
            text-align: center;
            padding: 30px;
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
            right: 80px;
            top: 50%;
            transform: translateY(-50%);
        }
        .btn-loading {
            position: relative;
            padding-right: 3rem;
        }
        .required::after {
            content: "*";
            color: rgb(177, 28, 28);
            margin-left: 0.2em;
        }
        .logo {
            display: block;
            margin: 0 auto 10px auto;
            width: 100px;
            height: 6rem;
        }
        @media (max-width: 706px) {
            .login-card {
                margin: 20px;
            }
            .logo {
                width: 80px;
            }
        }
    </style>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
    <div class="login-card card">
        <div class="card-header">
            <a href="/"><img src="../images/logo.png" alt="Company Logo" class="logo"></a>
        </div>
        <div class="card-body">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ url('login') }}" method="POST" id="loginForm">
                @csrf
                <div class="form-group">
                    <label for="email" class="required">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" aria-label="Email" value="{{ old('email') }}" required>
                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="password" class="required">Password:</label>
                    <div class="input-group">
                    </div> <div class="form-group">
                        <input id="password" type="password" name="password" class="form-control" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="input-group-append">
                            <span class="input-group-text" id="togglePassword" style="cursor:pointer;">
                                <i class="fa fa-eye-slash"></i>
                            </span>
                        </div>
                    </div>
                    </div>
                    @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                <button type="submit" class="btn btn-primary btn-block">
                    Login
                    <div class="spinner-container">
                        <div class="spinner-border text-light" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </div>
                </button>
            </form>
            <br>
            <a href="password/reset" class="d-block mt-3 text-center">Forgot password?</a>
        </div>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function (e) {
            const password = document.getElementById('password');
            const icon = this.querySelector('i');
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                password.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        });

        // Show spinner on form submit
        document.getElementById('loginForm').addEventListener('submit', function() {
            const button = document.querySelector('.btn-loading');
            const spinner = document.querySelector('.spinner-container');
            button.disabled = true;
            spinner.style.display = 'inline-block';
        });
    </script>
</body>
</html>
<footer style="position: absolute; bottom: 0; width: 100%; text-align: center; padding: 10px 0; background-color: #0a5d89f8; color: white; font-size: 14px;">
    Copyright © 2024 Teratech. All Rights Reserved. Copyright by <a href="https://teratech.co.tz" style="color: #fff; text-decoration: none;">teratech.co.tz</a>.
</footer>

