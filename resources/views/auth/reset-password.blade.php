<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            max-width: 400px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
         .card-header {
            background-color:  #e1e3e6;
            color: white;
            border-radius: 10px 10px 0 0;
            text-align: center;
            padding: 1px;
        }
        .card-body {
            padding: 20px;
        }
        .btn-primary {
            background-color: #075e8d;
            border-color: #075e8d;
        }
        .btn-primary:hover {
            background-color: #064e7d;
            border-color: #064e7d;
        }
        .form-group label {
            font-weight: bold;
        }
        .required::after {
            content: "*";
            color: red;
            margin-left: 0.2em;
        }
        .text-center {
            text-align: center;
        }
        .alert {
            margin-top: 20px;
        }
        @media (max-width: 50   6px) {
            .card {
                margin: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-50" style="margin-top:100px">
        <div class="card shadow-lg">
            <div class="card-header" style="color:#075e8d">
              {{-- <img src="/images/logo.png" alt="Logo" class="logo"> --}}
                {{-- <h1 class="text-center">Reset Password</h1> --}}
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @elseif(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <form action="{{ route('password.reset') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="required">Email:</label>
                        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="required">New Password:</label>
                        <input id="password" type="password" name="password" class="form-control" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="required">Confirm New Password:</label>
                        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
                    <br>
                    <a href="{{ route('login') }}" class="d-block text-center mt-3">
                     Login here
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
