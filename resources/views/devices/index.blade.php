<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devices Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body { background-color: #f8f9fa; }
        .card { border: none; border-radius: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); }
        .table th, .table td { vertical-align: middle; }
        .btn { border-radius: 20px; }
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
                <h1 class="m-0">Devices</h1>
            </div>
            <div class="card-body">
                <button class="btn btn-light mb-3" data-toggle="modal" data-target="#createDeviceModal">
                    <i class="fas fa-plus"></i> Add Device
                </button>
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>IMEI Number</th>
                            <th>Category</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($devices as $device)
                            <tr>
                                <td>{{ $device->imei_number }}</td>
                                <td>{{ $device->category }}</td>
                                <td>{{ $device->total }}</td>
                                <td>
                                    <button class="btn btn-warning" data-toggle="modal" data-target="#editDeviceModal{{ $device->device_id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <form action="{{ route('devices.destroy', $device->device_id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editDeviceModal{{ $device->device_id }}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Device</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('devices.update', $device->device_id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="imei_number">IMEI Number</label>
                                                    <input type="text" class="form-control" name="imei_number" value="{{ $device->imei_number }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="category">Category</label>
                                                    <select class="form-control" name="category" required>
                                                        <option value="master" {{ $device->category == 'master' ? 'selected' : '' }}>Master</option>
                                                        <option value="slave" {{ $device->category == 'slave' ? 'selected' : '' }}>Slave</option>
                                                        <option value="accessories" {{ $device->category == 'accessories' ? 'selected' : '' }}>Accessories</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="total">Total Quantity</label>
                                                    <input type="number" class="form-control" name="total" value="{{ $device->total }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </form>
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

    <!-- Create Modal -->
    <div class="modal fade" id="createDeviceModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Device</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('devices.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="imei_number">IMEI Number</label>
                            <input type="text" class="form-control" name="imei_number" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control" name="category" required>
                                <option value="master">Master</option>
                                <option value="slave">Slave</option>
                                <option value="accessories">Accessories</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="total">Total Quantity</label>
                            <input type="number" class="form-control" name="total" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Device</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
