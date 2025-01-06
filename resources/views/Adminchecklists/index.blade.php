<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CheckList Search</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.5/css/buttons.dataTables.min.css">
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

        /* Hide search form when printing */
        @media print {
            #search-form {
                display: none;
            }
        }
    </style>
</head>
<body>
    
<!-- Search Form Section -->
<div id="search-form" class="container mt-2">
    <h4 class="mb-4 text-center">Search CheckLists</h4>
    <form action="{{ route('Adminchecklists.search') }}" method="POST">
        @csrf
        <div class="row align-items-center">
            <div class="col-auto">
                <label for="from_date" class="form-label mb-0">From Date:</label>
                <input type="date" class="form-control form-control-sm" name="from_date" required>
            </div>
            <div class="col-auto">
                <label for="to_date" class="form-label mb-0">To Date:</label>
                <input type="date" class="form-control form-control-sm" name="to_date" required>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary btn-sm">Search</button>
            </div>
            <div class="col-auto">
                <button type="button" class="btn btn-secondary btn-sm" onclick="window.history.back();">Back</button>
            </div>
        </div>
    </form>
</div>


    <!-- Results Section -->
    @if(isset($results))
        <div class="container mt-3">
            <div class="table-responsive">
                <table id="invoiceTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Technician</th>
                            <th>Vehicle Name</th>
                            <th>Customer Name</th>
                            <th>Plate Number</th>
                            <th>RPT Status</th>
                            <th>Battery Status</th>
                            <th>Check Date</th>
                            <th>Checked AT</th>
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
                                    <td>{{ $checklist->user ? $checklist->user->name : 'N/A' }}</td>
                                    <td>{{ $checklist->vehicle ? $checklist->vehicle->vehicle_name : 'N/A' }}</td>
                                    <td>{{ $checklist->customer ? $checklist->customer->customername : 'N/A' }}</td>
                                    <td>{{ $checklist->plate_number }}</td>
                                    <td>{{ $checklist->rbt_status }}</td>
                                    <td>{{ $checklist->batt_status }}</td>
                                    <td>{{ $checklist->check_date }}</td>
                                    <td>
                                        @php
                                            // Convert the created_at time to Nairobi local time
                                            $nairobiTime = $checklist->created_at->setTimezone('Africa/Nairobi');
                                        @endphp
                                        {{ $nairobiTime->format('H:i:s') }}

                                        @php
                                            $hour = $nairobiTime->format('H');
                                        @endphp
                                        @if ($hour >= 5 && $hour < 12)
                                            <span>Morning</span>
                                        @elseif ($hour >= 12 && $hour < 17)
                                            <span>Afternoon</span>
                                        @elseif ($hour >= 17 && $hour < 21)
                                            <span>Evening</span>
                                        @else
                                            <span>Night</span>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

            <!-- Print Button -->

        </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.5/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            // Initialize DataTable with export options
            var table = $('#invoiceTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'print'
                ]
            });
        });
    </script>
</body>
</html>
