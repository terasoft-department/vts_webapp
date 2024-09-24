<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckList Search</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .btn {
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <!-- Home Button -->
            <a href="\project_manager" class="btn btn-primary">
                <i class="fas fa-home"></i> Home
            </a>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="m-0">Search CheckLists</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('checklists.search') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="query" placeholder="Search by Vehicle Name, Category, or Plate Number" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>

                @if(isset($results))
                    <table class="table table-striped mt-3">
                        <thead>
                            <tr>
                                <th>Vehicle Name</th>
                                <th>Category</th>
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
                                        <td>{{ $checklist->vehicle_name }}</td>
                                        <td>{{ $checklist->category }}</td>
                                        <td>{{ $checklist->customername }}</td>
                                        <td>{{ $checklist->plate_number }}</td>
                                        <td>{{ $checklist->rbt_status }}</td>
                                        <td>{{ $checklist->batt_status }}</td>
                                        <td>{{ $checklist->check_date }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

    <script>
        function clearSearchTables() {
            // Clear input field and refresh the page to reset the table
            document.querySelector('input[name="query"]').value = '';
            location.reload(); // Refresh the page to clear the results
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
