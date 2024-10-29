<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CheckList Search</title>
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
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        .btn {
            background-color: #4177fd;
            color: white;
        }
        .text-danger {
            font-size: 0.9em;
        }
        .card-header {
            background-color: #4177fd;
            color: white;
            border-radius: 10px 10px 0 0;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <h4 class="mb-4 text-center">Search CheckLists</h4>
        <form action="{{ route('checklists.search') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="query" placeholder="Search by Vehicle No, Customer Name" required>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
        </form>

        @if(isset($results))
            <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>UserID</th>
                            <th>Vehicle Name</th>
                            <th>Customer Name</th>
                            <th>Plate Number</th>
                            <th>RBT Status</th>
                            <th>Battery Status</th>
                            <th>Check Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($results->isEmpty())
                            <tr>
                                <td colspan="7" class="text-center">No CheckLists found</td>
                            </tr>
                        @else
                            @foreach($results as $checklist)
                                <tr>
                                    <td>{{ $checklist->user->name ?? 'N/A' }}</td>
                                    <td>{{ $checklist->vehicle->vehicle_name ?? 'N/A' }}</td>
                                    <td>{{ $checklist->customer->customername ?? 'N/A' }}</td>
                                    <td>{{ $checklist->plate_number }}</td>
                                    <td>{{ $checklist->rbt_status }}</td>
                                    <td>{{ $checklist->batt_status }}</td>
                                    <td>{{ $checklist->check_date }}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
