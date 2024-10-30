
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vehicle plate number</title>
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
        .chart-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 40px;
        }
        .chart-container canvas {
            margin: 20px;
            max-width: 300px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h4 class="mb-4 text-center">Track Vehicle</h4>
        <form id="trackForm" action="{{ route('trackvehicle.search') }}" method="POST">
            @csrf
            <!-- Search Field Row -->
            <div class="row justify-content-center mb-5">
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <input type="text" class="form-control" name="query" placeholder="Search by Plate Number" required>
                    </div>
                </div>
            </div>

            <!-- Buttons Row -->
            <div class="row mb-3">
                <div class="col-md-6 text-right">
                    <button type="submit" class="btn btn-primary">Track</button>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">Back</button>
                </div>
            </div>

            <!-- Date Range Row (Initially Hidden) -->
            <div id="date-range-section" class="row mb-3" style="display: none;">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="from-date">Date From:</label>
                        <input type="date" class="form-control" name="from_date" id="from-date">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="to-date">Date To:</label>
                        <input type="date" class="form-control" name="to_date" id="to-date">
                    </div>
                </div>
            </div>
        </form>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">VTS RealTime</h5>
              <a href="https://vts.latra.go.tz/V3/index.cfm?do=login.spad" class="btn btn-primary" target="_blank">Live Track</a>
            </div>
          </div>

        @if(isset($results))
            <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>User</th>
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
                                <td colspan="7" class="text-center">No Platenumber or vehicle found</td>
                            </tr>
                        @else
                            @foreach($results as $checklist)
                                <tr>
                                    <td>{{ $checklist->user ? $checklist->user->name : 'N/A' }}</td>
                                    <td>{{ $checklist->vehicle ? $checklist->vehicle->vehicle_name : 'N/A' }}</td>
                                    <td>{{ $checklist->customer ? $checklist->customer->customername : 'N/A' }}</td>
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

            <div class="chart-container">
                <!-- Pie Chart for RBT Status -->
                <canvas id="rbtStatusChart"></canvas>

                <!-- Pie Chart for Battery Status -->
                <canvas id="batteryStatusChart"></canvas>

                <!-- Bar Chart for Vehicles, Customers, Incidents -->
                <canvas id="countsChart"></canvas>
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            // On form submission, show the date range section
            $('#trackForm').on('submit', function(event) {
                // Display the date range section
                $('#date-range-section').slideDown();
            });

            // Data for charts will be calculated from filtered results

            // RBT Status Data
            const rbtStatuses = ['Very Good', 'Good', 'Bad'];
            const rbtCounts = { 'Very Good': 10, 'Good': 10, 'Bad': 10 };

            @if(isset($results))
                @foreach($results as $checklist)
                    if ("{{ $checklist->rbt_status }}" in rbtCounts) {
                        rbtCounts["{{ $checklist->rbt_status }}"]++;
                    }
                @endforeach
            @endif

            // Battery Status Data
            const batteryStatuses = ['Good', 'Bad', 'Very Good'];
            const batteryCounts = { 'Good': 12, 'Bad': 5, 'Very Good': 10 };

            @if(isset($results))
                @foreach($results as $checklist)
                    if ("{{ $checklist->batt_status }}" in batteryCounts) {
                        batteryCounts["{{ $checklist->batt_status }}"]++;
                    }
                @endforeach
            @endif

            // Vehicle and Customer Counts Data
            const vehicleCount = @if(isset($vehicleCount)) {{ $vehicleCount }} @else 0 @endif;
            const customerCount = @if(isset($customerCount)) {{ $customerCount }} @else 0 @endif;
            const incidentCount = @if(isset($results)) {{ count($results) }} @else 0 @endif;

            // Pie Chart for RBT Status
            new Chart(document.getElementById('rbtStatusChart'), {
                type: 'pie',
                data: {
                    labels: rbtStatuses,
                    datasets: [{
                        data: [rbtCounts['Very Good'], rbtCounts['Good'], rbtCounts['Bad']],
                        backgroundColor: ['#36A2EB', '#FFCE56', '#FF6384'],
                    }]
                },
                options: {
                    plugins: {
                        legend: { display: true },
                        title: { display: true, text: 'RBT Status Distribution' }
                    }
                }
            });

            // Pie Chart for Battery Status
            new Chart(document.getElementById('batteryStatusChart'), {
                type: 'pie',
                data: {
                    labels: batteryStatuses,
                    datasets: [{
                        data: [batteryCounts['Good'], batteryCounts['Bad'], batteryCounts['Very Good']],
                        backgroundColor: ['#4CAF50', '#FF9800', '#2196F3'],
                    }]
                },
                options: {
                    plugins: {
                        legend: { display: true },
                        title: { display: true, text: 'Battery Status Distribution' }
                    }
                }
            });

            // Bar Chart for Vehicle, Customer, Incident Counts
            new Chart(document.getElementById('countsChart'), {
                type: 'bar',
                data: {
                    labels: ['Vehicles', 'Customers', 'Incidents'],
                    datasets: [{
                        label: 'Counts',
                        data: [vehicleCount, customerCount, incidentCount],
                        backgroundColor: ['#4CAF50', '#FF9800', '#2196F3'],
                    }]
                },
                options: {
                    plugins: {
                        legend: { display: true },
                        title: { display: true, text: 'Vehicle, Customer, and Incident Counts' }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                autoSkip: false
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
