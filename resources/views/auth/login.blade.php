<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        body {
            background: url('/images/bgbg.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .login-card {
            max-width: 400px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.064); /* Reduced opacity for transparency */
            border-radius: 15px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: rgba(0, 0, 0, 0.2) 0px 10px 15px;
        }

        .card-header {
            background-color: #ffffff00;
            text-align: center;
            padding: 20px;
        }

        .logo {
            display: block;
            margin: 0 auto 10px auto;
            width: 80px;
            height: auto;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            position: relative;
            margin-bottom: 20px;
        }

        .form-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            font-size: 1rem; /* Adjusted size for smaller icons */
        }

        .form-group input {
            padding-left: 40px;
            height: 45px;
        }

        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #6c757d;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 8px;
        }

        .form-control:focus {
            box-shadow: 0 0 5px rgba(11, 11, 255, 0.638);
            border-color: rgba(11, 11, 255, 0.638);
        }

        .btn-primary {
            background-color: #2B547E; /* Solid Light Blue */

            border: none;
            border-radius: 8px;
            height: 45px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: rgba(11, 11, 255, 0.638);
        }

        @media (max-width: 706px) {
            .login-card {
                margin: 20px;
            }

            .logo {
                width: 70px;
            }
        }

        /* Additional Animations for Card */
        @keyframes cardSlideIn {
            from {
                transform: translateY(-20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .login-card {
            animation: cardSlideIn 0.5s ease-out;
        }
    </style>
</head>

<body>
    <div class="login-card card">
        <div class="card-header">
            <a href="/"><img src="/images/logo.png" alt="Company Logo" class="logo"></a>
        </div>

        <div class="card-body">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ url('login') }}" method="POST" id="loginForm">
                @csrf

                <!-- Email Input -->
                <div class="form-group">
                    <i class="fa fa-envelope"></i>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" aria-label="Email" value="{{ old('email') }}" required>
                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <!-- Password Input with Show/Hide Toggle -->
                <div class="form-group">
                    <i class="fa fa-lock"></i>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Enter your secure password" required>
                    <i class="fa fa-eye toggle-password" id="togglePassword"></i>
                    @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <!-- Login Button -->
                <button type="submit" class="btn btn-primary btn-block">
                    Login
                </button>
                <br>

                <!-- Forgot Password Link -->
                <a href="password/reset" class="d-block mt-3 text-center">Forgot password?</a>
            </form>
        </div>
    </div>

    <script>
        // Show/Hide Password Toggle
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the icon
            togglePassword.classList.toggle('fa-eye');
            togglePassword.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
