<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <title>TeraVTS</title>
    <link rel="icon" href="assets1/img/kaiadmin/logo.png" type="image/x-icon" />

    <!-- Bootstrap and dependencies -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
            <!-- Home Button -->
            <a href="\monitoring_officer" class="btn btn-primary">
                <i class="fas fa-home"></i> Home
            </a>

        </div>
    <div class="container mt-5">
        <h1 class="mb-4">Assignments</h1>

        <!-- Button to open the create modal -->
        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#createAssignmentModal">
            <i class="fas fa-plus"></i> Create Assignment
        </button>

        <!-- Export Buttons -->
        <div class="mb-3">
            <button class="btn btn-success" id="exportCSV"><i class="fas fa-file-csv"></i> Export CSV</button>
            <button class="btn btn-info" id="exportPDF"><i class="fas fa-file-pdf"></i> Export PDF</button>
            <button class="btn btn-warning" id="exportExcel"><i class="fas fa-file-excel"></i> Export Excel</button>
            <button class="btn btn-secondary" id="printTable"><i class="fas fa-print"></i> Print</button>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th><input type="checkbox" id="selectAll"></th>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Plate Number</th>
                    <th>Location</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($assignments as $assignment)
                <tr>
                    <td><input type="checkbox" class="selectAssignment" value="{{ $assignment->assignment_id }}"></td>
                    <td>{{ $assignment->assignment_id }}</td>
                    <td>{{ $assignment->customer_id }}</td>
                    <td>{{ $assignment->plate_number }}</td>
                    <td>{{ $assignment->location }}</td>
                    <td>{{ $assignment->status }}</td>
                    <td>
                        <!-- View button -->
                        <button class="btn btn-info" data-toggle="modal" data-target="#viewAssignmentModal{{ $assignment->assignment_id }}">
                            <i class="fas fa-eye"></i>
                        </button>

                        <!-- Edit button -->
                        <button class="btn btn-warning" data-toggle="modal" data-target="#editAssignmentModal{{ $assignment->assignment_id }}">
                            <i class="fas fa-edit"></i>
                        </button>

                        <!-- Delete form -->
                        <form action="{{ route('assignments.destroy', $assignment->assignment_id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>

                <!-- View Modal -->
                <div class="modal fade" id="viewAssignmentModal{{ $assignment->assignment_id }}" tabindex="-1" role="dialog" aria-labelledby="viewAssignmentLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">View Assignment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Customer:</strong> {{ $assignment->customer_id }}</p>
                                <p><strong>Plate Number:</strong> {{ $assignment->plate_number }}</p>
                                <p><strong>Location:</strong> {{ $assignment->location }}</p>
                                <p><strong>Status:</strong> {{ $assignment->status }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal -->
                <div class="modal fade" id="editAssignmentModal{{ $assignment->assignment_id }}" tabindex="-1" role="dialog" aria-labelledby="editAssignmentLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Assignment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('assignments.update', $assignment->assignment_id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="customer_id">Customer</label>
                                        <input type="text" class="form-control" name="customer_id" value="{{ $assignment->customer_id }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="plate_number">Plate Number</label>
                                        <input type="text" class="form-control" name="plate_number" value="{{ $assignment->plate_number }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" name="location" value="{{ $assignment->location }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control" name="status" value="{{ $assignment->status }}" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>

        <!-- Create Assignment Modal -->
        <div class="modal fade" id="createAssignmentModal" tabindex="-1" role="dialog" aria-labelledby="createAssignmentLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Assignment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('assignments.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="customer_name">Customer</label>
                                <input type="text" class="form-control" name="customer_name" required>
                            </div>

                            <div class="form-group">
                                <label for="plate_number">Plate Number</label>
                                <input type="text" class="form-control" name="plate_number" required>
                            </div>

                            <div class="form-group">
                                <label for="location">Location</label>
                                <input type="text" class="form-control" name="location" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" name="status" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Assignment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Select/Deselect all checkboxes
        document.getElementById('selectAll').onclick = function() {
            var checkboxes = document.getElementsByClassName('selectAssignment');
            for (var checkbox of checkboxes) {
                checkbox.checked = this.checked;
            }
        };

        // Print functionality
        document.getElementById('printTable').onclick = function() {
            window.print();
        };

        // Export functionality (implement according to your backend logic)
        document.getElementById('exportCSV').onclick = function() {
            // Your CSV export logic here
        };
        document.getElementById('exportPDF').onclick = function() {
            // Your PDF export logic here
        };
        document.getElementById('exportExcel').onclick = function() {
            // Your Excel export logic here
        };
    </script>
</body>

</html>
