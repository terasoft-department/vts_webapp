<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve or Reject Device Return</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/kaiadmin.min.css"> <!-- Adjust path as needed -->
    <link rel="stylesheet" href="assets1/css/demo.css"> <!-- Adjust path as needed -->
    <style>
        .form-container {
            padding: 1rem; /* Reduced padding for a more compact look */
            border-radius: 12px;
            background-color: #f8f9fa; /* Light background for contrast */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 20rem; /* Set max width */
            margin: auto; /* Center the form horizontally */
        }
    </style>
</head>

<body>

    <div class="container mt-3">
        <h5 class="text-center mb-3">Approve or Reject Device Return</h5>
        <form action="{{ route('return_device.update', $returnDevice->return_id) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="customername">Customer Name</label>
                <input type="text" id="customername" name="customername" class="form-control form-control-sm" value="{{ $returnDevice->customername }}" readonly>
            </div>

            <div class="form-group">
                <label for="device_category">Device Category</label>
                <input type="text" id="device_category" name="device_category" class="form-control form-control-sm" value="{{ $returnDevice->device_category }}" readonly>
            </div>

            <div class="form-group">
                <label for="devicenumber">Device Number</label>
                <input type="text" id="devicenumber" name="devicenumber" class="form-control form-control-sm" value="{{ $returnDevice->devicenumber }}" readonly>
            </div>

            <div class="form-group">
                <label for="vehiclenumber">Vehicle Number</label>
                <input type="text" id="vehiclenumber" name="vehiclenumber" class="form-control form-control-sm" value="{{ $returnDevice->vehiclenumber }}" readonly>
            </div>

            <div class="form-group">
                <label for="reason">Reason for Return</label>
                <textarea id="reason" name="reason" class="form-control form-control-sm" readonly>{{ $returnDevice->reason }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" class="form-control form-control-sm" required>
                    <option value="approved" {{ $returnDevice->status == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="not approved" {{ $returnDevice->status == 'not approved' ? 'selected' : '' }}>Not Approved</option>
                </select>
            </div>

            <button type="button" class="btn btn-secondary btn-block mt-3" onclick="window.history.back();">Back</button>
            <button type="submit" class="btn btn-success btn-block mt-3">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
