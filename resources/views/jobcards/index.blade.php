<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Cards List - TeraVTS</title>
    <link rel="icon" href="assets1/img/kaiadmin/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('assets1/css/bootstrap.min.css') }}">
    <!-- Include Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 120px;
        }
        .container {
            background-color: white;
            padding: 1px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1500px;
            margin: 0 auto;
        }
        .table thead th {
            background-color: #1382ab;
            color: white;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #ddd !important;
        }
        .btn-view {
            color: #1382ab;
        }
        h1.page-title {
            color: #1382ab;
            font-weight: bold;
        }
    </style>
</head>
<body>
     <!-- Home Button -->
     <a href="\project_manager" class="btn btn-primary">
        <i class="fas fa-home"></i> Back
    </a>
    <br><br>
    <div class="container">
        <h1 class="page-title mb-4">Job Cards List</h1>

        <!-- Display success message if any -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Job Cards Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer Name</th>
                            <th>Contact Person</th>
                            <th>Title</th>
                            <th>Mobile Number</th>
                            <th>Physical Location</th>
                            <th>Device ID</th>
                            <th>Problem Reported</th>
                            <th>Date Attended</th>
                            <th>Nature of Problem at Site</th>
                            <th>Service Type</th>
                            <th>Work Done</th>
                            <th>Vehicle Registration No.</th>
                            <th>Client Comment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobcards as $jobcard)
                            <tr>
                                <td>{{ $jobcard->jobcard_id }}</td>
                                <td>{{ $jobcard->customername }}</td>
                                <td>{{ $jobcard->contact_person }}</td>
                                <td>{{ $jobcard->title }}</td>
                                <td>{{ $jobcard->mobile_number }}</td>
                                <td>{{ $jobcard->physical_location }}</td>
                                <td>{{ $jobcard->device_id }}</td>
                                <td>{{ $jobcard->problem_reported }}</td>
                                <td>{{ $jobcard->date_attended }}</td>
                                <td>{{ $jobcard->natureOf_ProblemAt_site }}</td>
                                <td>{{ $jobcard->service_type }}</td>
                                <td>{{ $jobcard->work_done }}</td>
                                <td>{{ $jobcard->vehicle_regno }}</td>
                                <td>{{ $jobcard->client_comment }}</td>
                                <td>
                                    <a href="{{ route('jobcards.approve', $jobcard->jobcard_id) }}" class="btn-view" title="View Job Card">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets1/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets1/js/core/bootstrap.min.js') }}"></script>
</body>
</html>
