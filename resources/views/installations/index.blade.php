<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installations Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
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
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h1 class="m-0">Installations</h1>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Plate Number</th>
                            <th>IMEI Number</th>
                            <th>Customer Name</th>
                            <th>Amount Paid</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($installations as $installation)
                            <tr>
                                <td>{{ $installation->plate_number }}</td>
                                <td>{{ $installation->imei_number }}</td>
                                <td>{{ $installation->customername }}</td>
                                <td>{{ $installation->amount_paid }}</td>
                                <td>{{ $installation->status }}</td>
                                <td>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#viewInstallationModal{{ $installation->installation_id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </td>
                            </tr>

                            <!-- View Modal -->
                            <div class="modal fade" id="viewInstallationModal{{ $installation->installation_id }}" tabindex="-1" role="dialog" aria-labelledby="viewInstallationModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Installation Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Plate Number:</strong> {{ $installation->plate_number }}</p>
                                            <p><strong>IMEI Number:</strong> {{ $installation->imei_number }}</p>
                                            <p><strong>Customer Name:</strong> {{ $installation->customername }}</p>
                                            <p><strong>Amount Paid:</strong> {{ $installation->amount_paid }}</p>
                                            <p><strong>Status:</strong> {{ $installation->status }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
