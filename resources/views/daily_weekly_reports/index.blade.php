<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily and Weekly Reports - TeraVTS</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/kaiadmin.min.css"> <!-- Adjust path as needed -->
    <link rel="stylesheet" href="assets1/css/demo.css"> <!-- Adjust path as needed -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 1rem;
        }

        .container {
            background-color: white;
            padding: 1px;
            border-radius: 12px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 1800px; /* Adjust max width */
            margin: 20px auto; /* Center container with margin */
        }

        h1 {
            color: #406daf;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .btn-group {
            text-align: center;
            margin-bottom: 20px;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Reduce font size for the table and its contents */
        table {
            font-size: 12px; /* Adjust the font size for the table */
        }

        th, td {
            padding: 8px; /* Add some padding for readability */
        }

        th {
            font-weight: bold;
        }

        .btn-sm {
            font-size: 10px; /* Smaller font size for buttons */
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <h1>Daily and Weekly Reports</h1>

        <div class="btn-group">
            <a href="{{ route('daily_weekly_reports.create') }}" class="btn btn-primary">Create New Report</a>
            <a href="\project_manager" class="btn btn-primary">
                <i class="fas fa-home"></i> Back
            </a>
        </div>

        <table id="dailyWeeklyReports" class="table table-bordered table-striped">
            <thead class="thead-light">
                <tr>
                    <th>R.Date</th>
                    <th>CustName</th>
                    <th>PlateNumber</th>
                    <th>Contact</th>
                    <th>Reported By</th>
                    <th>Reported Case</th>
                    <th>Assigned Techn</th>
                    <th>Findings</th>
                    <th>Response Status</th>
                    <th>Response Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                <tr>
                    <td>{{ $report->reported_date }}</td>
                    <td>{{ $report->customer_name }}</td>
                    <td>{{ $report->bus_plate_number }}</td>
                    <td>{{ $report->contact }}</td>
                    <td>{{ $report->reported_by }}</td>
                    <td>{{ $report->reported_case }}</td>
                    <td>{{ $report->assigned_technician }}</td>
                    <td>{{ $report->findings }}</td>
                    <td>{{ $report->response_status }}</td>
                    <td>{{ $report->response_date }}</td>
                    <td>
                        <a href="{{ route('daily_weekly_reports.edit', $report->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('daily_weekly_reports.destroy', $report->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Report">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- External JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dailyWeeklyReports').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
                responsive: true
            });
        });
    </script>
</body>

</html>
