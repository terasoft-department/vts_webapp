<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Reset Password</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* General body styling */
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

        /* Reset Password card styling */
        .reset-card {
            max-width: 400px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.064); /* Reduced opacity for transparency */
            border-radius: 15px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .reset-card:hover {
            transform: translateY(-5px);
            box-shadow: rgba(0, 0, 0, 0.2) 0px 10px 15px;
        }

        .card-body {
            padding: 20px;
        }

        /* Styled reset password text */
        .reset-title {
            font-size: 1.8rem;
            font-weight: bold;
            text-transform: uppercase;
            color: #075e8d;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            letter-spacing: 2px;
            text-align: center;
        }

        /* Input fields with icons */
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
            font-size: 1.2rem;
        }

        .form-group input {
            padding-left: 45px;
            height: 45px;
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
            background-color: #0c50c6dc; /* Solid Light Blue */

        }

        .text-center a {
            color: rgba(226, 226, 244, 0.833);
            text-decoration: none;
        }

        .text-center a:hover {
            text-decoration: underline;
        }

        @media (max-width: 706px) {
            .reset-card {
                margin: 20px;
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

        .reset-card {
            animation: cardSlideIn 0.5s ease-out;
        }
    </style>
</head>

<body>
    <div class="reset-card card">
        <!-- Reset Password Title -->
        <div class="reset-title">Reset Password</div>

        <!-- Form Section -->
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @elseif(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('password.reset') }}" method="POST">
                @csrf

                <!-- Email Input -->
                <div class="form-group">
                    <i class="fa fa-envelope"></i>
                    <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email" value="{{ old('email') }}" required>
                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <!-- New Password Input -->
                <div class="form-group">
                    <i class="fa fa-lock"></i>
                    <input id="password" type="password" name="password" class="form-control" placeholder="Enter your new password" required>
                    @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                </div>

                <!-- Confirm Password Input -->
                <div class="form-group">
                    <i class="fa fa-lock"></i>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Confirm your new password" required>
                </div>

                <!-- Reset Button -->
                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                <br>

                <!-- Login Link -->
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}">Login here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
