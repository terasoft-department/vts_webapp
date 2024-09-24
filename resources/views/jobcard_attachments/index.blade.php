<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Card Attachments</title>
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
        <div class="d-flex justify-content-between mb-3">
            <h1>Job Card Attachments</h1>
        </div>

        <div class="card">
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pre-Attachment Picture</th>
                            <th>Post-Attachment Picture</th>
                            <th>Car Plate Evidence Picture</th>
                            <th>Tempering Picture</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($attachments as $attachment)
                            <tr>
                                <td>{{ $attachment->attach_id }}</td>
                                <td><img src="{{ asset('storage/' . $attachment->preattachment_picture) }}" width="100"></td>
                                <td><img src="{{ asset('storage/' . $attachment->postattachment_picture) }}" width="100"></td>
                                <td><img src="{{ asset('storage/' . $attachment->car_plateEvidence_picture) }}" width="100"></td>
                                <td><img src="{{ asset('storage/' . $attachment->tempering_picture) }}" width="100"></td>
                                <td>
                                    <a href="{{ route('jobcard_attachments.show', $attachment->attach_id) }}" class="btn btn-info">
                                        <i class="fas fa-eye"></i> View
                                    </a>
                                </td>
                            </tr>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editAttachmentModal{{ $attachment->attach_id }}" tabindex="-1" role="dialog" aria-labelledby="editAttachmentModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Edit Attachment</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('jobcard_attachments.update', $attachment->attach_id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="preattachment_picture">Pre-Attachment Picture</label>
                                                    <input type="file" class="form-control" name="preattachment_picture" required>
                                                </div>
                                                <!-- Add more fields as needed for the attachment -->
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
    <div class="modal fade" id="createAttachmentModal" tabindex="-1" role="dialog" aria-labelledby="createAttachmentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Attachment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('jobcard_attachments.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="preattachment_picture">Pre-Attachment Picture</label>
                            <input type="file" class="form-control" name="preattachment_picture" required>
                        </div>
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
