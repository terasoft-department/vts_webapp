<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Card Attachment Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/kaiadmin.min.css"> <!-- Adjust path as needed -->
    <link rel="stylesheet" href="assets1/css/demo.css"> <!-- Adjust path as needed -->
    <style>
        body {
            background-color: #f8f9fa; /* Light background for contrast */
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .img-fluid {
            border-radius: 8px;
            margin-bottom: 1rem; /* Add spacing between images */
        }
    </style>
</head>

<body>

    <div class="container mt-3">
        <h1 class="text-center mb-4">Job Card Attachment Details</h1>

        <div class="card">
            <div class="card-header">
                Attachment ID: {{ $attachment->attach_id }}
            </div>
            <div class="card-body">
                <p><strong>Pre-Attachment Picture:</strong></p>
                <img src="{{ asset('storage/' . $attachment->preattachment_picture) }}" alt="Pre-Attachment" class="img-fluid">

                <p><strong>Post-Attachment Picture:</strong></p>
                <img src="{{ asset('storage/' . $attachment->postattachment_picture) }}" alt="Post-Attachment" class="img-fluid">

                <p><strong>Car Plate Evidence Picture:</strong></p>
                <img src="{{ asset('storage/' . $attachment->car_plateEvidence_picture) }}" alt="Car Plate Evidence" class="img-fluid">

                <p><strong>Tempering Picture:</strong></p>
                <img src="{{ asset('storage/' . $attachment->tempering_picture) }}" alt="Tempering" class="img-fluid">
            </div>
        </div>

        <a href="{{ route('jobcard_attachments.index') }}" class="btn btn-secondary btn-block mt-3">Back to Attachments List</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
