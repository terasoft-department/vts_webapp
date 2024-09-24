<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create New Report</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 10px;
        }
        label {
            font-weight: bold;
        }
        .btn {
            background-color: #1382ab;
            color: white;
        }
    </style>
</head>
<body>
    <div class="logout-btn">
        <a href="\daily_weekly_reports" class="ml-8 text-#4E77B4C1">
            <i class="fa fa-home"></i> Back
        </a>
    </div>

    <div class="container">
        <h1>Create New Report</h1>
        <form id="trackDebtsForm" method="POST" enctype="multipart/form-data" action="{{ route('daily_weekly_reports.store') }}">
            @csrf
            <div class="form-group">
                <label for="reported_date">Reported Date</label>
                <input type="date" name="reported_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="customer_name">Customer Name</label>
                <input type="text" name="customer_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="bus_plate_number">Bus Plate Number</label>
                <input type="text" name="bus_plate_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" name="contact" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="reported_by">Reported By</label>
                <input type="text" name="reported_by" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="reported_case">Reported Case</label>
                <input type="text" name="reported_case" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="assigned_technician">Assigned Technician</label>
                <input type="text" name="assigned_technician" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="findings">Findings</label>
                <textarea name="findings" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="response_status">Response Status</label>
                <input type="text" name="response_status" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="response_date">Response Date</label>
                <input type="date" name="response_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
